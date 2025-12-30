<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
<<<<<<< HEAD
        'role',
        'is_verified',
        'phone',
        'location',
        'bio',
        'avatar',
        'profile_photo_path',
        'expertise',
        'specialties',
        'rating',
        'total_students',
        'mentor_badge',
        'badge_color',
        'skills',
        'total_projects',
        'completed_tasks',
        'total_hours',
        'achievements',
=======
        'role'
>>>>>>> 35b9397e4565373c91cf8c37f3751f0aff7645c3
    ];

    /**
     * Attributes yang disembunyikan saat model di-serialize.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Casting tipe data untuk kolom tertentu.
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'specialties' => 'array', // JSON → array
        'skills' => 'array',      // JSON → array
        'rating' => 'decimal:2',
        'is_verified' => 'boolean',
    ];

<<<<<<< HEAD
    /**
     * Mengambil URL avatar user.
     */
    public function getAvatarUrlAttribute()
    {
        if ($this->avatar) {
            return asset('storage/' . $this->avatar);
        }

        if ($this->profile_photo_path) {
            return asset('storage/' . $this->profile_photo_path);
        }

        // Default avatar placeholder
        $initials = strtoupper(substr($this->name, 0, 2));
        return "https://via.placeholder.com/400x400/4F46E5/FFFFFF?text={$initials}";
    }

    /**
     * Mendapatkan nama role user.
     */
    public function getRoleNameAttribute()
    {
        if (method_exists($this, 'getRoleNames')) {
            return $this->getRoleNames()->first();
        }

        return $this->role ?? 'User';
    }

    /**
     * Relasi ke tabel activities (satu user punya banyak aktivitas).
     */
    public function activities()
    {
        return $this->hasMany(Activity::class, 'user_id');
=======
    public function siswa() {
        return $this->hasOne(siswa::class);
>>>>>>> 35b9397e4565373c91cf8c37f3751f0aff7645c3
    }
}
