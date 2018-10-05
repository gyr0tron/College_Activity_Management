<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\AddDepartmentRequest;

use App\User;
use App\Department;
use App\ResponseBuilder;

class DepartmentApiController extends Controller
{
  public function postAdd(AddDepartmentRequest $request) {
    $department = new Department();
    $department->name = $request->input('name', '');
    $department->college = $request->input('college', '');
    $department->created_by = Auth::user()->id;
    $department->save();
    return ResponseBuilder::send(true, '', '');
  }
}
