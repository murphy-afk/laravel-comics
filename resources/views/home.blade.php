@extends('layouts.master')

@section('content')

  @php
    $comics = config('comics'); 
  @endphp


  <div class="row g-4">

    @foreach ($comics as $comic)
    <x-card>
      <x-slot:thumb>{{ $comic['thumb'] }}</x-slot:thumb>
      <x-slot:title>{{$comic['title']}}</x-slot:title>
    </x-card>
    @endforeach
  </div>

@endsection