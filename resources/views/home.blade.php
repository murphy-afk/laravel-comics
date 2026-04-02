@extends('layouts.master')

@section('content')

  @php
    $comics = config('comics'); 
  @endphp
  <div class="hero-section"></div>
  <h2 class="badge">CURRENT SERIES</h2>
  <div class="container">
    <div class="row g-4 mt-4 ">

      @foreach ($comics as $comic)
        <x-card>
          <x-slot:thumb>{{ $comic['thumb'] }}</x-slot:thumb>
          <x-slot:title>{{$comic['series']}}</x-slot:title>
        </x-card>
      @endforeach
    </div>
    <button class="btn text-light d-block mx-auto mt-4 btn-load">LOAD MORE</button>
  </div>
  <div class="links-section mt-5 py-2 d-flex justify-content-between px-4">
    <div class="d-flex align-items-center">
      <img src={{ Vite::asset('resources/img/buy-comics-digital-comics.png') }} alt="logo">
      <p class="text-light ms-2">DIGITAL COMICS</p>
    </div>
    <div class="d-flex align-items-center">
      <img src={{ Vite::asset('resources/img/buy-comics-merchandise.png') }} alt="logo">
      <p class="text-light ms-2">MERCHANDISE</p>
    </div>
    <div class="d-flex align-items-center">
      <img src={{ Vite::asset('resources/img/buy-comics-shop-locator.png') }} alt="logo">
      <p class="text-light ms-2">SHOP</p>
    </div>
    <div class="d-flex align-items-center">
      <img src={{ Vite::asset('resources/img/buy-comics-subscriptions.png') }} alt="logo">
      <p class="text-light ms-2">SUBSCRIPTIONS</p>
    </div>
  </div>

@endsection