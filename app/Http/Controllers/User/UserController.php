<?php

namespace App\Http\Controllers\User;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserModel;

class UserController extends Controller {
  public function users() {
    return response()->json(UserModel::get(), 200);
  }

  public function addUser(Request $request) {
    $user = UserModel::create($request->all());
    return response()->json($user, 201);
  }
}
