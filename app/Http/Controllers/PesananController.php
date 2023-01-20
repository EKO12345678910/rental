<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobil = order::all();
        return view('mobil.pesanan.index', compact('mobil'),[
            'title' => 'order',
            'active' => 'order'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mobil = new order;
        return view('mobil.pesanan.create', compact('mobil'),[
            'title' => 'order',
            'active' => 'order'
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
        $mobil = new order;
        $mobil->name = $request->name;
        $mobil->email = $request->email;
        $mobil->number = $request->number;
        $mobil->days_id = $request->days_id;
        $mobil->cars_id = $request->cars_id;
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
        $mobil = order::find($id);
        return view('mobil.pesanan.edit', compact('mobil'), [
            'title' => 'order',
            'active' => 'order'
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
        $mobil = order::find($id);
        $mobil->name = $request->name;
        $mobil->email = $request->email;
        $mobil->number = $request->number;
        $mobil->days_id = $request->days_id;
        $mobil->cars_id = $request->cars_id;
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
        $mobil = order::find($id);
        $mobil->delete();
        return redirect('pesanan');
    }
}
