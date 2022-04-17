<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'users';
    protected $fillable = ['name', 'email', 'password'];
    use HasFactory;
}
