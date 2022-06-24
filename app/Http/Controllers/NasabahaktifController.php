<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nasabah;

class NasabahaktifController extends Controller
{
    public function index()
    {
        $data = Nasabah::with('tabunganmasuk','tariksaldo','transfer_pengirim','transfer_penerima')->get();
        // foreach ($data as $datas) {
        //     foreach ($datas->tabunganmasuk as $items){
        //         if (empty($items->id_nasabah == 1)){
        //             echo "Aktif";   
        //         }else{
        //             echo 'Tidak Aktif';
        //         }
        //     }
        // }
        // dd($ceks);
        return view('/admin/nasabahaktif/index', compact('data'));
    }
}
