<?php
namespace ResearchMonster\Http\Controllers;

use View;
use Sentry;
use ResearchMonster\Models\Skill;
use ResearchMonster\Models\Project;
use ResearchMonster\Models\Program;

class HomeController extends BaseController {

	/*
	|	Route::get('/', 'HomeController@showWelcome');
	*/
    /**
     * The layout that should be used for responses.
     */
    protected  $layout = 'layouts.masterUser';

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
            $this->layout = 'layouts.master';
			 return view($this->layout, ['content' => View::make('hello'), 'title'=> APPNAME]);
        }
        else
        {
            $user = Sentry::getUser();
            if(empty($user->first_name) && empty($user->last_name)){
                return view($this->layout, ['content' => View::make('main.profile.edit')->with('user', $user)->with('programs', Program::all())->with('skills', Skill::all())->with('firstLogin','Please fill out your profile and choose a new password.'), 'title'=> APPNAME]);
            }
            return view($this->layout, ['content' => View::make('main.index')->with('projects', Project::take(20)->where('status_id', 1)->get())->with('skills', Skill::take(15)->get()), 'title'=> APPNAME]);




        }

       /* Sentry::register(array(
            'student_id' => '100871258',
            'email' => 'ysprikut@georgebrown.ca',
            'password' => 'lol',
            'activated' => '1',
        ));*/
    }
}
