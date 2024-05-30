@extends('layout')
@section('content')
  <div class="container mt-5">
    <h1>{{ $service->title }}</h1>
    <div class="editor-content">{!! $service->content !!}</div>

  </div>
@endsection
