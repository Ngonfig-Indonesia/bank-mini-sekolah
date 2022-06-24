<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nasabah;

class SaldoController extends Controller
{
    public function index()
    {
        $data = Nasabah::with('tabunganmasuk','tariksaldo','transfer_pengirim','transfer_penerima')->get();
        return view('/admin/saldo/index', compact('data'));
        // dd($data);
    }
}
