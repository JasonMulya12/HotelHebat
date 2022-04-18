<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Pemesanan;

class ReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $reservasis = Pemesanan::latest()->paginate(5);

        $reservasis = Pemesanan::when($request->search, function ($query) use ($request) {
            $query->where('nama_tamu', 'like', "%{$request->search}%");;
        })->orderBy('created_at', 'desc')->paginate(150);

        $reservasis->appends($request->only('search'));

        if (request()->filter) {
            $filter = Carbon::parse(request()->filter)->toDateTimeString();
            $pemesanans = Pemesanan::where('tgl_check_in', '=', "{$filter}")->orderBy('created_at', 'desc')->paginate(5);
        } else {
            $data = Pemesanan::latest()->get();
        }
        
        return view('reservasi.index', compact('reservasis'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function show(Reservasi $reservasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservasi $reservasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservasi $reservasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservasi $reservasi)
    {
        //
    }
}
