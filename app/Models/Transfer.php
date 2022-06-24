<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;
    protected $table = 'transfers';
    protected $fillable = ['id_pengirim','id_penerima','transaksi','jumlah_pengirim'];

    public function nasabah_pengirim()
    {
        return $this->belongsTo(Nasabah::class, 'id_pengirim');
    }
    public function nasabah_penerima()
    {
        return $this->belongsTo(Nasabah::class, 'id_penerima');
    }

}
