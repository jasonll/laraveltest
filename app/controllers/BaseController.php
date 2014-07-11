<?php

class BaseController extends Controller {

    function __construct() {
        //入口处写日志
        //Logger::configure(Config::get('log.path'));
        //$logger = Logger::getLogger('accesslog');
    }
        
	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
