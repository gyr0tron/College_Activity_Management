@extends('layouts.master')
@section('pre')
  @php
  $title = config('app.name');
  $menu_item = 'home';
@endphp
@section('css')
<link rel="stylesheet" type="text/css" href="css/home.css">
@endsection

@section('content')
@endsection

@section('js')
<script src="js/home.js"></script>
@endsection
