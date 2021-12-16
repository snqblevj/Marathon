@extends('layouts.app')

@section('content')
    
    <h2><img src="../{{$serie->urlImage}}" alt=serie_img"> {{ $serie->nom }} {{ $serie->genre }} {{ $serie->langue }}</h2>

    @foreach($serie->episodes as $ep)
        <h2><img src="../{{$ep->urlImage}}" alt="ep_img">{{$ep->nom}} {{$ep->saison}} {{$ep->numero}}</h2>
        @if(Auth::user())
            <button><a href="{{route('episode.seen',['id'=>$ep->id,'series'=>$serie->id])}}">Marquer comme vu</a></button>
        @endif
    @endforeach
    @if(Auth::user())
        <form action="{{route('comment.add',['id'=>$serie->id])}}" method="POST">
            @csrf
            <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
            <button type="submit"></button>
        </form>
    @endif

@endsection