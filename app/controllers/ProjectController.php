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
        $this->layout->title = APPNAME;
        $this->layout->content = View::make('login.store');
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
