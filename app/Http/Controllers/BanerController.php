<?php

namespace App\Http\Controllers;

use App\Baner;
use Illuminate\Http\Request;

class BanerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baneri = Baner::all();
        return view('admin.baner.lista-baner',['baneri'=>$baneri]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.baner.add-baner');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $baner = new Baner($request->all());
        $baner->save();
        return redirect('app/baneri');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Baner  $baner
     * @return \Illuminate\Http\Response
     */
    public function show(Baner $baner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Baner  $baner
     * @return \Illuminate\Http\Response
     */
    public function edit(Baner $baner)
    {

        return view('admin.baner.edit-baner',['baner'=>$baner]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Baner  $baner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Baner $baner)
    {
        $baner->fill($request->all());
        $baner->save();
        return redirect('app/baneri');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Baner  $baner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Baner $baner)
    {
        $baner->delete();
        return redirect('app/baneri');

    }
    public function veliki(Request $request)
    {
        $all = Baner::where('veliki',true)->get();

        foreach ($all as $one){
            $one->veliki = false;
            $one->save();
        }


        $slajder_ids = $request->slajder;
        if(is_array($slajder_ids)){
            foreach ($slajder_ids as $slajd){
                $smestaj = Baner::find($slajd);
                $smestaj->veliki = true;
                $smestaj->save();

            }
        }

        return redirect('app/baneri');
    }
    public function mali(Request $request)
    {
        $all = Baner::where('mali',true)->get();

        foreach ($all as $one){
            $one->mali = false;
            $one->save();
        }


        $slajder_ids = $request->slajder;
        if(is_array($slajder_ids)){
            foreach ($slajder_ids as $slajd){
                $smestaj = Baner::find($slajd);
                $smestaj->mali = true;
                $smestaj->save();

            }
        }

        return redirect('app/baneri');
    }

}
