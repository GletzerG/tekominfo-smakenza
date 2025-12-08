<?php
namespace App\Http\Controllers;
use App\Models\siswa;
use App\Models\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index(Request $request)
    {
        $kelas = $request->kelas;
        $jurusan = $request->jurusan;
    
        $query = Siswa::query();
    
        if ($kelas) {
            $query->where('kelas', $kelas);
        }
    
        if ($jurusan) {
            $query->where('jurusan', $jurusan);
        }
    
        $siswa = $query->orderBy('name', 'asc')->get();
    
        return view('navbar.datasiswa.absensi', compact('siswa'));
    }

    public function store(Request $request)
    {
        foreach ($request->status as $siswa_id => $status) {
            Absensi::create([
                'siswa_id' => $siswa_id,
                'tanggal' => date('Y-m-d'),
                'status' => $status
            ]);
        }

        return back()->with('success', 'Absensi berhasil disimpan!');
    }
}

