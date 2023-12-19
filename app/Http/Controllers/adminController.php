<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
{
    $supliers = DB::table('suplier')->get();

    return view('suplier.dasboardsuplier', compact('supliers'));
}


    public function updateStatus(Request $request, $id)
    {
        // Pastikan bahwa $id adalah integer atau sesuaikan dengan kebutuhan aplikasi Anda
        $id = (int)$id;

        // Update status menggunakan Query Builder
        DB::table('suplier')
            ->where('id', $id)
            ->update(['status' => $request->status]);

        return redirect()->back()->with('success', 'Status updated successfully');
    }

    public function deletePayment($id)
    {
        // Pastikan bahwa $id adalah integer atau sesuaikan dengan kebutuhan aplikasi Anda
        $id = (int)$id;

        // Hapus pembayaran menggunakan Query Builder
        DB::table('suplier')->where('id', $id)->delete();

        return redirect()->back()->with('success', 'Payment deleted successfully');
    }

    public function createPayment(Request $request)
    {
        // Validasi input form
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'harga' => 'required',
            'telur' => 'required',
            'payment_method' => 'required',

        ]);

        // Simpan data ke database menggunakan Query Builder
        $paymentId = DB::table('suplier')->insertGetId([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'telur' => $request->telur,
            'harga' => $request->harga,
            'payment_method' => $request->payment_method,
            'status' => 'Belum Dibayar',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Payment created successfully with ID: ' . $paymentId);
    }
}

