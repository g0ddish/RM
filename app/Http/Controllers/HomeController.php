<?php
namespace ResearchMonster\Http\Controllers;

use View;
use Sentry;
use Skill;
use Project;
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


            // User is logged in
         //   $this->layout->title = APPNAME;
         //   $this->layout->content = View::make('main.index')->with('projects', Project::all());
            return view($this->layout, ['content' => View::make('main.index')->with('projects', Project::take(20)->get())->with('skills', Skill::take(15)->get()), 'title'=> APPNAME]);

            /*  $user = Sentry::getUser();

              $skillz = $user->skills;

              foreach($skills as $skill){
                  var_dump($skill);
                  $user->skills()->sync($skills);
              }*/
        }

       /* Sentry::register(array(
            'student_id' => '100871258',
            'email' => 'ysprikut@georgebrown.ca',
            'password' => 'lol',
            'activated' => '1',
        ));*/
    }
}
