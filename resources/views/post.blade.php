@extends('pastel-layout')

@section('content')
  <p>{{ $post }}</p>
  {{-- <p>length: {{ $length }} character(s)</p> --}}
  <p>{{ trans_choice('example.characters', $length)}}</p>
@endsection

@section('title')
Első blogbejegyzés
@endsection
