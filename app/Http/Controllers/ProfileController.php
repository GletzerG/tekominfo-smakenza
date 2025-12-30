<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use App\Models\Activity;

class ProfileController extends Controller
{
    /**
     * Dashboard profile user.
     */
    public function index(): View
    {
        $user = Auth::user();
        $stats = [
            'projects' => 24,
            'tasks' => 156,
            'hours' => 1245,
            'achievements' => 12
        ];

        $activities = $user->activities()
            ->latest()
            ->limit(10)
            ->get();

        return view('profile.edit', compact('user', 'stats', 'activities'));
    }

    /**
     * Tampilkan form edit profile.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Tampilkan profile user.
     */
    public function show(): View
    {
        return view('user.profile', [
            'user' => Auth::user(),
        ]);
    }

    /**
     * Update profil user.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();

        try {
            // Handle avatar upload first
            if ($request->hasFile('avatar')) {
                $this->handleAvatarUpload($request, $user);
            }

            // Handle other fields
            $validatedData = $request->validated();

            // Remove avatar from validated data since we handled it separately
            unset($validatedData['avatar']);

            // Handle skills - convert array to JSON if needed
            if (isset($validatedData['skills']) && is_array($validatedData['skills'])) {
                $validatedData['skills'] = json_encode($validatedData['skills']);
            }

            $user->fill($validatedData);

            if ($user->isDirty('email')) {
                $user->email_verified_at = null;
            }

            $user->save();

            // Log activity
            $this->logActivity($user->id, 'Updated profile information');

            return Redirect::route('profile.edit')->with('status', 'profile-updated');

        } catch (\Exception $e) {
            \Log::error('Profile update failed: ' . $e->getMessage());
            return Redirect::route('profile.edit')
                ->withErrors(['general' => 'Terjadi kesalahan saat memperbarui profil. Silakan coba lagi.']);
        }
    }

    /**
     * Update detail profile custom (termasuk avatar).
     */
    public function updateProfile(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . Auth::id(),
            'phone' => 'nullable|string|max:20',
            'location' => 'nullable|string|max:255',
            'bio' => 'nullable|string|max:500',
            'skills' => 'nullable|array',
            'skills.*' => 'string|max:50',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $user = Auth::user();

        try {
            // Handle avatar upload
            if ($request->hasFile('avatar')) {
                $this->handleAvatarUpload($request, $user);
            }

            // Prepare data for update
            $updateData = $request->only(['name', 'email', 'phone', 'location', 'bio']);

            // Handle skills - convert to JSON string
            if ($request->has('skills') && is_array($request->skills)) {
                $updateData['skills'] = json_encode($request->skills);
            } elseif ($request->has('skills') && is_null($request->skills)) {
                $updateData['skills'] = null;
            }

            $user->update($updateData);

            $this->logActivity($user->id, 'Updated profile information');

            return redirect()->route('profile.index')
                ->with('success', 'Profile berhasil diupdate!');

        } catch (\Exception $e) {
            \Log::error('Profile update failed in updateProfile: ' . $e->getMessage());
            return redirect()->route('profile.index')
                ->withErrors(['general' => 'Terjadi kesalahan saat memperbarui profil. Silakan coba lagi.']);
        }
    }

    /**
     * Upload avatar saja (AJAX).
     */
    public function uploadAvatar(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ], [
            'avatar.required' => 'File avatar wajib dipilih.',
            'avatar.image' => 'File yang diupload harus berupa gambar.',
            'avatar.mimes' => 'Format gambar yang didukung: JPEG, PNG, JPG, GIF.',
            'avatar.max' => 'Ukuran gambar maksimal 2MB.'
        ]);

        $user = Auth::user();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'User tidak terautentikasi'
            ], 401);
        }

        try {
            $avatarPath = $this->handleAvatarUpload($request, $user);

            $this->logActivity($user->id, 'Updated profile picture');

            return response()->json([
                'success' => true,
                'message' => 'Avatar berhasil diupload!',
                'avatar_url' => Storage::url($avatarPath)
            ]);

        } catch (\Exception $e) {
            \Log::error('Avatar upload process failed: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat mengupload avatar.'
            ], 500);
        }
    }

    /**
     * Hapus akun user.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    /**
     * Helper method untuk handle avatar upload.
     */
    private function handleAvatarUpload(Request $request, $user): string
    {
        $avatarFile = $request->file('avatar');

        // Validate file
        if (!$avatarFile->isValid()) {
            throw new \Exception('File avatar tidak valid atau rusak.');
        }

        // Delete old avatar if exists
        if ($user->avatar) {
            Storage::delete('public/' . $user->avatar);
        }

        // Store new avatar
        $avatarPath = $avatarFile->store('avatars', 'public');

        if (!$avatarPath) {
            throw new \Exception('Gagal menyimpan file avatar');
        }

        $user->avatar = $avatarPath;
        $user->save();

        return $avatarPath;
    }

    /**
     * Helper method untuk log activity.
     */
    private function logActivity(int $userId, string $action): void
    {
        Activity::create([
            'user_id' => $userId,
            'action' => $action,
            'type' => 'info'
        ]);
    }
}