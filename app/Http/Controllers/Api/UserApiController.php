<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;

use App\User;

class UserApiController extends Controller
{
  public __construct() {
    $this->middleware('auth');
  }
  public function getInfo(AddCollegeRequest $request) {
    return Auth::user();
  }

  public function getUsers(Request $request) {
    $role = $request->input('role', '-1');
    if(Auth::user()->role < $role) abort(401);
    return User::where('role', $role)->get();
  }

  public function postAdd(Request $request) {
  
  }
}
