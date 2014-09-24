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
    }
}
