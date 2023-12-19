<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class riwayatController extends Controller
{
    public function updateharga()
    {
        $harga = DB::table('harga')->get();

        return view('admin.riwayharga', compact('harga'));
    }


    public function deletePayment($id)
    {
        $id = (int)$id;

        // Hapus pembayaran menggunakan Query Builder
        DB::table('harga')->where('id', $id)->delete();

        return redirect()->back()->with('success', 'Payment deleted successfully');
    }

    public function createPayment(Request $request)
    {
        // Validasi input form
        $request->validate([
            'harga' => 'required',
        ]);

        // Simpan data ke database menggunakan Query Builder
        $paymentId = DB::table('harga')->insertGetId([
            'harga' => $request->harga,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect()->back()->with('success', 'Payment created successfully with ID: ' . $paymentId);
    }
}
