@extends('layouts.master')

@section('content')

  @php
    $comics = config('comics'); 
  @endphp
  <div class="hero-section">

  </div>
  <div class="container">
    <div class="row g-4 mt-4 ">

      @foreach ($comics as $comic)
        <x-card>
          <x-slot:thumb>{{ $comic['thumb'] }}</x-slot:thumb>
          <x-slot:title>{{$comic['series']}}</x-slot:title>
        </x-card>
      @endforeach
    </div>
  </div>

@endsection