@extends('layouts.app')

@section('content')
    
    <h2><img src="../{{$serie->urlImage}}" alt=serie_img"> {{ $serie->nom }} {{ $serie->genre }} {{ $serie->langue }}</h2>
    @if(Auth::user())
    @foreach($serie->episodes as $ep)
        <h2><img src="../{{$ep->urlImage}}" alt="ep_img">{{$ep->nom}}</h2><button><a href="{{route('episode.seen',['id'=>$ep->id,'series'=>$serie->id])}}">Marquer comme vu</a></button>
    @endforeach
    @endif
@endsection