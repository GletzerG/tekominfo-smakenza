<?php

namespace App\Http\Controllers;
use App\Models\siswa;
use Illuminate\Http\Request;

class DataAbsensiController extends Controller
{
    public function monitoring(Request $request)
{
    $tanggal = $request->tanggal ?? date('Y-m-d');

    $query = siswa::with('absensi');

    if ($request->kelas) {
        $query->where('kelas', $request->kelas);
    }

    if ($request->jurusan) {
        $query->where('jurusan', $request->jurusan);
    }

    $siswa = $query->get();

    return view('navbar.datasiswa.datasiswa', compact('siswa'));
}

}
