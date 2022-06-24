<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Nasabah;

class Tariksaldo extends Model
{
    use HasFactory;
    protected $table = 'tariksaldos';
    protected $fillable = ['id_nasabah','transaksi','jumlah'];

    public function nasabah()
    {
        return $this->belongsTo(Nasabah::class, 'id_nasabah');
    }
}
