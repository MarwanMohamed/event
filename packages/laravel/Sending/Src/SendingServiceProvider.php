<?php

namespace Sending;

use Illuminate\Support\ServiceProvider;
use Sending\Send;

class SendingServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->app->bind('send', function($app) {
			return new send;
		});
	}

	public function boot()
	{
		//
	}
}