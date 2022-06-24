<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transfer;
use App\Models\Nasabah;

class TransferController extends Controller
{
    public function index()
    {
        $transaksi = Transfer::count();
        $tanggal = date_create();
        $format = date_format($tanggal, "Y/m/d");
        $hasil = "$format/00$transaksi";
        $data = Transfer::with('nasabah_pengirim','nasabah_penerima')->latest()->get();
        $nasabah = Nasabah::select('id','no_rekening')->get();
        return view('/admin/transfer/index', compact('data','nasabah','hasil'));
    }

    public function create(Request $request)
    {
        $data = Transfer::create([
            'id_pengirim' => $request->id_pengirim,
            'id_penerima' => $request->id_penerima,
            'transaksi' => $request->transaksi,
            'jumlah_pengirim' => $request->jumlah_pengirim,
        ]);
        if($data){
            return back()->with('success', 'Transaksi berhasil');
        }else{
            return back()->with('error', 'Transaksi tidak berhasil');
        }
    }
    public function delete($id)
    {
        $data = Transfer::findOrfail($id);
        $data->delete();
        if($data){
            return back()->with('success', 'Data berhasil di Terhapus');
        }else{
            return back()->with('error', 'Data tidak berhasil di Terhapus');
        }
    }
}
