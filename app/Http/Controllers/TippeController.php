<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipe;


class TippeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tipe=Tipe::all();
        return view('tipe.index',compact('tipe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tipe = Tipe::all();
        return view('tipe.create',compact('tipe'));
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
        $tipe = new Tipe();
        $tipe->namatipe = $request->namatipe;
        $tipe->save();

        return redirect()->route('Tipe.index');
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
        $tipe = Tipe::findOrFail($id);
        return view('tipe.edit', compact('tipe'));
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
        $tipe = Tipe::findOrFail($id);
        $tipe->namatipe = $request->namatipe;
        
        $tipe->save();
                return redirect()->route('Tipe.index');
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
        $tipe=Tipe::findOrFail($id);
        $tipe->delete();
        return redirect()->route('Tipe.index');
    }
}
