<?php

class AdminController extends \BaseAuthController {
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
        $this->layout->content = View::make('main.admin.index');
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

    public function storeGroup(){

        $this->layout->title = APPNAME;
        if (Input::has('groupname') && !Input::has('editid'))
        {
            $name = Input::get('groupname');
            $am = Input::get('adminmenu');
            $am = isset($am) ? 1 : 0;
            try {
                $group = Sentry::createGroup(array(
                    'name' => $name,
                    'permissions' => array(
                        'admin' => $am,
                        'users' => 1,
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
                );
        }
            $groups = Sentry::findAllGroups();
            $this->layout->content = View::make('main.admin.groups')->with('groups', $groups);
            $this->layout->content->with('message', $group);
        }elseif(Input::has('editid')){

            $id = Input::get('editid');
            $name = Input::get('groupname');
            $am = Input::get('adminmenu');
            $am = isset($am) ? 1 : 0;
            $group = Sentry::findGroupByName($id);
            $group->name = $name;
            $group->permissions = array(
                'admin' => $am,
                'users' => 1,
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
            $this->layout->content = View::make('main.admin.groups')->with('groups', $groups);
            $this->layout->content->with('message', $group);
        }elseif(Input::has('delid')){
            $id = Input::get('delid');
            $group = Sentry::findGroupByName($id);
            $group->delete();
            $groups = Sentry::findAllGroups();
            $this->layout->content = View::make('main.admin.groups')->with('groups', $groups);
        }
        $groups = Sentry::findAllGroups();
        $this->layout->content = View::make('main.admin.groups')->with('groups', $groups);
    }


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{ //GET
        if($id == "groups") {
            $this->layout->title = APPNAME;
            $groups = Sentry::findAllGroups();
            $this->layout->content = View::make('main.admin.groups')->with('groups', $groups);        }
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
