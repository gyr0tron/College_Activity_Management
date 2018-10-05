@extends('layouts.master')
@section('pre')
  @php
  $title = "Login";
  $menu_item = 'home';
@endphp
@section('css')
  <link rel="stylesheet" type="text/css" href="css/home.css">
@endsection

@section('content')
  <p>
    {{ $errors->first('email') }}
    {{ $errors->first('password') }}
  </p>
  <form class="" action="/login" method="post">
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
    <input type="text" name="email" value="">
    <input type="password" name="password" value="">
    <input type="submit" value="Login">
  </form>
  @if (Auth::check())
    <p>
      You are logged in !
    </p>
  @endif
@endsection

@section('js')
  <script src="js/home.js"></script>
@endsection
