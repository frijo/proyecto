<?php

class UploadFileController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function store()
	{
		if(Input::hasFile('archivo')) {
      $archivo =  Input::file('archivo');//->move('/','NuevoNombre');
   	 $filename = Input::file('archivo')->getClientOriginalName();
	  
      $archivo ->move('C:\Program Files (x86)\Ampps\www\proyecto\public\assets\song',$filename);
     // $archivo ->move('/','nombre');
	}
     	if( $archivo ) {
		   return Response::json('success', 200);
		} else {
		   return Response::json('error', 400);
		}
     	//return Redirect::to('/');
     		
	}

	


}