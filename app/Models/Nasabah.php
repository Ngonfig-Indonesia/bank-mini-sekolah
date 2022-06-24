<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kelas;
use App\Models\Jurusan;
use App\Models\Tabunganmasuk;
use App\Models\Tariksaldo;
use App\Models\Transfer;

class Nasabah extends Model
{
    use HasFactory;
    protected $table = 'nasabahs';
    protected $fillable = ['no_rekening','nama','nis','id_kelas','id_jurusan','alamat','status'];

    public function tabunganmasuk()
    {
        return $this->hasMany(Tabunganmasuk::class, 'id_nasabah');
    }

    public function tariksaldo()
    {
        return $this->hasMany(Tariksaldo::class, 'id_nasabah');
    }

    public function transfer_pengirim()
    {
        return $this->hasMany(Transfer::class, 'id_pengirim');
    }
    public function transfer_penerima()
    {
        return $this->hasMany(Transfer::class, 'id_penerima');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan');
    }
    
}
