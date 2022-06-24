<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Galeri;
use App\Models\Guru;
use App\Models\Informasi;
use App\Models\Profil;
use App\Models\Siswa;

class HomeController extends Controller
{
    public function home()
    {
        $data = Slide::latest()->limit(3)->get();
        $galeri = Galeri::latest()->limit(6)->get();
        $informasi = Informasi::latest()->limit(5)->get();
        return view('welcome', compact('data','galeri','informasi'));
    }
    public function informasiDetail($id)
    {
        $informasi = Informasi::find($id);
        return view('readmore', compact('informasi'));
    }
    public function profil()
    {
        $profil = Profil::all();
        return view('profil', compact('profil'));
    }
    public function informasi()
    {
        $informasis = Informasi::paginate(5);
        return view('informasi', compact('informasis'));
    }
    public function siswaGuru()
    {
        $siswa = Siswa::all();
        $guru = Guru::all();
        return view('datasekolah', compact('siswa','guru'));
    }
    public function alumni()
    {
        $alumni = Alumni::all();
        return view('alumni', compact('alumni'));
    }
}
