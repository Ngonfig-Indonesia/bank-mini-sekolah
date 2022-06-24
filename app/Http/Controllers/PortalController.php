<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;
use App\Models\Galeri;
use App\Models\Slide;
use App\Models\Informasi;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Alumni;

class PortalController extends Controller
{
    public function show()
    {
        $data = Profil::all();
        return view('admin/profile/index', compact('data'));
    }
    public function profilEdit($id)
    {
        $data = Profil::find($id);
        return view('admin/profile/edit', compact('data'));
    }
    public function profilsUpdate(Request $request)
    {
        $imageName = time().$request->gambar->getClientOriginalName(); 
            $request->file('gambar')->storeAs('public/profil', $imageName);
        $data = Profil::where('id',$request->id)->update([
            'judul' => $request->judul,
            'gambar' => $imageName,
            'des' => $request->des
        ]);
        if($data){
            return redirect()->route('profil.show')->with('success', 'Profil Berhasil Terupdate');
        }else{
            return back()->with('error', 'Profil Tidak Berhasil Terupdate');
        }
    }
    public function galeri()
    {
        $data = Galeri::all();
        return view('admin/galeri/index', compact('data'));
    }
    public function galeriCreate(Request $request)
    {
        // if($request->hasFile('image')){
            $imageName = time().$request->gambar->getClientOriginalName(); 
            $request->file('gambar')->storeAs('public/images', $imageName);
            $data = new Galeri([
                'judul' => $request->judul,
                'gambar' => $imageName,
            ]);
            $data->save();

            if($data){
                return back()->with('success', 'Gambar Berhasil Bertambah');
            }else{
                return back()->with('error', 'Gambar Tidak Berhasil Bertambah');
            }
    }
    public function galeriDelete($id)
    {
        $data = Galeri::where('id', $id)->first();
        $data->delete();
        if($data){
            return back()->with('success', 'Gambar Berhasil Terhapus');
        }else{
            return back()->with('error', 'Gambar Tidak Berhasil Bertambah');
        }
    }
    public function slide()
    {
        $data = Slide::all();
        return view('admin/slide/index', compact('data'));
    }
    public function slideCreate(Request $request)
    {
         // if($request->hasFile('image')){
            $imageName = time().$request->gambar->getClientOriginalName(); 
            $request->file('gambar')->storeAs('public/slide', $imageName);
            $data = new Slide([
                'judul' => $request->judul,
                'gambar' => $imageName,
            ]);
            $data->save();

            if($data){
                return back()->with('success', 'Gambar Berhasil Bertambah');
            }else{
                return back()->with('error', 'Gambar Tidak Berhasil Bertambah');
            }
    }
    public function slideDelete($id)
    {
        $data = Slide::where('id', $id)->first();
        $data->delete();
        if($data){
            return back()->with('success', 'Gambar Berhasil Terhapus');
        }else{
            return back()->with('error', 'Gambar Tidak Berhasil Bertambah');
        }
    }
    public function informasi()
    {
        $data = Informasi::all();
        return view('admin/informasi/index', compact('data'));
    }
    public function informasiCreate(Request $request)
    {
        $imageName = time().$request->gambar->getClientOriginalName(); 
        $request->file('gambar')->storeAs('public/infromasi', $imageName);
        $data = Informasi::create([
            'judul' => $request->judul,
            'informasi' => $request->informasi,
            'gambar' => $imageName,
        ]);
        if($data){
            return back()->with('success', 'Informasi Berhasil Berambah');
        }else{
            return back()->with('error', 'informasi Tidak Berhasil Bertambah');
        }
    }
    public function informasiEdit($id)
    {
        $data = Informasi::find($id);
        return view('admin/informasi/edit', compact('data'));
    }
    public function informasiUpdate(Request $request)
    {
        $data = Informasi::where('id',$request->id)->update([
            'judul' => $request->judul,
            'informasi' => $request->informasi
        ]);
        if($data){
            return redirect()->route('informasi.index')->with('success', 'Informasi Berhasil Terupdate');
        }else{
            return back()->with('error', 'Informasi Tidak Berhasil Terupdate');
        }
    }
    public function informasiDelete($id)
    {
        $data = Informasi::where('id', $id)->first();
        $data->delete();

        if($data){
            return back()->with('success', 'Informasi Berhasil Terhapus');
        }else{
            return back()->with('error', 'Informasi Tidak Berhasil Terhapus');
        }
    }
    public function siswaGuru()
    {
        $guru = Guru::latest()->get();
        $siswa = Siswa::latest()->get();
        return view('/admin/datasekolah/index', compact('guru','siswa'));
    }
    public function siswaCreate(Request $request)
    {
        $siswa = Siswa::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);
        if($siswa){
            return back()->with('success', 'Siswa Berhasil Tertambah');
        }else{
            return back()->with('error', 'Siswa Tidak Berhasil Tertambah');
        }
    }
    public function guruCreate(Request $request)
    {
        $guru = Guru::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);
        if($guru){
            return back()->with('success', 'Guru Berhasil Tertambah');
        }else{
            return back()->with('error', 'Guru Tidak Berhasil Tertambah');
        }
    }

    public function editGuru($id)
    {
        $guru = Guru::find($id);
        return view('admin/datasekolah/editguru', compact('guru'));
    }
    public function editSiswa($id)
    {
        $siswa = Siswa::find($id);
        return view('admin/datasekolah/editsiswa', compact('siswa'));
    }
    public function updateGuru(Request $request)
    {
        $guru = Guru::where('id', $request->id)->update([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);
        if($guru){
            return redirect()->route('siswa.guru.index')->with('success', 'Guru Berhasil Terupdate');
        }else{
            return redirect()->route('siswa.guru.index')->with('error', 'Guru Tidak Berhasil Terupdate');
        }
    }
    public function updateSiswa(Request $request)
    {
        $siswa = Siswa::where('id', $request->id)->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);
        if($siswa){
            return redirect()->route('siswa.guru.index')->with('success', 'Siswa Berhasil Terupdate');
        }else{
            return redirect()->route('siswa.guru.index')->with('error', 'Siswa Tidak Berhasil Terupdate');
        }
    }
    public function deleteSiswa($id)
    {
        $siswa = Siswa::where('id', $id)->first();
        $siswa->delete();
        if($siswa){
            return back()->with('success', 'Siswa Berhasil Terhapus');
        }else{
            return back()->with('error', 'Siswa Tidak Berhasil Terhapus');
        }   
    }
    public function deleteGuru($id)
    {
        $guru = Guru::where('id', $id)->first();
        $guru->delete();
        if($guru){
            return back()->with('success', 'Guru Berhasil Terhapus');
        }else{
            return back()->with('error', 'Guru Tidak Berhasil Terhapus');
        }   
    }
    public function alumni()
    {
        $data = Alumni::latest()->get();
        return view('admin/alumni/index', compact('data'));
    }
    public function alumniCreate(Request $request)
    {
        $data = Alumni::create([
            'nama' => $request->nama,
            'angkatan' => $request->angkatan,
            'email' => $request->email,
            'alamat' => $request->alamat
        ]);

        if($data){
            return back()->with('success', 'Alumni Berhasil Bertambah');
        }else{
            return back()->with('error', 'Alumni Tidak Berhasil Bertambah');
        }   
    }
    public function alumniEdit($id)
    {
        $data = Alumni::find($id);
        return view('admin/alumni/edit', compact('data'));
    }
    public function alumniUpdate(Request $request)
    {
        $data = Alumni::where('id', $request->id)->update([
            'nama' => $request->nama,
            'angkatan' => $request->angkatan,
            'email' => $request->email,
            'alamat' => $request->alamat
        ]);

        if($data){
            return redirect()->route('alumni')->with('success', 'Alumni Berhasil Berubah');
        }else{
            return redirect()->route('alumni')->with('error', 'Alumni Tidak Berhasil Berubah');
        }   
    }
    public function alumniDelete($id)
    {
        $data = Alumni::where('id', $id)->first();
        $data->delete();
        if($data){
            return back()->with('success', 'Alumni Berhasil Terhapus');
        }else{
            return back()->with('error', 'Alumni Tidak Berhasil Terhapus');
        }  
    }
    
}
