<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\siswa; 

class BulkSiswaController extends Controller
{
    public function showForm()
    {
        return view('auth.bulk_register'); // bisa pakai view yang sama 
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:csv,txt',
        ]);
    
        $path = $request->file('file')->getRealPath();
    
        $rows = array_map('str_getcsv', file($path));
        $header = array_shift($rows);
    
        $now = now();
    
        DB::beginTransaction();
 
    
        try {
    
            foreach ($rows as $cols) {
    
                $nis = trim($cols[0] ?? '');
                $name = trim($cols[1] ?? 'Siswa '.$nis);
                $email = trim($cols[2] ?? strtolower($nis).'@siswa.local');
                $passwordPlain = trim($cols[3] ?? '');
                $passwordHash = Hash::make($passwordPlain);
    
                // INSERT USERS
                $userId = DB::table('users')->insertGetId([
                    'name' => $name,
                    'email' => $email,
                    'password' => $passwordHash,
                    'created_at' => $now,
                    'updated_at' => $now,
                    'role' => 'siswa',
                ]);
    
                // INSERT SISWA
                DB::table('siswa')->insert([
                    'user_id' => $userId,
                    'nis' => $nis,
                    'name' => $name,
                    'created_at' => $now,
                    'updated_at' => $now,
                ]);
            }
    
            DB::commit();
    
            return back()->with('success', 'Import berhasil! Total siswa: '.count($rows));
    
        } catch (\Exception $e) {
    
            DB::rollBack();
           
            return back()->with('error', 'Gagal: '.$e->getMessage());
        }
    }
    
        
}
