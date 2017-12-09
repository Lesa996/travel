<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSmestajRequest;
use App\Image;
use App\OpisSmestaj;
use App\Smestaj;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

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
            $fileName = "SmestajImage_" .rand(11111, 99999) . '.' . $extension;
            if ($key == 0){
                $fileName = "SmestajImage_" . 'Cover.' . $extension;

            }
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
    public function setSlajder(Request $request){
        $all = Smestaj::where('slajder',"1")->get();

        foreach ($all as $one){
            $one->slajder = "0";
            $one->save();
        }


        $slajder_ids = $request->slajder;
        if(is_array($slajder_ids)){
            foreach ($slajder_ids as $slajd){
                $smestaj = Smestaj::find($slajd);
                $smestaj->slajder = '1';
                $smestaj->save();

            }
        }

        return redirect('app/smestaj');
    }
    public function singleSmestaj($drzava, $grad,$smestajIme)
    {
        $smestaj = Smestaj::where([['drzava',$drzava],['grad',$grad],['naziv',$smestajIme]])->first();
        return view('smestaj',['smestaj'=>$smestaj]);
    }
    public function  editGalerija($id){
        $smestaj = Smestaj::find($id);

        return view('admin.smestaj.galerija',['smestaj'=>$smestaj]);


    }
    public function setRedosled(Request $request){

        $hidden = $_POST['multiple_value']; //get the values from the hidden field
        $hidden_in_array = explode(",", $hidden); //convert the values into array
        $filter_array = array_filter($hidden_in_array); //remove empty index
        $reset_keys = array_values($filter_array); //reset the array key

        $redosled = Smestaj::where('redosled','!=',0)->get();
        foreach ($redosled as $item){
            $item->redosled = 0;
            $item->save();
        }
        $noviRedosled = $reset_keys;
        if(is_array($noviRedosled)){
            foreach ($noviRedosled as $key=>$slajd){
                $smestaj = Smestaj::find($slajd);
                $smestaj->redosled = sizeof($noviRedosled)- $key +1;
                $smestaj->save();

            }
        }
        return redirect('app/smestaj');

    }
    public function search(Request $request)
    {

        $smestaji = Smestaj::searchDrzaca($request->drzava)->searchGrad($request->grad)->searchObjekat($request->objekat)
                    ->searchSobe($request->sobe)->searchDodatno($request->dodatno)->orderBy('redosled','desc')->get();
        return view('searchSmestaj',['smestaji'=>$smestaji]);
    }
}
