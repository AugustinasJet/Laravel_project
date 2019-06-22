@extends('layouts.base')
@section('title', $title)
@section('content')

  @list(['reasons' => ['a','b','c','deeeee']])
  @endlist

<h1>Reasons</h1>
<ul>
  @foreach ($reasons as $letter)
    <li>This is user {{ $letter }}</li>
  @endforeach
</ul>
@endsection
