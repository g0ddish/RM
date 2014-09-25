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
        if ( ! Sentry::check())
        {
            // User is not logged in, or is not activated
            $this->layout->title = APPNAME;
            $this->layout->content = View::make('hello');
        }
        else
        {
            // User is logged in
            $this->layout->title = APPNAME;
            $this->layout->content = View::make('main.index');
        }

       /* Sentry::register(array(
            'student_id' => '100871258',
            'email' => 'ysprikut@georgebrown.ca',
            'password' => 'lol',
            'activated' => '1',
        ));*/
    }
}
