@extends('layouts.base')
@section('title', $title)
@section('content')

  @dice(['dice'=> $random])
  @enddice
@endsection
