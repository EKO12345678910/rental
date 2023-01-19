<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pesanan;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobil = pesanan::all();
        return view('mobil.pesanan.index', compact('mobil'),[
            'title' => 'pesanan',
            'active' => 'pesanan'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mobil = new pesanan;
        return view('mobil.pesanan.create', compact('mobil'),[
            'title' => 'pesanan',
            'active' => 'pesanan'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mobil = new pesanan;
        $mobil->name = $request->name;
        $mobil->email = $request->email;
        $mobil->Nomor = $request->Nomor;
        $mobil->haris_id = $request->haris_id;
        $mobil->mobils_id = $request->mobils_id;
        $mobil->save();

        return redirect('pesanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mobil = pesanan::find($id);
        return view('mobil.pesanan.edit', compact('mobil'), [
            'title' => 'pesanan',
            'active' => 'pesanan'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mobil = pesanan::find($id);
        $mobil->name = $request->name;
        $mobil->email = $request->email;
        $mobil->Nomor = $request->Nomor;
        $mobil->haris_id = $request->haris_id;
        $mobil->mobils_id = $request->mobils_id;
        $mobil->save();

        return redirect('pesanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mobil = pesanan::find($id);
        $mobil->delete();
        return redirect('pesanan');
    }
}
