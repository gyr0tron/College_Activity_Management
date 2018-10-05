<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\AddUserRequest;

use Illuminate\Support\Facades\Mail;
use App\Mail\SetPasswordMail;
use Auth;

use App\User;
use App\PasswordReset;
use App\ResponseBuilder;

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

  public function postAdd(AddUserRequest $request) {
    $role = $request->input('role', '-1');
    if(Auth::user()->role < $role) abort(401);
    $user = new User();
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->department = $request->input('department', '-1');
    $user->rollno = $request->input('rollno', '-1');
    $user->save();
    $pr = new PasswordReset();
    $pr->token = str_random(64);
    $pr->save();
    Mail::to($user)->send(new SetPasswordMail($user, $pr));
    return ResponseBuilder::send(true, '', '');
  }
}
