<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasHotel extends Model
{
    protected $table = 'fasilitas';
    protected $fillable = ['nama_fasilitas', 'ket'];
    use HasFactory;
}
