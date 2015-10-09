<?php

/**
 * Adds generic notice to the login page
 *
 * @license GNU GPLv3+
 * @author Jan Kischel
 */
class login_notice extends rcube_plugin
{
	public $task = 'login';

	function init()
	{
		$this->include_script('login_notice.js');
		$this->include_stylesheet('login_notice.css');
	}
}

