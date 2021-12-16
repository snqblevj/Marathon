@extends('layouts.app')

@section('content')
    C'est la page générale du site,
    <br />
    on doit y voir les dernières séries par exemple.

    @for($i = 0; $i < 5; $i++)
        <h2>{{$serie[$i]->nom}}</h2>
    @endfor

    @for($i=0; $i < 5; $i++)
        <h2>{{$series_recentes[$i]->nom}}</h2>
    @endfor
@endsection
