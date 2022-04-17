<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasKamar extends Model
{
    protected $table = 'fasilitaskamar';
    protected $fillable = ['tipe_kamar', 'fasilitas_kamar'];
    use HasFactory;
}
