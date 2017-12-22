@extends('layout-speaker-popup')

@section('page')

    <h1>{{ $guest->name }}</h1>

    {!! $guest->bio !!}

@endsection