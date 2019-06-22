@extends('layouts.base')

@section('title', $title)

@section('content')
  <h1>Arkliai!!</h1>
  @isset($color)
    <h2>{{ $color }} spalvos arkliai</h2>
  @endisset

  @component('components.alert')
    @slot('title', 'Warning')
    @slot('message', 'Neliesk mano damos')
  @endcomponent

  @alert([
    'title' => 'Warning!',
    'message' => 'Neliesk balto arklio, neliesk'
  ])
  @endalert

@endsection

@section('footer')
  @parent
    <p>@isset($color) {{ $color }} @endisset arkliu spalvu footeris</p>
@endsection
