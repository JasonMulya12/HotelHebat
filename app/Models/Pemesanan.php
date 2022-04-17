<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table = 'pemesanan';
    protected $fillable = ['nama_pemesan', 'email', 'no_hp', 'nama_tamu', 'tipe_kamar', 'tgl_check_in', 'tgl_check_out'];
    use HasFactory;
}
