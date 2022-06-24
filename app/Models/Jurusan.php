<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Nasabah;

class Jurusan extends Model
{
    use HasFactory;
    protected $table = 'jurusans';
    protected $fillable = ['jurusan'];
    
    public function nasabah()
    {
        return $this->hasMany(Nasabah::class);
    }
}
