<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;

class JurusanController extends Controller
{
    public function index()
    {
        $data = Jurusan::all();
        return view('/admin/jurusan/index', compact('data'));
    }
    public function create(Request $request)
    {
        $data = Jurusan::create([
            'jurusan' => $request->jurusan
        ]);
        if($data){
            return back()->with('success', 'Data berhasil di tambah');
        }else{
            return back()->with('error', 'Data tidak berhasil di tambah');
        }
    }
    public function edit($id)
    {
        $data = Jurusan::where('id', $id)->get();
        return response()->json($data, 200);
    }
    
    public function update(Request $request)
    {
        $data = Jurusan::where('id',$request->id)->update([
            'jurusan' => $request->jurusan,
        ]);
        if($data){
            return back()->with('success', 'Data berhasil di Ubah');
        }else{
            return back()->with('error', 'Data tidak berhasil di Ubah');
        }
    }
    public function delete($id)
    {
        $data = Jurusan::findOrfail($id);
        $data->delete();
        if($data){
            return back()->with('success', 'Data berhasil di Terhapus');
        }else{
            return back()->with('error', 'Data tidak berhasil di Terhapus');
        }
    }
}
