<?php
namespace ResearchMonster\Http\Controllers;

use View;
use Input;
use Redirect;
use Sentry;
class LoginController extends BaseController {
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
        if (Sentry::check())
        {
            return Redirect::to('./');
        }
        return view($this->layout, ['content' => View::make('login.index'), 'title'=> APPNAME]);

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

        try
        {
            if (Input::has('id') && Input::has('password'))
            {
                $id = Input::get('id');
                $pass = Input::get('password');
            }
            $credentials = array(
                'student_id' => $id,
                'password' => $pass,
            );
            $user = Sentry::authenticate($credentials, false);
            return Redirect::to('./');


        }
        catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
        {
            return view($this->layout, ['content' => View::make('login.error'), 'title'=> APPNAME, 'error' => 'Missing data...']);
        }
        catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
        {
            return view($this->layout, ['content' => View::make('login.error'), 'title'=> APPNAME, 'error' => 'Missing data...']);
        }
        catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
        {
            return view($this->layout, ['content' => View::make('login.error'), 'title'=> APPNAME, 'error' => 'Missing data...']);
        }
        catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
        {
            return view($this->layout, ['content' => View::make('login.error'), 'title'=> APPNAME, 'error' => 'Missing data...']);
        }
        catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
        {
            return view($this->layout, ['content' => View::make('login.error'), 'title'=> APPNAME, 'error' => 'Missing data...']);
        }

// The following is only required if the throttling is enabled
        catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
        {
            $this->layout->content = View::make('login.error')->with('error', "User is suspended for too many login attempts. Redirecting in 5 seconds.");
        }
        catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
        {
            echo 'User is banned.  Redirecting in 5 seconds.';
        }

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
