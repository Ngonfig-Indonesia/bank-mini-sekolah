<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use App\Models\Tariksaldo;
use Illuminate\Http\Request;
use App\Models\Tabunganmasuk;
use Illuminate\Support\Collection;
use PhpParser\ErrorHandler\Collecting;

class TariksaldoController extends Controller
{
    public function index()
    {
        $transaksi = Tariksaldo::count();
        $tanggal = date_create();
        $format = date_format($tanggal, "Y/m/d");
        $hasil = "$format/00$transaksi";
        $data = Tariksaldo::with('nasabah')->latest()->get();
        $nasabah = Nasabah::select('id','no_rekening','nama')->with('tabunganmasuk','tariksaldo','transfer_pengirim','transfer_penerima')->get();
        
        return view('/admin/tariksaldo/index', compact('data','nasabah','hasil'));
    }

    public function create(Request $request)
    {
        // $nasabah = Nasabah::with('tabunganmasuk','tariksaldo','transfer_pengirim','transfer_penerima')->get();
        // // dd($nasabah);
        // $req = $request->id_nasabah;
        // $cek = 0;
        // foreach ($nasabah as $key) {
        //     $show = $key;
        // }
        // dd($show);
        //   foreach($nasabah->tariksaldo as $tarik){
        //     $cek -= $tarik->jumlah;
        //   }
        //   foreach ($nasabah->transfer_penerima as $penerima) {
        //    $cek += $penerima->jumlah_pengirim;
        //   }
        //   foreach ($nasabah->transfer_pengirim as $pengirim) {
        //    $cek -= $pengirim->jumlah_pengirim;
        //   }
        // if ($cek > 0) {
        //     return $cek;
        // }else{
        //     return 0;
        // }
        // if (Tariksaldo::where('id_nasabah') == $request->id_nasabah) {
            
        // }
        $data = Tariksaldo::create([
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
    public function cekSaldo()
    {
        $ceksaldo = Nasabah::with('tabunganmasuk','tariksaldo','transfer_pengirim','transfer_penerima')->get();
        return response()->json($ceksaldo, 200);
    }
    public function delete($id)
    {
        $data = Tariksaldo::findOrfail($id);
        $data->delete();
        if($data){
            return back()->with('success', 'Data berhasil di Terhapus');
        }else{
            return back()->with('error', 'Data tidak berhasil di Terhapus');
        }
    }
}
