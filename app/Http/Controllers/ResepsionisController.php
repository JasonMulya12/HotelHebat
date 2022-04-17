<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;

class ResepsionisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resepsionis = User::latest()->paginate(5);
        return view('resepsionis.index', compact('resepsionis'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resepsionis.create');
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
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('resepsionis.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resepsionis  $resepsionis
     * @return \Illuminate\Http\Response
     */
    public function show(Resepsionis $resepsioni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resepsionis  $resepsionis
     * @return \Illuminate\Http\Response
     */
    public function edit(User $resepsioni)
    {
        return view('resepsionis.edit', compact('resepsioni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resepsionis  $resepsionis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $resepsioni)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $resepsioni->update($request->all());
        return redirect()->route('resepsionis.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resepsionis  $resepsionis
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $resepsioni)
    {
        $resepsioni->delete();
        return redirect()->route('resepsionis.index')->with('success', 'Berhasil Menghapus Data!');
    }
}
