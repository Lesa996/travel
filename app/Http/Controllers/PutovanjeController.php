<?php

namespace App\Http\Controllers;

use App\Category;
use App\Cenovnik;
use App\Image;
use App\OpisCenovnik;
use App\OpisPutovanje;
use App\PlanPuta;
use App\Putovanja;
use App\Smestaj;
use Carbon\Carbon;
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
    public function indexKreiraj($put){
        $putovanje = Putovanja::find($put);
        return view('admin.putovanje.add-dva-putovanje',['putovanje'=>$putovanje]);

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



        $putovanje = new Putovanja($request->all());
        $putovanje->cena_do_vreme = \DateTime::createFromFormat('d/m/Y - H:i',$request->cena_do_vreme);
        $putovanje->save();
        $opisPutovanja = new OpisPutovanje($request->all());
        $opisPutovanja->putovanje_id = $putovanje->id;
        $opisPutovanja->save();
        foreach ($request->cenovnik as $smestaj_id ){
            $smestaj = Smestaj::find($smestaj_id);
            $tipovi = explode(',',$smestaj->tip_soba);
            foreach ($tipovi as $tip){
                $cenovnik = new Cenovnik();
                $cenovnik->smestaj_id = $smestaj_id;
                $cenovnik->putovanje_id = $putovanje->id;
                $cenovnik->tip = $tip;
                $cenovnik->datum_od = Carbon::now();
                $cenovnik->datum_do = Carbon::now();
                $cenovnik->cena = 0;
                $cenovnik->save();
            }

        }
        $opisCenovnik = new OpisCenovnik($request->all());
        $opisCenovnik->putovanje_id= $putovanje->id;
        $opisCenovnik->save();
        for ($i = 1 ; $i <= $putovanje->broj_dana;$i++){
            $plan = new PlanPuta();
            $plan->putovanje_id = $putovanje->id;
            $plan->dan = $i;
            $plan->opis = '/';
            $plan->save();
        }

        $images = collect($request->gallery);

        $images = $images->map(function($image, $key) use ($putovanje) {
            $destinationPath =  'items/putovanje/' . $putovanje->naziv ;
            $extension = $image->getClientOriginalExtension();
            $fileName = "PutovanjeImage_" .  rand(11111, 99999) . '.' . $extension;
            if ($key == 0){
                $fileName = "PutovanjeImage_" .  'Cover.' . $extension;

            }
            $image->move($destinationPath, $fileName);
            $url = $destinationPath . "/" . $fileName;
            $image = new Image(['url' => $url]);
            return $image;
        });
        $image = $images[0];
        $image->avatar = 1;

        $putovanje->gallery()->saveMany($images);
        $putovanje->cover()->save($image);
        return redirect('app/kreiraj/putovanje/'.$putovanje->id);
    }
    public function storeDva(Request $request)
    {


        $putovanje = Putovanja::find($request->putovanje);

        foreach ($putovanje->cenovnik as $i => $cenovnik){
            if ($request->input('cenovnikCena'.$cenovnik->smestaj->naziv)){
                $cena = $request->input('cenovnikCena'.$cenovnik->smestaj->naziv);
                $od  = $request->input('datum_od');
                $do = $request->input('datum_do');

                    $cenovnik->cena = $cena[$i];
                    $cenovnik->datum_od = \DateTime::createFromFormat('d/m/Y',$od);
                    $cenovnik->datum_do = \DateTime::createFromFormat('d/m/Y',$do);
                    $cenovnik->save();


            }

        }
        foreach ($putovanje->plan as $key => $plan){
            $plan->opis = $request->input('dan')[$key];
            $plan->save();
        }
        return redirect('app');
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
    public function edit(Putovanja $putovanje)
    {
        return view('admin.putovanje.edit-putovanje',['putovanje'=>$putovanje]);

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
        $putovanje->fill($request->all());
        $putovanje->save();
        $putovanje->opis->fill($request->all());
        $putovanje->opis->save();
        $putovanje->opisCenovnik->fill($request->all());
        $putovanje->opisCenovnik->save();

        if ($request->gallery){
            $images = collect($request->gallery);

            $images = $images->map(function($image, $key) use ($putovanje) {
                $destinationPath =  'items/putovanje/' . $putovanje->naziv ;
                $extension = $image->getClientOriginalExtension();
                $fileName = "PutovanjeImage_" .  rand(11111, 99999) . '.' . $extension;
                if ($key == 0){
                    $fileName = "PutovanjeImage_" .  'Cover.' . $extension;

                }
                $image->move($destinationPath, $fileName);
                $url = $destinationPath . "/" . $fileName;
                $image = new Image(['url' => $url]);
                return $image;
            });
            $image = $images[0];
            $image->avatar = 1;

            $putovanje->gallery()->saveMany($images);
            $putovanje->cover->avatar = 0;
            $putovanje->cover->save();
            $putovanje->cover()->save($image);
        }

        return redirect('app/putovanje');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Putovanje  $putovanje
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $smestaj= Putovanja::find($id);
        $smestaj->delete();
        return redirect('app/putovanje');
    }
    public function showAll()
    {
        $putovanja = Putovanja::all();
        return view('admin.putovanje.lista-putovanja',['putovanja'=>$putovanja]);
    }

    public function singlePutovanje($put){
        $putovanje = Putovanja::where('naziv',$put)->first();

        return view('putovanje',['putovanje'=>$putovanje]);
    }
    public function setSlajderGlavni(Request $request){
        $all = Putovanja::where('glavni_slajder',"1")->get();

        foreach ($all as $one){
            $one->glavni_slajder = "0";
            $one->save();
        }


        $slajder_ids = $request->slajder;
        if(is_array($slajder_ids)){
            foreach ($slajder_ids as $slajd){
                $smestaj = Putovanja::find($slajd);
                $smestaj->glavni_slajder = '1';
                $smestaj->save();

            }
        }

        return redirect('app/putovanje');
    }

    public function setSlajderSporedni(Request $request){
        $all = Putovanja::where('slajder',"1")->get();

        foreach ($all as $one){
            $one->slajder = "0";
            $one->save();
        }


        $slajder_ids = $request->slajder;
        if(is_array($slajder_ids)){
            foreach ($slajder_ids as $slajd){
                $smestaj = Putovanja::find($slajd);
                $smestaj->slajder = '1';
                $smestaj->save();

            }
        }

        return redirect('app/putovanje');
    }
    public function setRedosled(Request $request){

        $hidden = $_POST['multiple_value']; //get the values from the hidden field
        $hidden_in_array = explode(",", $hidden); //convert the values into array
        $filter_array = array_filter($hidden_in_array); //remove empty index
        $reset_keys = array_values($filter_array); //reset the array key

        $redosled = Putovanja::where('redosled','!=',0)->get();
        foreach ($redosled as $item){
            $item->redosled = 0;
            $item->save();
        }
        $noviRedosled = $reset_keys;
        if(is_array($noviRedosled)){
            foreach ($noviRedosled as $key=>$slajd){
                $smestaj = Putovanja::find($slajd);
                $smestaj->redosled = sizeof($noviRedosled)- $key +1;
                $smestaj->save();

            }
        }
        return redirect('app/putovanje');

    }
    public function listCategory(){
        $category = Category::all();
        return view('admin.putovanje.lista-category',['category'=>$category]);
    }
    public function setCategory(Request $request){
        $category = new Category($request->all());
        $category->save();
        return redirect('app/category');
    }
    public function setActiveCategory(Request $request){
        $category = Category::where('active',true)->get();
        foreach ($category as $item){
            $item->active = false;
            $item->save();
        }
        $noviRedosled = $request->category;
        if(is_array($noviRedosled)){
            foreach ($noviRedosled as $key=>$slajd){
                $smestaj = Category::find($slajd);
                $smestaj->active = true;
                $smestaj->save();

            }
        }
        return redirect('app/category');

    }
    public function search(Request $request){

    }
    public function getCenovnik($id){

        $cenovnik = Cenovnik::where('putovanje_id',$id)->with('smestaj')->get();
        return json_encode($cenovnik);
    }
}
