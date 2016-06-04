<?php
namespace App\Http\Controllers;
use Response;
/**
 *
 */
trait helpers
{
  public function functionName()
  {
    return 'hi';
  }

  public function jsonResponse($error, $data, $message, $status_code){
    return Response::json(array(
               'error' => $error,
               'data' => $data,
               'message' => $message,
               'status_code' => $status_code,
           ));
  }
  // public function error($message, $status_code){
  //   return Response::json(array(
  //              'error' => true,
  //              'message' => $message,
  //              'status_code' => $status_code,
  //          ));
  // }
}


 ?>
