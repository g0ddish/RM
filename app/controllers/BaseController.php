<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
        if ( ! Sentry::check())
        {
            if ( ! is_null($this->layout))
            {
                $this->layout = View::make($this->layout);
            }
        }
        else
        {
            // User is logged in
            $this->layout = "layouts.masterUser";
            if ( ! is_null($this->layout))
            {
                $this->layout = View::make($this->layout);
            }
        }

	}

}
