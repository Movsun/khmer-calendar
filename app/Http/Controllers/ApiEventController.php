<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Helpers;
use Validator;
use Auth;
use App\UserEvent;

class ApiEventController extends Controller
{

    use Helpers;

    public function index(Request $request){

      $credentials = $request->only(['email', 'password']);

      if (!Auth::once($credentials)) {
          return $this->jsonResponse(true, null, 'Unauthorized', 401);
      }

      $user = Auth::user();
      return $this->jsonResponse(false, $user->userEvents()->get(), 'Success', 200);

    }

    public function store(Request $request){

      $credentials = $request->only(['email', 'password']);

      if (!Auth::once($credentials)) {
          return $this->jsonResponse(true, null, 'Unauthorized', 401);
      }

      $data = $request->only(['name', 'description', 'time', 'date']);

      $validator = Validator::make($data, [
          'name' => 'required|string',
          'description' => 'string',
          'time' => 'required|date_format:H:i:s',
          'date' => 'required|date',
      ]);

      if ($validator->fails()) {
        return $this->jsonResponse(true, null, $validator->errors()->all(), 400);
      }
      $event = new UserEvent($data);
      $event = Auth::user()->userEvents()->save($event);

      if (!$event->id) {
        return $this->jsonResponse(true, null, 'Unable to create event', 500);
      }

      return $this->jsonResponse(false, $event, 'Success', 200);

    }

    public function update(Request $request){
      $credentials = $request->only('email', 'password');
      if (!Auth::once($credentials)) {
          return $this->jsonResponse(true, null, 'Unauthorized', 401);
      }

      $data = $request->only(['id', 'name', 'description', 'time', 'date']);
      $validator = Validator::make($data, [
          'id' => 'required|integer',
          'name' => 'required|string',
          'description' => 'string',
          'time' => 'required|date_format:H:i:s',
          'date' => 'required|date',
      ]);
      if ($validator->fails()) {
        return $this->jsonResponse(true, null, $validator->errors()->all(), 400);
      }

      $event = UserEvent::where('id', $request->id)->where('users_id', Auth::user()->id)->first();
      if (!$event) {
        return $this->jsonResponse(true, null, 'Not Found', 400);
      }

      if (!$event->update($data)) {
        return $this->jsonResponse(true, null, 'Unable to update', 500);
      }

      return $this->jsonResponse(false, $event, 'Success', 200);
    }

    public function destroy(Request $request){
      $credentials = $request->only('email', 'password');
      if (!Auth::once($credentials)) {
          return $this->jsonResponse(true, null, 'Unauthorized', 401);
      }

      $data = $request->only(['id']);
      $validator = Validator::make($data, [
          'id' => 'required|integer',
      ]);
      if ($validator->fails()) {
        return $this->jsonResponse(true, null, $validator->errors()->all(), 400);
      }

      $event = UserEvent::where('id', $request->id)->where('users_id', Auth::user()->id)->first();
      if (!$event) {
        return $this->jsonResponse(true, null, 'Not Found', 400);
      }

      if (!$event->delete($data)) {
        return $this->jsonResponse(true, null, 'Unable to update', 500);
      }

      return $this->jsonResponse(false, null, 'Deleted', 200);
    }
}
