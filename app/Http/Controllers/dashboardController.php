<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(){
        $akun=DB::table('pembayaran')->get();

        return view ('admin.dashboardadmin', compact('akun'));
    }

    public function updateStatus(Request $request, $id)
    {
        // Pastikan bahwa $id adalah integer atau sesuaikan dengan kebutuhan aplikasi Anda
        $id = (int)$id;

        // Update status menggunakan Query Builder
        DB::table('pembayaran')
            ->where('id', $id)
            ->update(['status' => $request->status]);

        return redirect()->back()->with('success', 'Status updated successfully');
    }

    public function deletePayment($id)
    {
        // Pastikan bahwa $id adalah integer atau sesuaikan dengan kebutuhan aplikasi Anda
        $id = (int)$id;

        // Hapus pembayaran menggunakan Query Builder
        DB::table('pembayaran')->where('id', $id)->delete();

        return redirect()->back()->with('success', 'Payment deleted successfully');
    }

    public function createPayment(Request $request)
    {
        // Validasi input form
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'telur' => 'required',
            'harga' => 'nullable',
            'payment_method' => 'required',
        ]);

        // Simpan data ke database menggunakan Query Builder
        $paymentId = DB::table('pembayaran')->insertGetId([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'telur' => $request->telur,
            'payment_method' => $request->payment_method,
            'harga' => $request->harga,
            'status' => 'Belum Dibayar',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Payment created successfully with ID: ' . $paymentId);
    }
}
