<?php

namespace App\Http\Controllers;

use App\Models\Tipekamar;
use Illuminate\Http\Request;

class TipekamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipekamars = TipeKamar::latest()->paginate(5);
        return view('tipekamar.index', compact('tipekamars'))->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipekamar.create');    
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
            'jumlah_kamar' => 'required'
        ]);

        TipeKamar::create($request->all());
        return redirect()->route('tipekamar.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tipekamar  $tipekamar
     * @return \Illuminate\Http\Response
     */
    public function show(Tipekamar $tipekamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tipekamar  $tipekamar
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipekamar $tipekamar)
    {
        return view('tipekamar.edit', compact('tipekamar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tipekamar  $tipekamar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipekamar $tipekamar)
    {
        $request->validate([
            'tipe_kamar' => 'required',
            'jumlah_kamar' => 'required'
        ]);

        $tipekamar->update($request->all());
        return redirect()->route('tipekamar.index')->with('success', 'Berhasil Mengubah Data!');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipekamar  $tipekamar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipekamar $tipekamar)
    {
        $tipekamar->delete();
        return redirect()->route('tipekamar.index')->with('success', 'Berhasil Menghapus Data!');
    }
}
