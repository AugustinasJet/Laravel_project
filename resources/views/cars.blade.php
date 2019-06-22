@extends('layouts.base')
@section('title', $title)
@section('content')
  @cars(['cars'=> $cars])
  @endcars
@endsection
