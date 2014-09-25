<?php

class BaseAuthController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
        if ( ! Sentry::check())
        {
            return Redirect::to('./')->with('message', "<div class='alert alert-danger'>You don't have access to this page.</div>");
        }
        else
        {
            if ( ! is_null($this->layout))
            {
                $this->layout = View::make($this->layout);
            }
        }

	}

}
