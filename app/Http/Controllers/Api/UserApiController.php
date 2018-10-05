<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;

class UserApiController extends Controller
{
  public __construct() {
    $this->middleware('auth');
  }
  public function getInfo(AddCollegeRequest $request) {
    return Auth::user();
  }
}
