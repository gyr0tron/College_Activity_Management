@extends('layouts.master')
@section('pre')
  @php
  $title = "Welcome to " . config('app.name');
@endphp
@section('css')
  <link rel="stylesheet" type="text/css" href="css/home.css">
@endsection
@section('content')
  <section class="header">
    <div class="brand-box">
      <span class="brand">Example Brand</span>
    </div>
    <div class="text-box">
      <h1 class="heading-primary">
        <span class="heading-primary-main reveal">Heading Primary </span>
        <span class="heading-primary-sub reveal">The secondary heading</span>
      </h1>
      <a href="#" class="btn btn-white btn-animated reveal">GET STARTED</a>
    </div>
  </section>
@endsection

@section('js')
  <script src="js/home.js"></script>
@endsection
