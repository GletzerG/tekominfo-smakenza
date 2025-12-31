<?php

namespace App\Http\Controllers;
use App\Models\siswa;
use Illuminate\Http\Request;
use App\Models\Product;

class UserPoinController extends Controller
{
    public function index(Request $request)
{
    $siswa = siswa::where('user_id', auth()->id())->first();
    $products = Product::where('is_active', true)->get();

    return view('navbar.profiles.PoinUser', compact('siswa', 'products'));
}

    public function redeem (Request $request) {
        $product = Product::findOrFail($request->product_id);
        $siswa = auth()->user()->siswa; // sesuaikan relasi kamu
    
        if ($siswa->poin < $product->price) {
            return response()->json([
                'message' => 'Poin tidak cukup'
            ], 400);
        }
    
        $siswa->poin -= $product->price;
        $siswa->save();
    
        return response()->json([
            'message' => 'Poin berhasil ditukar',
            'poin' => $siswa->poin
        ]);

    }
}
