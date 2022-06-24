<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nasabah;
use App\Models\Kelas;
use App\Models\Jurusan;

class NasabahController extends Controller
{
    public function index()
    {
        $transaksi = Nasabah::count();
        $tanggal = date_create();
        $format = date_format($tanggal, "Y/m/d");
        $str = strtotime($format);
        $hasil = "$str-00$transaksi";
        $data = Nasabah::with('kelas','jurusan')->latest()->get();
        $kelas = Kelas::all();
        $jurusan = Jurusan::all();
        return view('/admin/nasabah/index', compact('data','kelas','jurusan','hasil'));
    }
    public function create(Request $request)
    {
        $data = Nasabah::create([
            'no_rekening' => $request->no_rekening,
            'nama' => $request->nama,
            'nis' => $request->nis,
            'id_kelas' => $request->id_kelas,
            'id_jurusan' => $request->id_jurusan,
            'alamat' => $request->alamat,
            'status' => $request->status
        ]);
        
        if($data){
            return back()->with('success', 'Data berhasil di tambah');
        }else{
            return back()->with('error', 'Data tidak berhasil di tambah');
        }

    }
    public function edit($id)
    {
        $data = Nasabah::where('id', $id)->get();
        return response()->json($data, 200);
    }
    public function update(Request $request)
    {
        $data = Nasabah::where('id',$request->id)->update([
            'no_rekening' => $request->no_rekening,
            'nama' => $request->nama,
            'nis' => $request->nis,
            'id_kelas' => $request->id_kelas,
            'id_jurusan' => $request->id_jurusan,
            'alamat' => $request->alamat,
            'status' => $request->status
        ]);
        if($data){
            return back()->with('success', 'Data berhasil di Ubah');
        }else{
            return back()->with('error', 'Data tidak berhasil di Ubah');
        }
    }
    public function delete($id)
    {
        $data = Nasabah::findOrfail($id);
        $data->delete();
        if($data){
            return back()->with('success', 'Data berhasil di Terhapus');
        }else{
            return back()->with('error', 'Data tidak berhasil di Terhapus');
        }
    }
}
