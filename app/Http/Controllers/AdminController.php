<?php
namespace ResearchMonster\Http\Controllers;

use View;
use Sentry;
use ResearchMonster\Models\User;
use ResearchMonster\Models\Program;
use ResearchMonster\Models\Project;
use Redirect;
use Input;
use ResearchMonster\Models\Skill;
class AdminController extends Controller {
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
        $permission = parent::requireAdminPermission();
        if($permission != false)
            return $permission;
        return view($this->layout, ['content' => View::make('main.admin.index'), 'title'=> APPNAME]);
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


	}

    public function storeUser()
    {


        $permission = parent::requireAdminPermission();
        if($permission != false)
            return $permission;
        if (Input::has('sid') && Input::has('email') && Input::has('pass') && !Input::has('edit-field'))
        {
           $sid = Input::get('sid');
           $email = Input::get('email');
           $pass = Input::get('pass');
           $fname = Input::get('fname');
           $lname = Input::get('lname');

            try
            {
                // Create the user
                $user = Sentry::createUser(array(
                    'student_id' => $sid,
                    'email'     => $email,
                    'password'  => $pass,
                    'activated' => true,
                    'first_name' => $fname,
                    'last_name' => $lname,
                ));

                $permissions = Input::get('permissions');
                foreach($permissions as $id=>$permission){
                    if($permission == "on") {
                        $group = Sentry::findGroupById($id);
                        $user->addGroup($group);
                    }
                }
                if ($user->save())
                {
                    // User information was updated
                }
                else
                {
                    // User information was not updated
                }

            }
            catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
            {
                echo 'Login field is required.';
            }
            catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
            {
                echo 'Password field is required.';
            }
            catch (Cartalyst\Sentry\Users\UserExistsException $e)
            {
                echo 'User with this login already exists.';
            }
            catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e)
            {
                echo 'Group was not found.';
            }



            $users = Sentry::findAllUsers();
            return view($this->layout, ['content' =>  View::make('main.admin.users')->with('users', $users), 'title'=> APPNAME]);
        }elseif(Input::has('edit-field')){
            $eid = Input::get('edit-field');
            $user = Sentry::findUserById($eid);
            $sid = Input::get('sid');
            $email = Input::get('email');
            $pass = Input::get('pass');
            $fname = Input::get('fname');
            $lname = Input::get('lname');

            $user->student_id = $sid;
            $user->email = $email;
            if(!empty($pass))
            $user->password = $pass;
            $user->first_name = $fname;
            $user->last_name = $lname;
                $permissions = Input::get('permissions');
                $grps = Sentry::findAllGroups();
                foreach($grps as $grp){
                    $user->removeGroup($grp);
                }
                foreach($permissions as $id=>$permission){
                    if($permission == "on") {
                        $group = Sentry::findGroupById($id);
                        $user->addGroup($group);
                    }
                }
                if ($user->save())
                {
                    // User information was updated
                }
                else
                {
                    // User information was not updated
                }

            $users = Sentry::findAllUsers();
            return view($this->layout, ['content' =>  View::make('main.admin.users')->with('users', $users), 'title'=> APPNAME]);

        }elseif(Input::has('delid')){
            $eid = Input::get('delid');
            $user = Sentry::findUserById($eid);
            $user->delete();
            $users = Sentry::findAllUsers();
            return view($this->layout, ['content' =>  View::make('main.admin.users')->with('users', $users), 'title'=> APPNAME]);
        }else{
            if(Input::has('keyword')){
                $keyword = Input::get('keyword');
                $users1 = User::whereHas('programs', function($q) use ($keyword)
                {
                    $q->where('ProgramName', $keyword);
                })->get()->all();

                $users2 = User::where('courses', 'like', '%'. $keyword . '%')->get()->all() ;
                $users = array_merge($users1, $users2);

            }

            if(Input::has('skills')){
                $skills = Input::get('skills');

                $users1 = User::whereHas('skills', function($q) use ($skills)
                {
                    foreach($skills as $keyword) {
                        $q->where('name', $keyword);
                    }
                })->get()->all();

                if(isset($users)){
                    $users = array_merge($users, $users1);
                }else{
                    $users = $users1;
                }

            }
            if(!isset($users)){
                $users = Sentry::findAllUsers();
            }
            return view($this->layout, ['content' =>  View::make('main.admin.users')->with('users', $users)->with('programs', Program::all())->with('skills', Skill::all()), 'title'=> APPNAME]);

        }
    }


        public function storeGroup(){
            $permission = parent::requireAdminPermission();
            if($permission != false)
                return $permission;
            if (Input::has('groupname') && !Input::has('editid'))
        {
            $name = Input::get('groupname');
            $am = Input::get('adminmenu');
            $crudp = Input::get('crudprojects');
            $requestp = Input::get('crudprojects');

            $crudp = isset($crudp) ? 1: 0;
            $requestp = isset($requestp) ? 1: 0;
            $am = isset($am) ? 1 : 0;
            try {
                $group = Sentry::createGroup(array(
                    'name' => $name,
                    'permissions' => array(
                        'admin' => $am,
                        'users' => 1,
                        'crudprojects' => $crudp,
                        'requestprojects' => $requestp
                    ),
                ));
            }
        catch (Cartalyst\Sentry\Groups\NameRequiredException $e)
        {
            echo 'Name field is required';
        }
        catch (Cartalyst\Sentry\Groups\GroupExistsException $e)
        {
            $id = Input::get('editid');

            $group = Sentry::findGroupByName($id);
                $group->name = $name;
                $group->permissions = array(
                    'admin' => $am,
                    'users' => 1,
                    'crudprojects' => $crudp,
                    'requestprojects' => $requestp,
                );
        }
            $groups = Sentry::findAllGroups();
            return view($this->layout, ['content' =>  View::make('main.admin.groups')->with('groups', $groups)->with('message', $group), 'title'=> APPNAME]);
        }elseif(Input::has('editid')){

            $id = Input::get('editid');
            $name = Input::get('groupname');
            $am = Input::get('adminmenu');
            $crudp = Input::get('crudprojects');
            $requestp = Input::get('crudprojects');
            $crudp = isset($crudp) ? 1: 0;
            $requestp = isset($requestp) ? 1: 0;
            $am = isset($am) ? 1 : 0;
            $group = Sentry::findGroupByName($id);
            $group->name = $name;
            $group->permissions = array(
                'admin' => $am,
                'users' => 1,
                'crudprojects' => $crudp,
                'requestprojects' => $requestp,
            );
            if ($group->save())
            {
                // Group information was updated
            }
            else
            {
                // Group information was not updated
            }
            $groups = Sentry::findAllGroups();
            return view($this->layout, ['content' =>  View::make('main.admin.groups')->with('groups', $groups)->with('message', $group), 'title'=> APPNAME]);
        }elseif(Input::has('delid')){
            $id = Input::get('delid');
            $group = Sentry::findGroupByName($id);
            $group->delete();
            $groups = Sentry::findAllGroups();
            return view($this->layout, ['content' =>  View::make('main.admin.groups')->with('groups', $groups), 'title'=> APPNAME]);
        }
        $groups = Sentry::findAllGroups();
            return view($this->layout, ['content' =>  View::make('main.admin.groups')->with('groups', $groups), 'title'=> APPNAME]);
    }

    public function storeTag(){
        $permission = parent::requireAdminPermission();
        if($permission != false)
            return $permission;

        if (Input::has('tagname') && !Input::has('editid'))
        {
            $tag = new Skill();
            $tag->name = Input::get('tagname');
            $tag->save();
        }elseif(Input::has('editid')){
            $tag = Skill::find(Input::get('editid'));
            $tag->name = Input::get('tagname');
            $tag->save();


        }elseif(Input::has('delid')){
            $tag = Skill::find(Input::get('delid'));
            $tag->delete();
        }

        $skills = Skill::all();
        return view($this->layout, ['content' =>  View::make('main.admin.skills')->with('skills', $skills), 'title'=> APPNAME]);
    }


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $permission = parent::requireAdminPermission();
        if($permission != false)
            return $permission;
        if($id == "groups") {
          //  $this->layout->title = APPNAME;
            $groups = Sentry::findAllGroups();
            return view($this->layout, ['content' =>  View::make('main.admin.groups')->with('groups', $groups), 'title'=> APPNAME]);
        }elseif($id == "users"){
           // $this->layout->title = APPNAME;
            $users = Sentry::findAllUsers();
            return view($this->layout, ['content' =>  View::make('main.admin.users')->with('users', $users)->with('programs', Program::all())->with('skills', Skill::all()), 'title'=> APPNAME]);

        }elseif($id == "tags"){
            $skills = Skill::all();

            return view($this->layout, ['content' =>  View::make('main.admin.skills')->with('skills', $skills), 'title'=> APPNAME]);

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
