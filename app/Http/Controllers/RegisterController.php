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
			try
			{
				$user = Sentry::findUserByLogin(Input::get('id'));
			}
			catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
			{
				try
				{
					$pass = str_random(8);
					$user = Sentry::createUser(array(
						'student_id'     => Input::get('id'),
						'email' => Input::get('email'),
						'password'  => $pass,
						'activated' => true,
					));
				}
				catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
				{
					return Redirect::to('/')->with('message', 'Login field is required.');

				}
				catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
				{
					return Redirect::to('/')->with('message', 'Password field is required.');
				}
				catch (Cartalyst\Sentry\Users\UserExistsException $e)
				{
					return Redirect::to('/')->with('message', 'User with this login already exists.');
				}
				Mail::send('emails.welcome', array('id' => Input::get('id'), 'pass' => $pass), function ($message) {
					$email = Input::get('email');
					$message->from('no-reply@georgebrown.ca', 'Research Monster');
					$message->to($email);
				});
				return Redirect::to('/')->with('message', 'Registered successfully, a password has been email to you.');
			}

			return Redirect::to('/')->with('message', 'ID Taken.');
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
