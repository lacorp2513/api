<?php
  namespace App\Controllers;

  class TestController extends Controller{

    public function helloUser($request, $response){
      $name = $request->getAttribute('name');
      return json_encode(array('greeting' => 'Hello '. $name));
    }
  }
?>
