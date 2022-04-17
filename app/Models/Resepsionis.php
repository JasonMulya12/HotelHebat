<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resepsionis extends Model
{
    protected $table = 'resepsionis';
    protected $fillable = ['email', 'password'];
    use HasFactory;
}
