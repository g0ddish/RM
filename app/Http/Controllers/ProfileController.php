<?php
namespace ResearchMonster\Http\Controllers;

use ResearchMonster\Models\Skill;
use ResearchMonster\Models\Program;
use Sentry;
use View;
use Config;
use Input;
class ProfileController extends Controller {
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
        return view($this->layout, ['content' => View::make('main.profile.index'), 'title'=> APPNAME]);
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
       // $this->layout->title = APPNAME;
      //  $this->layout->content = View::make('login.store');
        return view($this->layout, ['content' => View::make('login.store'), 'title'=> APPNAME]);

    }




	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{ //GET


            //$this->layout->title = APPNAME;

            if ($id == "edit") {

                $user = Sentry::getUser();
                $programs = Program::all();
                return view($this->layout, ['content' => View::make('main.profile.edit')->with('skills', Skill::all())->with('programs', $programs)->with('user', $user), 'title'=> APPNAME, 'user'=>$user]);

              //  $this->layout->content = View::make('main.profile.edit')->with('user', $user)->with('programs', $programs)->with('skills', Skill::all());;

            } else {
                try {
                    //  $currentuser = Sentry::getUser();
                   $user = Sentry::findUserByLogin($id);
                    if($user != null){
                   // $userprograms = $user->programs()->all();
                    return view($this->layout, ['content' => View::make('main.profile.index')->with('user', $user), 'title'=> APPNAME]);
                    }
                } catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
                    echo 'User was not found.';
                }

            //    $this->layout->content = View::make('main.profile.index')->with('user', $user);
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
        if(Input::has('editor1')){
            $summary = Input::get('editor1');
            $user->summary = $summary;
        }
        if(Input::has('editor2')){
            $experience = Input::get('editor2');
            $user->experience = $experience;
        }


    if(Input::has('program')){
            $id = Input::get('program');
            $progs = Program::where('ProgramName', '=', $id)->take(1)->get();

                $user->programs()->sync($progs);


        }

        if(Input::has('skills')){
            $skills = Input::get('skills');
            $skillarr = array();
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
            if(!empty($skillarr)) {
                $user->skills()->sync($skillarr);
            }
        }else{
            $user->skills()->detach();
            $user->save();
        }

        if(Input::has('email') && Input::has('fname') && Input::has('lname')){
            $email = Input::get('email');
            $fname = Input::get('fname');
            $lname = Input::get('lname');
            $user->email = $email;
            $user->first_name = $fname;
            $user->last_name = $lname;

        }
        if(Input::has('password')){
            $pass = Input::get('password');
            $user->password = $pass;
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
                    $filename = str_random(20) . '.' . $file->getClientOriginalExtension();

                        $destinationPath = "uploads/".$user->student_id;
                    if(!empty($user->avatar)) {
                        unlink($user->avatar);
                    }

                    $succes = $file->move($destinationPath, $filename);
                    $bodytag = str_replace("public\\", "", $succes->getPathname());
                    $user->avatar = $bodytag;
                }
            }
        }

       if(Input::has('course') || Input::has('prof')){
            $courses = array_filter(Input::get('course'));
            $profs = array_filter(Input::get('prof'));

          if(!empty($courses) && !empty($profs)){
              if(count($courses) > 1 && count($profs) > 1){
                  $user->courses = json_encode(array_combine($courses, $profs));

              }else if(count($courses) > 0 && count($profs) > 0){   //I am the liquor
                $data['fruits'] = array($courses[0]=>$profs[0]);
                  $user->courses = json_encode($data['fruits']);
              }else{
                  $user->courses = null;
              }
          }else{
              $user->courses = null;
          }


        }






        $user->save();


       //$user = Sentry::getUser();
       //$prgs= $user->programs()->get(); var_dump($prgs); $user->programs()->attach(714);
      //  $this->layout->title = APPNAME;


        return view($this->layout, ['content' => View::make('main.profile.edit')->with('user', $user)->with('programs', Program::all())->with('skills', Skill::all()), 'title'=> APPNAME]);
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
