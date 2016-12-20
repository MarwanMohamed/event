<?php

namespace Sending;

use App\User;

trait Send 
{
	
	public $when;

	public function when($when)
	{	
		$name = 'App\\Events\\'.$when;
		$event = 'App\\Events\\Event';
		event(new $event($name));
		return $this;
	}

	public function do($do)
	{
		return $this;
	}

	
}
