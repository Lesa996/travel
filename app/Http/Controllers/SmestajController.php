<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSmestajRequest;
use App\Image;
use App\OpisSmestaj;
use App\Smestaj;
use Illuminate\Http\Request;

class SmestajController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
    public function store(StoreSmestajRequest $request)
    {
        $smestaj = new Smestaj($request->all());
        $smestaj->save();
        $opis = new OpisSmestaj($request->all());
        $opis->smestaj_id = $smestaj->id;
        $opis->save();
        $images = collect($request->gallery);

        $images = $images->map(function($image, $key) use ($smestaj) {
            $destinationPath =  'items/smestaj/' . $smestaj->naziv ;
            $extension = $image->getClientOriginalExtension();
            $fileName = "SmestajImage_" . $smestaj->naziv . rand(11111, 99999) . '.' . $extension;
            $image->move($destinationPath, $fileName);
            $url = $destinationPath . "/" . $fileName;
            $image = new Image(['url' => $url]);
            return $image;
        });
        $image = $images[0];
        $image->avatar = 1;

        $smestaj->gallery()->saveMany($images);
        $smestaj->cover()->save($image);

        return redirect('app');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Smestaj  $smestaj
     * @return \Illuminate\Http\Response
     */
    public function show(Smestaj $smestaj)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Smestaj  $smestaj
     * @return \Illuminate\Http\Response
     */
    public function edit(Smestaj $smestaj)
    {
        return view('admin.smestaj.edit-smestaj',['smestaj'=>$smestaj]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Smestaj  $smestaj
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Smestaj $smestaj)
    {
        $smestaj->fill($request->all());
        $smestaj->save();

        $smestaj->opis->fill($request->all());
        $smestaj->opis->smestaj_id = $smestaj->id;
        $smestaj->opis->save();
//        $images = collect($request->gallery);
//
//        $images = $images->map(function($image, $key) use ($smestaj) {
//            $destinationPath =  'items/smestaj/' . $smestaj->naziv ;
//            $extension = $image->getClientOriginalExtension();
//            $fileName = "SmestajImage_" . $smestaj->naziv . rand(11111, 99999) . '.' . $extension;
//            $image->move($destinationPath, $fileName);
//            $url = $destinationPath . "/" . $fileName;
//            $image = new Image(['url' => $url]);
//            return $image;
//        });
//        $image = $images[0];
//        $image->avatar = 1;
//
//        $smestaj->gallery()->saveMany($images);
//        $smestaj->cover()->save($image);

        return redirect('app');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Smestaj  $smestaj
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {

       $smestaj= Smestaj::find($id);
       $smestaj->delete();
        return redirect('app');

    }

    public function showAll()
    {
        $smestaji = Smestaj::all();
        return view('admin.smestaj.lista-smestaja',['smestaji'=>$smestaji]);

    }
}
