<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tabunganmasuk;
use App\Models\Nasabah;

class TabunganmasukController extends Controller
{
    public function index()
    {
        $transaksi = Tabunganmasuk::count();
        $tanggal = date_create();
        $format = date_format($tanggal, "Y/m/d");
        $hasil = "$format/00$transaksi";
        $data = Tabunganmasuk::with('nasabah')->latest()->get();
        $nasabah = Nasabah::select('id','no_rekening','nama')->get();
        return view('/admin/tabungan/index', compact('data','nasabah','hasil'));
    }

    public function create(Request $request)
    {
        $data = Tabunganmasuk::create([
            'id_nasabah' => $request->id_nasabah,
            'transaksi' => $request->transaksi,
            'jumlah' => $request->jumlah
        ]);
        if($data){
            return back()->with('success', 'Transaksi berhasil');
        }else{
            return back()->with('error', 'Transaksi tidak berhasil');
        }
    }
    public function delete($id)
    {
        $data = Tabunganmasuk::findOrfail($id);
        $data->delete();
        if($data){
            return back()->with('success', 'Data berhasil di Terhapus');
        }else{
            return back()->with('error', 'Data tidak berhasil di Terhapus');
        }
    }
}
