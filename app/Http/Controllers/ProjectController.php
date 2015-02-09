<?php
namespace ResearchMonster\Http\Controllers;

use View;
use Sentry;
use Project;
use Interest;
use Redirect;
use Skill;
use Input;
class ProjectController extends Controller {
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
		return view($this->layout, ['content' =>  View::make('main.project.index')->with('projects', Project::all()), 'title'=> APPNAME]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$user = Sentry::getUser();
		if($user->hasProjectCRUDPermission()) {
			return view($this->layout, ['content' =>  View::make('main.project.create')->with('skills', Skill::all()), 'title'=> APPNAME]);
		}else{
			return Redirect::to('/');
		}
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$user = Sentry::getUser();
		if($user->hasProjectCRUDPermission()) {
		if (Input::has('title') && Input::has('desc')) {
			$title = Input::get('title');
			$skills = Input::get('skills');
			$desc = Input::get('desc');
			$start = Input::get('start');
			$status = Input::get('status');
			$project = new Project();
			$project->title = $title;
			$project->description = $desc;
			$project->start_date = strtotime($start);
			$project->status_id = $status;
			$project->user()->associate(Sentry::getUser());
			$project->save();
			if (isset($skills)){
				$skillarr = array();
			foreach ($skills as $skillName) {
				$foundskill = Skill::where('name', '=', $skillName)->first();
				if (isset($foundskill)) {
					$skillarr[] = $foundskill->id;
				} else {
					$newSkill = new Skill();
					$newSkill->name = $skillName;
					$newSkill->save();
					$skillarr[] = $newSkill->id;
				}

			}
			$project->skills()->sync($skillarr);
		}
			//var_dump($skills);
		//	$this->layout->title = APPNAME;
		//	$this->layout->content = View::make('main.project.store'); str_limit($project->description, 235)
			return redirect('/')->with('message', 'Added project ' . str_limit($project->title, 75));

		}
		}else{
			return Redirect::to('/');
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
			if (is_numeric($id))
			{
				//$this->layout->title = APPNAME;
			//	$this->layout->content = View::make('main.project.single')->with('project', Project::find($id))->with('skills', Skill::all());
				return view($this->layout, ['content' =>  View::make('main.project.single')->with('project', Project::find($id))->with('skills', Skill::all()), 'title'=> APPNAME]);

			}
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
		$user = Sentry::getUser();
		if ($user->hasProjectCRUDPermission() ) {
			if (Input::has('title') && Input::has('desc') && Input::has('start')) {
				$project = Project::find($id);
				$title = Input::get('title');
				$skills = Input::get('skills');
				$desc = Input::get('desc');
				$start = Input::get('start');
				$status = Input::get('status');
			//	$project = new Project();
				$project->title = $title;
				$project->description = $desc;
				$project->start_date = strtotime($start);
				$project->status_id = $status;
				//$project->user()->associate(Sentry::getUser());
				$project->save();
				$skillarr = array();
				if(empty($skills)){
					$project->skills()->detach();
				}else {
					foreach($skills as $skillName){
						$foundskill = Skill::where('name', '=', $skillName)->first();
						if(isset($foundskill)){
							$skillarr[] = $foundskill->id;
						}else{
							$newSkill = new Skill();
							$newSkill->name = $skillName;
							$newSkill->save();
							$skillarr[] = $newSkill->id;
						}

					}
					$project->skills()->sync($skillarr);
				}
				return redirect('/')->with('message', 'Updated project ' . str_limit($project->title, 75));
			//	return view($this->layout, ['content' =>  View::make('main.project.single')->with('message', "Updated project $id"), 'title'=> APPNAME]);
			}

		}elseif(Input::has('interested')){
			$pid  = Input::get('interested');
			$project = Project::find($pid);
			$user->interestedProjects()->attach($project);
			return redirect('/')->with('message', 'Registered interest in project ' . str_limit($project->title, 75) . var_dump($interest));
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = Sentry::getUser();
		if ($user->hasProjectCRUDPermission() ) {
			$project = Project::find($id);
			$project->delete();
			//$this->layout->title = APPNAME;
			return redirect('/')->with('message', 'Deleted project '  . str_limit($project->title, 75));
		//	$this->layout->content = View::make('main.project.delete')->with('message', "Deleted project $id");
		}
	}


}
