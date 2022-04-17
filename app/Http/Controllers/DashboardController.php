<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->role === 'Admin'){
            return view('layouts.master');
        }
        elseif (Auth::user()->role === 'Resepsionis'){
            return view('layouts.resepsionis');
        }
        else{
            return view('/welcome');
        }
    }
}
