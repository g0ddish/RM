<?php
namespace ResearchMonster\Http\Controllers;

use Exception;
use Illuminate\Routing\Controller;
class BaseController extends Controller {
	
	   protected $layout = null;

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
         if (is_null($this->layout))
        {
            throw new Exception('layout was not set');
        }
        return view($this->layout, ['content' => $content]);

	}

}
