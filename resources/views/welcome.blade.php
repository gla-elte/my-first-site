@extends('pastel-layout')

@section('content')
  {{ __('example.greeting', ['name' => $name])  }}
@endsection

@section('title')
Kezdőoldal
@endsection
