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
        $series_recentes = Serie::orderBy('premiere','DESC')->get();



        return view('welcome',[
            'serie'=>$series,
            'series_recentes'=>$series_recentes,
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

    public function store(Request $request,$serie_id){
        $user = Auth::user();
        $table = DB::table('comments');
        $data = array(
            array(
                'content'=>$request->input('comment'),
                'note'=>0,
                'validated'=>0,
                'user_id'=>$user->id,
                'serie_id'=>$serie_id,
                'created_at'=>now(),
                'updated_at'=>now()
            )
        );

        $table->insert($data);

        return redirect()->route('serie.show',['id'=>$serie_id]);

    }
}
