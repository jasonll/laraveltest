<?php

class HomeController extends BaseController {

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

	public function showWelcome()
	{
        $name = Input::get('name');
		return View::make('hello');
	}

    public function showProfile()
    {
        
        //Cache::put('testt', 'sssss', 3);
        
        //var_dump(Cache::get('testt'));
        
        var_dump(Input::has('age'));
        var_dump(Cookie::get('age'));
        var_dump(Input::get('age1', '110'));
        var_dump(Input::all());
        
    }
}
