<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Controller extends BaseController
{

    public function riwayat()
    {
        $pembayaran = DB::table('pembayaran')->get();

        return view('user/riwayat-pembelian', compact('pembayaran'));
    }

    public function barangmasuk()
    {
        $suplier = DB::table('suplier')->get();

        return view('admin/riwayat-barang-masuk', compact('suplier'));
    }

    public function pengiriman()
    {
        $suplier = DB::table('suplier')->get();

        return view('suplier/riwayat-pengirimansuplier', compact('suplier'));
    }
}
