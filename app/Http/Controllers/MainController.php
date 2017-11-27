<?php

namespace App\Http\Controllers;

use App\Putovanja;
use App\Smestaj;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $glavni = Putovanja::where('glavni_slajder',"1")->get();
        $putovanja =Putovanja::where('slajder',"1")->get();
        $smestaj = Smestaj::where('slajder',"1")->get();
        return view('welcome',['glavni'=>$glavni,'putovanja'=>$putovanja,'smestaji'=>$smestaj]);
    }
}
