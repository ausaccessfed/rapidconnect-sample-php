<?php

use JWT\Authentication\JWT;

Route::get('/', array('https' => false, 'as' => 'root', function()
{
	return View::make('root');
}));

Route::get('/welcome', array('https' => true, 'as' => 'welcome', function()
{
  $jwt = Session::get('jwt');
  $jws = Session::get('jws');
  $attributes = $jwt->{'https://aaf.edu.au/attributes'};
  return View::make('welcome', array('jws' => $jws, 'jwt' => $jwt, 'attributes' => $attributes));
}));

Route::get('/logout', array('https' => true, 'as' => 'logout',function()
{
  Session::flush();
  return Redirect::to_route('root');
}));

Route::post('/auth/jwt', array('https' => true, function()
{
  $jws = Input::get('assertion');
  $jwt = JWT::decode($jws, 'abcdABCDabcdABCDabcd');

  # In a complete app we'd also store and validate the jti value to ensure there is no reply on this unique token ID
  $now = strtotime("now");
  if($jwt->aud == 'https://aaf-echo.gopagoda.com' && strtotime($jwt->exp) < $now && $now > strtotime($jwt->nbf)) {
    Session::put('jws', $jws);
    Session::put('jwt', $jwt);
    return Redirect::to_route('welcome');
  } else {
    App::abort(403,"JWS was invalid");
  }
}));
