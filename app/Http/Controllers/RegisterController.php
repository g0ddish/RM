<?php
namespace ResearchMonster\Http\Controllers;

use View;
use Input;
use Sentry;
use Redirect;
use Cartalyst\Sentry\Users\UserNotFoundException;
class RegisterController extends BaseController {
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
		return view($this->layout, ['content' => View::make('register.index'), 'title'=> APPNAME]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if (Input::has('id') && Input::has('email'))
		{
            $id = Input::get('id');
            $email = Input::get('email');
            if(is_numeric($id) && strlen($id) == 9 && filter_var($email, FILTER_VALIDATE_EMAIL)) {
                try {
                    $user = Sentry::findUserByLogin($id);
                } catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {

                }
            }else{
                return view($this->layout, ['content' => View::make('register.index')->with('message', 'Missing or incorrect info'), 'title'=> APPNAME]);
            }
            return view($this->layout, ['content' => View::make('register.index')->with('message', 'ID Taken.'), 'title'=> APPNAME]);
		}

		//return view($this->layout, ['content' => View::make('register.store'), 'title'=> APPNAME]);


	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
