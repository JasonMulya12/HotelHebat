<?php

namespace App\Http\Controllers;

use App\Models\FasilitasHotel;
use Illuminate\Http\Request;

class FasilitasHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitashotels = FasilitasHotel::latest()->paginate(5);
        return view('fasilitashotel.index', compact('fasilitashotels'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fasilitashotel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_fasilitas' => 'required',
            'ket' => 'required'
        ]);

        FasilitasHotel::create($request->all());
        return redirect()->route('fasilitashotel.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FasilitasHotel  $fasilitasHotel
     * @return \Illuminate\Http\Response
     */
    public function show(FasilitasHotel $fasilitashotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FasilitasHotel  $fasilitasHotel
     * @return \Illuminate\Http\Response
     */
    public function edit(FasilitasHotel $fasilitashotel)
    {
        return view('fasilitashotel.edit', compact('fasilitashotel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FasilitasHotel  $fasilitasHotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FasilitasHotel $fasilitashotel)
    {
        $request->validate([
            'nama_fasilitas' => 'required',
            'ket' => 'required'
        ]);

        $fasilitashotel->update($request->all());
        return redirect()->route('fasilitashotel.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FasilitasHotel  $fasilitasHotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(FasilitasHotel $fasilitashotel)
    {
        $fasilitashotel->delete();
        return redirect()->route('fasilitashotel.index')->with('success', 'Berhasil Menghapus Data!');
    }
}
