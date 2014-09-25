<?php

class HomeController extends BaseController {

	/*
	|	Route::get('/', 'HomeController@showWelcome');
	*/
    /**
     * The layout that should be used for responses.
     */
    protected  $layout = 'layouts.master';

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $this->layout->title = APPNAME;
        $this->layout->content = View::make('hello');
       /* Sentry::register(array(
            'student_id' => '100871258',
            'email' => 'ysprikut@georgebrown.ca',
            'password' => 'lol',
            'activated' => '1',
        ));*/
    }
}
