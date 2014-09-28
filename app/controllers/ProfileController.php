<?php

class ProfileController extends \BaseAuthController {
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
        $this->layout->title = APPNAME;
        $this->layout->content = View::make('main.profile.index');
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
        $this->layout->title = APPNAME;

        if($id == "edit"){
            $user = Sentry::getUser();
            $programs = Program::all();
            $this->layout->content = View::make('main.profile.edit')->with('user', $user)->with('programs', $programs);

        }else {
            try {
                //  $currentuser = Sentry::getUser();
                $user = Sentry::findUserByLogin($id);
            } catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
                echo 'User was not found.';
            }
            $this->layout->content = View::make('main.profile.index')->with('user', $user);
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

    public function storeUser(){
        $user = Sentry::getUser();
        if(Input::has('del-prog')){
            $del = Input::get('del-prog');
            $ar = array();
            foreach($del as $key=>$val){
                $ar[] = $key;
            }
            foreach($ar as $delid){
                $progs = Program::where('ProgramName', '=', $delid)->get();
                foreach($progs as $prog){
                    $user->programs()->detach($prog->id);
                }
            }


        }elseif(Input::has('program') && !Input::has('del-prog')){
            $id = Input::get('program');
            $progs = Program::where('ProgramName', '=', $id)->take(1)->get();
            foreach($progs as $prog){
                $user->programs()->attach($prog->id);
            }

        }

       //$user = Sentry::getUser();
       //$prgs= $user->programs()->get(); var_dump($prgs); $user->programs()->attach(714);
        $this->layout->title = APPNAME;
        $programs = Program::all();


        $this->layout->content = View::make('main.profile.edit')->with('user', $user)->with('programs', $programs);

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
