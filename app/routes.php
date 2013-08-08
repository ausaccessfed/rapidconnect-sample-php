<?php

require_once '../vendor/autoload.php';

use JWT\Authentication\JWT;

Route::get('/', function()
{
	return View::make('hello');
});
