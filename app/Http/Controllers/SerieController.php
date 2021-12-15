<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Serie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public function showGenreSerie($genre){
        $serie = Serie::all()->where('genre',$genre);

        return view('genre',[
            'serie'=>$serie
        ]);
    }


    public function accueilSerie(){
        $series = Serie::orderBy('note','DESC')->get();

        return view('welcome',[
            'serie'=>$series
            ]);
    }

    public function addSeen($episode_id,$serie_id){
        $user = Auth::user();
        $table = DB::table('seen');
        $data = array(
            array(
                'user_id'=>$user->id,
                'episode_id'=>$episode_id,
                'date_seen'=>now()
            )
        );
        $table->insert($data);
        return redirect()->route('serie.show',['id'=>$serie_id]);
    }
}
