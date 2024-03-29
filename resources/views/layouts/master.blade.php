<!DOCTYPE html>
@yield('pre')
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ $title }}</title>
  @yield('css')
</head>
<body data-spy="scroll" data-target="#myNav" data-offset="50">
  <div id="app">
    @yield('content')
  </div>
  @yield('js')
</body>
</html>
