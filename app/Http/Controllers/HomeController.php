<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function getHome() {
    return view('pages.home');
  }

  public function getLogin() {
    return view('pages.login');
  }
}
