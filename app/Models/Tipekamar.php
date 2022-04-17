<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipekamar extends Model
{
    protected $table = 'tipe_kamar';
    protected $fillable = ['tipe_kamar', 'jumlah_kamar'];
    use HasFactory;
}
