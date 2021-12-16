@extends('layouts.app')

@section('content')
    @if($serie->count() > 0)
        @foreach($serie as $serie)
            <h2><a href="{{route('serie.show',['id'=>$serie->id])}}"><img src="../../{{$serie->urlImage}}" alt="image_serie"> {{ $serie->nom }} {{ $serie->genre }} {{ $serie->langue }}</a></h2>
        @endforeach
    @else
        <h2>Aucune série de ce genre</h2>
    @endif
@endsection