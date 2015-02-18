<?php
namespace ResearchMonster\Http\Controllers;

use View;
use Sentry;
use ResearchMonster\Models\Skill;
use ResearchMonster\Models\Project;
class ApplicantController extends Controller {

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
        $permission = parent::requireProjectPermission();
        if($permission != false)
            return $permission;
            return view($this->layout, ['content' => View::make('main.project.applicants')->with('projects', Project::take(20)->get())->with('skills', Skill::take(15)->get()), 'title'=> APPNAME]);
    }
}
