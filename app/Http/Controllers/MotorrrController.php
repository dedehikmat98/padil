<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Motorrr;
use App\Tipe;
use App\Merek;


class MotorrrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        // //
        // if($request->ajax()){
        //     $mmotor = Motorrr::all();
        //     return Datatables::of($mmotor)
        //       ->addColumn('action',function($motorrr){
        //         return view('datatable._action', [
        //             'model'     => $motorrr,
        //             'form_url'  => route('motor.destroy',$motorrr->id),
        //             'edit_url'  => route('motor.edit',$motorrr->id),
        //             'confirm_message' => 'Yakin Ingin Menghapus ' . $motorrr->name . ' ?' ]);
        //     })->make(true);

        //       }


        // $html = $htmlBuilder
        // ->addColumn(['data'=>'id','name'=>'id', 'title'=>'No'])
        // ->addColumn(['data'=>'nama','name'=>'nama', 'title'=>'Nama'])
        // ->addColumn(['data'=>'merk','name'=>'merk', 'title'=>'Merek'])
        // ->addColumn(['data'=>'tipe','name'=>'tipe', 'title'=>'Tipe'])
        // ->addColumn(['data'=>'foto','name'=>'foto', 'title'=>'Foto'])


        // ->addColumn(['data'=>'action','name'=>'action','title'=>'Action','orderable'=>false,'searchable'=>false]);
        // return view('motor.index')->with(compact('html'));

        $motor = Motorrr::all();
        return view('motor.index',compact('motor'));
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
        $merek = Merek::all();
        return view('motor.create',compact('tipe','merek'));
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
        $motor = new Motorrr();
        $motor->nama = $request->nama;
        $motor->mereks_id = $request->mereks_id;
        $motor->tipes_id = $request->tipes_id;
        $motor->foto = $request->foto;
        if ($request->hasfile('foto')) {
            $motors = $request->file('foto');
            $extension = $motors->getClientOriginalExtension();
            $filename = str_random(6).'.'.$extension;
            $destinationPath = public_path().'/img';
            $motors->move($destinationPath, $filename);
            $motor->foto = $filename;
        }
        $motor->save();

        return redirect()->route('Motor.index');

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
        $tipe = Tipe::all();
        $merek = Merek::all();
        $motor = Motorrr::findOrFail($id);
        return view('motor.edit', compact('motor','tipe','merek'));
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
        $motor = Motorrr::findOrFail($id);
        $motor->nama = $request->nama;
        $motor->mereks_id = $request->mereks_id;
        $motor->tipes_id = $request->tipes_id;
        $motor->foto = $request->foto;
        if ($request->hasfile('foto')) {
            $motors = $request->file('foto');
            $extension = $motors->getClientOriginalExtension();
            $filename = str_random(6).'.'.$extension;
            $destinationPath = public_path().'/img';
            $motors->move($destinationPath, $filename);
            $motor->foto = $filename;
        }
        $motor->save();
                return redirect()->route('Motor.index');


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
        $motor=Motorrr::findOrFail($id);
        $motor->delete();
        return redirect()->route('Motor.index');

    }
}
