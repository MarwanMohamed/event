<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sending\Send;
use App\User;

class UsersController extends Controller
{
	use Send;

    public function index()
    {
    	$this->when('UserHasRegister')->do('Email');
    }
}
