@extends('layouts.app')

@section('content')

    @foreach($serie as $serie)
        <h2><a href="{{route('serie.show',['id'=>$serie->id])}}"><img src="../../{{$serie->urlImage}}" alt="image_serie"> {{ $serie->nom }} {{ $serie->genre }} {{ $serie->langue }}</a></h2>
    @endforeach
@endsection