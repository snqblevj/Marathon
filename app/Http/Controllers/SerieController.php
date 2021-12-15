<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Serie;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    public function showSerie(){
        $series = Serie::all();

        return view('series',[
            'series'=>$series,
        ]);
    }

    public function showIdSerie($id){
        $serie = Serie::findOrFail($id);

        return view('serie',[
            'serie'=>$serie
        ]);
    }

    public function accueilSerie(){
        $series = Serie::orderBy('note','DESC')->get();

        return view('welcome',[
            'serie'=>$series
            ]);
    }

}
