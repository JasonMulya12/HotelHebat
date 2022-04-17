<?php

namespace App\Http\Controllers;

use App\Models\FasilitasKamar;
use Illuminate\Http\Request;
use App\Models\Tipekamar;

class FasilitasKamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitaskamars = FasilitasKamar::latest()->paginate(5);
        return view('fasilitaskamar.index', compact('fasilitaskamars'))->with('i', (request()->input('page', 1) - 1) * 5);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipekamar = Tipekamar::all();
        return view('fasilitaskamar.create', compact('tipekamar', $tipekamar));
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
            'tipe_kamar' => 'required',
            'fasilitas_kamar' => 'required'
        ]);
        FasilitasKamar::create($request->all());
        return redirect()->route('fasilitaskamar.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FasilitasKamar  $fasilitasKamar
     * @return \Illuminate\Http\Response
     */
    public function show(FasilitasKamar $fasilitaskamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FasilitasKamar  $fasilitasKamar
     * @return \Illuminate\Http\Response
     */
    public function edit(FasilitasKamar $fasilitaskamar)
    {
        $tipekamar = Tipekamar::all();
        return view('fasilitaskamar.edit', compact('fasilitaskamar', 'tipekamar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FasilitasKamar  $fasilitasKamar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FasilitasKamar $fasilitaskamar)
    {
        $request->validate([
            'tipe_kamar' => 'required',
            'fasilitas_kamar' => 'required'
        ]);

        $fasilitaskamar->update($request->all());
        return redirect()->route('fasilitaskamar.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FasilitasKamar  $fasilitasKamar
     * @return \Illuminate\Http\Response
     */
    public function destroy(FasilitasKamar $fasilitaskamar)
    {
        $fasilitaskamar->delete();
        return redirect()->route('fasilitaskamar.index')->with('success', 'Berhasil Menghapus Data!');
    }
}
