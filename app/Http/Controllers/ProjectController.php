<?php
namespace ResearchMonster\Http\Controllers;

use View;
use Sentry;
use ResearchMonster\Models\Project;
use Redirect;
use ResearchMonster\Models\Skill;
use Input;
use Config;
use ResearchMonster\Models\PFile;
use Request;
use DB;
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
        if (Input::has('mobile')) {
            return json_encode(Project::take(20)->get());
        }else {


            if(Input::has('keywords') && Input::has('skills')){
                    /*
                     *
                     * $posts = Post::whereHas('comments', function($q)
{
    $q->where('content', 'like', 'foo%');

})->get();
                     */
            }elseif(Input::has('keywords')){
                $searchTerms = explode(" ", Input::get('keywords'));

                foreach($searchTerms as $term)
                {
                    $one = Project::where('title', 'LIKE', "%$term%")->get()->all();
                    $two = Project::where('description', 'LIKE', "%$term%")->get()->all();
                    $projects = array_merge($one, $two);
                }
            }else{
                $projects = Project::all();
            }
            return view($this->layout, ['content' => View::make('main.project.index')->with('projects', $projects)->with('skills', Skill::all()), 'title' => APPNAME]);
        }
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $permission = parent::requireProjectPermission();
        if($permission != false)
            return $permission;
			return view($this->layout, ['content' =>  View::make('main.project.create')->with('skills', Skill::all()), 'title'=> APPNAME]);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $permission = parent::requireProjectPermission();
        if($permission != false)
            return $permission;
		if (Input::has('title') && Input::has('desc')) {
            $user = Sentry::getUser();
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

            if (Request::hasFile('pfile') && Request::file('pfile')->isValid())
            {
                $formatTable = array(
                    'image/jpeg',       //Images
                    'image/png',
                    'image/gif',
                    'image/tga',
                    'image/tif',
                    'image/bmp',

                    'text/css',         //Text
                    'text/richtext',
                    'text/plain',
                    'text/yaml',

                    'application/pdf',      //Applications
                    'application/msword',
                    'application/vnd.android.package-archive',
                    'application/json',
                    'application/x-msaccess',
                    'application/vnd.ms-excel',
                    'application/vnd.ms-powerpoint',
                    'application/vnd.ms-project',
                    'application/x-mspublisher',
                    'application/vnd.visio',
                    'application/vnd.oasis.opendocument.presentation',
                    'application/vnd.oasis.opendocument.spreadsheet',
                    'application/vnd.oasis.opendocument.text',
                    'application/x-rar-compressed',
                    'application/x-rar',
                    'application/rar',
                    'application/octet-stream',
                    'application/rtf',
                    'application/x-tar',
                    'application/vnd.wordperfect',
                    'application/xml',
                    'application/zip',
                    'application/x-zip',
                    'application/x-zip-compressed',
                    'application/x-compressed',
                    'application/vnd.openxmlformats-officedocument.wordprocessingml.document',


                );
                $file = Request::file('pfile');
                $mime = $file->getMimeType();

                foreach($formatTable as $mimecheck){
                    if($mime == $mimecheck){
                        $filename = str_random(20) . '.' . $file->getClientOriginalExtension();
                        if(Config::get('app.debug')){
                            $destinationPath = "public\\uploads\\".$user->student_id;
                        }else{
                            $destinationPath = "uploads\\".$user->student_id;
                        }
                        $succes = $file->move($destinationPath, $filename);
                        $bodytag = str_replace("public\\", "", $succes->getPathname());

                        $nfile = new PFile();
                        $nfile->file_name = $filename;
                        $nfile->file_location = $bodytag;
                        $nfile->file_type = $mimecheck;
                        $nfile->save();
                        $project->files()->attach($nfile);
                    }
                }
            }

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
			return redirect('/')->with('message', 'Added project ' . str_limit($project->title, 75));
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

        $user = Sentry::getUser();
        if ($user != null) {
            if (is_numeric($id)) {
                return view($this->layout, ['content' => View::make('main.project.single')->with('project', Project::find($id))->with('skills', Skill::all()), 'title' => APPNAME]);
            }
        }else{
          return  Redirect::to('/');
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
		if ($user != null && $user->hasProjectCRUDPermission() ) {
			if (Input::has('title') && Input::has('desc') && Input::has('start')) {
				$project = Project::find($id);
				$title = Input::get('title');
				$skills = Input::get('skills');
				$desc = Input::get('desc');
				$start = Input::get('start');
				$status = Input::get('status');
				$project->title = $title;
				$project->description = $desc;
				$project->start_date = strtotime($start);
				$project->status_id = $status;
				$project->save();

                if (Request::hasFile('pfile') && Request::file('pfile')->isValid())
                {
                    $formatTable = array(
                        'image/jpeg',       //Images
                        'image/png',
                        'image/gif',
                        'image/tga',
                        'image/tif',
                        'image/bmp',

                        'text/css',         //Text
                        'text/richtext',
                        'text/plain',
                        'text/yaml',

                        'application/pdf',      //Applications
                        'application/msword',
                        'application/vnd.android.package-archive',
                        'application/json',
                        'application/x-msaccess',
                        'application/vnd.ms-excel',
                        'application/vnd.ms-powerpoint',
                        'application/vnd.ms-project',
                        'application/x-mspublisher',
                        'application/vnd.visio',
                        'application/vnd.oasis.opendocument.presentation',
                        'application/vnd.oasis.opendocument.spreadsheet',
                        'application/vnd.oasis.opendocument.text',
                        'application/x-rar-compressed',
                        'application/x-rar',
                        'application/rar',
                        'application/octet-stream',
                        'application/rtf',
                        'application/x-tar',
                        'application/vnd.wordperfect',
                        'application/xml',
                        'application/zip',
                        'application/x-zip',
                        'application/x-zip-compressed',
                        'application/x-compressed',
                        'application/vnd.openxmlformats-officedocument.wordprocessingml.document',

                    );
                    $file = Request::file('pfile');
                    $mime = $file->getMimeType();
                 //   echo $mime;


                    foreach($formatTable as $mimecheck){
                        if($mime == $mimecheck){
                            $filename = str_random(20) . '.' . $file->getClientOriginalExtension();
                            $destinationPath = "uploads/".$user->student_id ."/project";
                            $succes = $file->move($destinationPath, $filename);
                            $bodytag = str_replace("public/", "", $succes->getPathname());

                            $nfile = new PFile();
                            $nfile->file_name = $filename;
                            $nfile->file_location = $bodytag;
                            $nfile->file_type = $mimecheck;
                            $nfile->save();
                            $project->files()->save($nfile);
                        }
                    }
                }

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
			}
		}elseif(Input::has('interested')){
			$pid  = Input::get('interested');
			$project = Project::find($pid);
			$user->interestedProjects()->attach($project);
			return redirect('/')->with('message', 'Registered interest in project ' . str_limit($project->title, 75));
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
        $permission = parent::requireProjectPermission();
        if($permission != false)
            return $permission;
			$project = Project::find($id);
			$project->delete();
			return redirect('/')->with('message', 'Deleted project '  . str_limit($project->title, 75));
	}


}
