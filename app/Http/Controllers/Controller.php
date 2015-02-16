<?php
namespace ResearchMonster\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Sentry;
use Redirect;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;

    public function requireProjectPermission()
    {
        $user = Sentry::getUser();
        if($user == null || !$user->hasProjectCRUDPermission()) {
            return Redirect::to('/');
        }else{
            return false;
        }
    }

    public function requireAdminPermission()
    {
        $user = Sentry::getUser();
        if($user === null || !$user->hasAdminPermission()) {
            return Redirect::to('/');
        }else{
            return false;
        }
    }



}
