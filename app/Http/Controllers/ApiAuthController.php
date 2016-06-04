<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use App\User;
use Auth;
use Response;
use App\Http\Controllers\Helpers;

class ApiAuthController extends Controller
{
    use Helpers;

    public function signup(Request $request){
        $credentials = $request->only(['email', 'password']);

        $validator = Validator::make($credentials, [
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
          return $this->jsonResponse(true, null, $validator->errors()->all(), 400);
        }

        $user = User::create($request->all());
        if (!$user->id) {
          return $this->jsonResponse(true, null, 'Unable to create user', 500);
        }

        return $this->jsonResponse(false, null, 'User created', 201);
    }

    public function login(Request $request){
        $credentials = $request->only(['email', 'password']);

        $validator = Validator::make($credentials, [
            'email' => 'required|exists:users',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
          return $this->jsonResponse(true, null, $validator->errors()->all(), 400);
        }

        if (!Auth::once($credentials)) {
          return $this->jsonResponse(true, null, 'These credentials do not match our records', 400);
        }

        return $this->jsonResponse(false, null, 'Success', 200);
    }
}
