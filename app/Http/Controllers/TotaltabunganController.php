<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tabunganmasuk;
use App\Models\Nasabah;

class TotaltabunganController extends Controller
{
    public function index()
    {
        $transaksi = Tabunganmasuk::count();
        $tanggal = date_create();
        $format = date_format($tanggal, "Y/m/d");
        $hasil = "$format/00$transaksi";
        $data = Tabunganmasuk::with('nasabah')->latest()->get();
        $nasabah = Nasabah::select('id','no_rekening')->get();
        return view('/admin/totaltabungan/index', compact('data','nasabah','hasil'));
    }
}
