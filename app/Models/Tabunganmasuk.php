<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Nasabah;

class Tabunganmasuk extends Model
{
    use HasFactory;
    protected $table = 'tabunganmasuks';
    protected $fillable = ['id_nasabah','transaksi','jumlah'];

    public function nasabah()
    {
        return $this->belongsTo(Nasabah::class, 'id_nasabah');
    }
}
