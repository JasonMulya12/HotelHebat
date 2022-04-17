<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    protected $table = 'reservasi';
    protected $fillable = ['nama_tamu', 'tgl_check_in', 'tgl_check_out'];
    use HasFactory;
}
