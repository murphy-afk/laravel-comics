@extends('layouts.master')

@section('content')

@php
$comics = config('comics'); 
@endphp

<h1>Le Card:</h1>

@foreach ($comics as $comic)
<x-card>
  <x-slot:title></x-slot:title>
  <x-slot:description></x-slot:description>
  <x-slot:price></x-slot:price>
</x-card>
@endforeach

@endsection