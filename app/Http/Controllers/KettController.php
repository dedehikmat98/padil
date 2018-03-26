<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Keterrangan;
use App\Motorrr;

class KettController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $keterangan = Keterrangan::all();
        return view('keterangan.index',compact('keterangan','motor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $motor = Motorrr::all();
        return view('keterangan.create',compact('motor'));
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
        $keterangan = new Keterrangan();
        $keterangan->keadaan = $request->keadaan;
        $keterangan->transmisi = $request->transmisi;
        $keterangan->bahanbkr = $request->bahanbkr;
        $keterangan->thnklr = $request->thnklr;
        $keterangan->harga = $request->harga;
        $keterangan->desk = $request->desk;
        $keterangan->motorrrs_id = $request->motorrrs_id;

        $keterangan->save();

        return redirect()->route('Keterangan.index');
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
        //
        $keterangan = Keterrangan::findOrFail($id);
        $motor = Motorrr::all();
        return view('keterangan.edit', compact('keterangan','motor'));
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
        //
        $keterangan = Keterrangan::findOrFail($id);
        $keterangan->keadaan = $request->keadaan;
        $keterangan->transmisi = $request->transmisi;
        $keterangan->bahanbkr = $request->bahanbkr;
        $keterangan->thnklr = $request->thnklr;
        $keterangan->harga = $request->harga;
        $keterangan->desk = $request->desk;
        $keterangan->motorrrs_id = $request->motorrrs_id;

        $keterangan->save();

        return redirect()->route('Keterangan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $keterangan=Keterrangan::findOrFail($id);
        $keterangan->delete();
        return redirect()->route('Keterangan.index');
    }
}
