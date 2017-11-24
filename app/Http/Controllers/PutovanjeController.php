<?php

namespace App\Http\Controllers;

use App\OpisPutovanje;
use App\Putovanja;
use App\Smestaj;
use Illuminate\Http\Request;

class PutovanjeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $smestaji = Smestaj::all();
        return view('admin.putovanje.add-putovanje',['smestaji'=>$smestaji]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Putovanja  $putovanje
     * @return \Illuminate\Http\Response
     */
    public function show(Putovanja $putovanje)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Putovanja $putovanje
     * @return \Illuminate\Http\Response
     */
    public function edit(Putovanje $putovanje)
    {
        return view('admin.smestaj.edit-smestaj',['putovanje'=>$putovanje]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Putovanje  $putovanje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Putovanja $putovanje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Putovanje  $putovanje
     * @return \Illuminate\Http\Response
     */
    public function destroy(Putovanja $putovanje)
    {
        //
    }
    public function showAll()
    {
        $putovanja = Putovanja::all();
        return view('admin.putovanje.lista-putovanja',['putovanja'=>$putovanja]);
    }
}
