<?php
namespace ResearchMonster\Http\Controllers;

use View;
use Sentry;
use Input;
use DB;
use Mail;
use ResearchMonster\Models\User;
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

    /**
     * Update a projects applicants.
     *
     * @return Response
     */
    public function update()
    {
        $permission = parent::requireProjectPermission();
        if($permission != false)
            return $permission;

        if(Input::has('project-id') && Input::has('iuser-id') && Input::has('deny')){
          //  die("deny");
            $project = Project::find(Input::get('project-id'));
            $user = User::find(Input::get('iuser-id'));

            $interestedusers = $project->interestedUsers()->get();
            foreach($interestedusers as $interested){
                if($interested->id == $user->id){
                    $applicantrow = DB::table('project_user')->where('user_id', $user->id)->where('project_id', $project->id)->update(['status' => 2]);
                    //Send an email here to the person telling them they are denied!!!

                    Mail::send('emails.deny', array('user' => $user, 'project' => $project), function ($message) use ($user) {
                        $email = $user->email;
                        $message->from('no-reply@georgebrown.ca', 'Research Monster');

                        $message->to($email)->subject('Sorry, a project has expired!');
                    });

                }
            }
        }

        if(Input::has('project-id') && Input::has('iuser-id') && Input::has('accept')){
            //die("accept");
            $project = Project::find(Input::get('project-id'));
            $user = User::find(Input::get('iuser-id'));
            $interestedusers = $project->interestedUsers()->get();
            foreach($interestedusers as $interested){
                if($interested->id == $user->id){
                    $applicantrow = DB::table('project_user')->where('user_id', $user->id)->where('project_id', $project->id)->update(['status' => 1]);
                    //Send an email here to the person telling them they are accepted!!!

                     Mail::send('emails.accept', array('user' => $user, 'project' => $project), function ($message) use ($user) {
                        $email = $user->email;
                        $message->from('no-reply@georgebrown.ca', 'Research Monster');
                        $message->to($email)->subject('You\'ve been accepted!');
                    });

                }
            }

        }
        return view($this->layout, ['content' => View::make('main.project.applicants')->with('projects', Project::take(20)->get())->with('skills', Skill::take(15)->get()), 'title'=> APPNAME]);

    }
}
