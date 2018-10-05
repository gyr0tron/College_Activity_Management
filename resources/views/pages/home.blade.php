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
      <span class="brand">Studentify</span>
    </div>
    <div class="text-box">
      <h1 class="heading-primary">
        <span class="heading-primary-main reveal">Studentify</span>
        <span class="heading-primary-sub reveal">Built for students, by students</span>
      </h1>
      <a href="/login" class="btn btn-white btn-animated reveal px-5">Login</a>
    </div>
  </section>
@endsection

@section('js')
  <script src="js/home.js"></script>
@endsection
