@extends('layouts.master')
@section('pre')
  @php
  $title = config('app.name');
@endphp
@section('css')
<link rel="stylesheet" type="text/css" href="css/app.css">
@endsection

@section('content')
  <router-view></router-view>
@endsection

@section('js')
<script src="js/app.js"></script>
@endsection
