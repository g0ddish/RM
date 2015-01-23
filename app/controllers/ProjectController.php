<?php

class ProjectController extends \BaseAuthController {
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
        $redir = $this->check();
        if(isset($redir)){
            return $redir;
        }
        $this->layout->title = APPNAME;
        $this->layout->content = View::make('main.project.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->title = APPNAME;
		$this->layout->content = View::make('main.project.create')->with('skills', Skill::all());
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		if (Input::has('title') && Input::has('skills') && Input::has('desc') && Input::has('start'))
		{
			$title = Input::get('title');
			$skills = Input::get('skills');
			$desc = Input::get('desc');
			$start = Input::get('start');
			$project = new Project();
			$project->title = $title;
			$project->description = $desc;
			$project->start_date = strtotime($start);
			$project->user()->associate(Sentry::getUser());
			$project->save();
			$skillarr = array();
			foreach($skills as $skill){
				$skillarr[] = Skill::where('name', '=', $skill)->firstOrFail()->id;
			}
			$project->skills()->sync($skillarr);
			//var_dump($skills);
			$this->layout->title = APPNAME;
			$this->layout->content = View::make('main.project.store');
		}
	}




	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{ //GET
        $redir = $this->check();
        if($redir){
            return $redir;
        }else {

            $this->layout->title = APPNAME;

            $this->layout->content = View::make('main.project.index');
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
