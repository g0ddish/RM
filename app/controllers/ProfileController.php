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
        $redir = $this->check();
        if(isset($redir)){
            return $redir;
        }
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
        $redir = $this->check();
        if($redir){
            return $redir;
        }else {

            $this->layout->title = APPNAME;

            if ($id == "edit") {
                $user = Sentry::getUser();
                $programs = Program::all();
                $this->layout->content = View::make('main.profile.edit')->with('user', $user)->with('programs', $programs);

            } else {
                try {
                    //  $currentuser = Sentry::getUser();
                    $user = Sentry::findUserByLogin($id);
                    $userprograms = $user->programs();
                } catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
                    echo 'User was not found.';
                }
                $this->layout->content = View::make('main.profile.index')->with('user', $user);
            }
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
        $redir = $this->check();
        if(isset($redir)){
            return $redir;
        }
        $user = Sentry::getUser();
        if(Input::has('editor1')){
            $summary = Input::get('editor1');
            $user->summary = $summary;
        }
        if(Input::has('editor2')){
            $experience = Input::get('editor2');
            $user->experience = $experience;
        }


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

        if(Input::has('email') && Input::has('fname') && Input::has('lname')){
            $email = Input::get('email');
            $fname = Input::get('fname');
            $lname = Input::get('lname');
            $user->email = $email;
            $user->first_name = $fname;
            $user->last_name = $lname;

        }

        if (Input::hasFile('photo') && Input::file('photo')->isValid())
        {
            $formatTable = array(
                'image/jpeg',
                'image/png',
                'image/gif',
                'image/tga',
                'image/tif',
                'image/bmp',
            );
            $file = Input::file('photo');
            $mime = $file->getMimeType();

            foreach($formatTable as $mimecheck){
                if($mime == $mimecheck){
                    $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();
                    $destinationPath = "public/uploads";

                    $succes = $file->move($destinationPath, $filename);
                    $bodytag = str_replace("public/", "", $succes->getPathname());
                    $user->avatar = $bodytag;

                }
            }
        }
        $user->save();


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
