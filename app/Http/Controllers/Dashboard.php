<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nasabah;
use App\Models\Tabunganmasuk;

class Dashboard extends Controller
{
    public function index()
    {
        $nasabah = Nasabah::count();
        $totalmasuk = Tabunganmasuk::count();
        $totalsimpan = Tabunganmasuk::select('jumlah')->get();
        // $aktif = Nasabah::with('tabunganmasuk','tariksaldo','transfer_pengirim','transfer_penerima')->get();
        return view('/admin/home', compact('nasabah','totalmasuk','totalsimpan'));
    }
}
