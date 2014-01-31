<?php

use JWT\Authentication\JWT;

Route::get('/', function()
{
	return View::make('root');
});

Route::get('/welcome', function()
{
  $jwt = Session::get('jwt');
  $jws = Session::get('jws');
  $attributes = $jwt->{'https://aaf.edu.au/attributes'};
  return View::make('welcome', array('jws' => $jws, 'jwt' => $jwt, 'attributes' => $attributes));
});

Route::get('/logout', function()
{
  Session::flush();
  return Redirect::to('http://localhost:8000');
});

Route::post('/auth/jwt', function()
{
  $secret = 'abcdABCDabcdABCDabcd';
  $jws = Input::get('assertion');
  $jwt = JWT::decode($jws, $secret);

  # In a complete app we'd also store and validate the jti value to ensure there is no reply on this unique token ID
  $now = strtotime("now");
  if($jwt->aud == 'http://localhost:8000' && strtotime($jwt->exp) < $now && $now > strtotime($jwt->nbf)) {
    Session::put('jws', $jws);
    Session::put('jwt', $jwt);
    return Redirect::to('http://localhost:8000/welcome');
  } else {
    App::abort(403,"JWS was invalid");
  }
});

Route::get('/INSERT_YOUR_RAPID_CONNECT_URL_HERE', function()
{
  return View::make('readme');
});
