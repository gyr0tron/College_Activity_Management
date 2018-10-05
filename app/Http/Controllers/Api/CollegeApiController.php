<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\AddCollegeRequest;

use App\College;
use App\ResponseBuilder;

class CollegeApiController extends Controller
{
  public function postAdd(AddCollegeRequest $request) {
    $college = new College();
    $college->name = $request->input('name', '');
    $college->address = $request->input('address', '');
    $college->save();
    return ResponseBuilder::send(true, '', '');
  }
}
