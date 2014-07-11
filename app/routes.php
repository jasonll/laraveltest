<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('foo/bar', function()
{
    return 'Hello World 1';
});

/*Route::match(array('GET', 'POST'), '/', function()
{
    //return HomeController::showWelcome();
    return 'Hello World 2';
});*/

/*Route::any('foo', function()
{
    return 'Hello World 3';
});*/

Route::get('userid/{id}', function($id)
{
    return 'User '.$id;
})->where('id', '[0-9]+');

Route::get('username/{name?}', function($name = 'John')
{
    return $name;
})->where('name', '[A-Za-z]+');

Route::get('user/{id}/{name}', function($id, $name)
{
    return 'userid:'.$id.' username:'.$name;
})
->where(array('id' => '[0-9]+', 'name' => '[a-z]+'));

Route::pattern('id', '[0-9]+');

Route::get('userp/{id}', function($id)
{
    return 'userp'.$id;
});

// 跳转逻辑
/*Route::filter('old', function()
{
    if (Input::get('age') < 200)
    {
        return Redirect::to('foo/bar');
    }
});*/

Route::get('userb', array('before' => 'old', function()
{
    return 'You are over 200 years old!';
}));

Route::get('userc', array('before' => 'old', 'uses' => 'HomeController@showProfile'));

//写日志
Route::filter('log', function($route, $request, $response)
{
    
});

Route::get('userp/profile', array('as' => 'profile', function()
{
    return 'userp';
}));


Route::get('home', array('uses' => 'HomeController@showProfile', 'as'=>'name') );
