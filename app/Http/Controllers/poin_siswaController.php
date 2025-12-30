<?php

namespace App\Http\Controllers;
use App\Models\siswa;
use Illuminate\Http\Request;

class poin_siswaController extends Controller
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

        return view('navbar.datasiswa.poin', compact('siswa'));
    }

    public function store(Request $request)
    {
        $deltas = $request->input('poin_delta', []);

        foreach ($deltas as $siswaId => $delta) {
            if ($delta != 0) {
                $siswa = Siswa::find($siswaId);

                if ($siswa) {
                    $siswa->poin += (int)$delta;

                    if ($siswa->poin < 0) {
                        $siswa->poin = 0;
                    }

                    $siswa->save();
                }
            }
         
        }

        return back()->with('success', 'Poin siswa berhasil disimpan');
    }
}
