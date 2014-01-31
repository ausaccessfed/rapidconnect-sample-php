# AAF Rapid Connect - PHP Sample App

In addition to the information and live demo available from the [Rapid Connect page](http://rapid.aaf.edu.au), we have provided the following sample code which underpins our examples.

This is the PHP sample application. It is provided purely for illustrative purposes only to give you an idea of how we went about building our PHP demo. It should be noted that the code presented here should not be used as a base to build your application, but is provided to give you an idea of the concepts behind connecting a service so you can pick it apart (everybody’s requirements are different and just cutting and pasting the code won’t generally work if you decide to do that). No effort has been made to audit the code's security, or make it production-ready.

AAF has used the Laravel web application framework to develop this application. It is a prerequisite of this sample application that you are able to run Laravel web applications. Please see the [Laravel Quickstart](http://laravel.com/docs/quick) guide for more information. As this is purely for illustrative purposes, AAF is regretfully unable to provide support for the Laravel framework and general PHP development questions, you will need to get in touch with your local software development team to help you out here :smile:.

## Getting Started

There are three modifications which **MUST** be made before this application will work correctly:

1. In `app/config/app.php`, replace the `key` with a new, random value that you have generated. Keep it secret.
2. In `app/routes.php`, replace the value of `$secret` with a new, random value that you have generated. This will be your **Secret** which is used during registration with Rapid Connect.
3. In `app/views/root.php`, find the link with `href="INSERT_YOUR_RAPID_CONNECT_URL_HERE"`. Replace the value of the `href` with the **UNIQUE URL** provided after you register your application.

### Registration

You may register against [Rapid Connect Test](http://rapid.test.aaf.edu.au) to test this application. Please use a sensible descriptive name for your service. It's much easier for us if we don't have a database full of "test service" belonging to various people.

If you are running this on your desktop with the default settings, the callback URL is most likely `http://localhost:8000/auth/jwt`

### Starting the application

Before running the application for the first time, you should ensure dependencies are installed by running:

    composer install

On Linux, Mac OS X and other UNIX-like operating systems, the following command will start the application:

    ./artisan serve

If you encounter any errors, please review the [Laravel Quickstart](http://laravel.com/docs/quick) guide to ensure you have completed all the necesssary setup.

## License

Copyright 2014, Australian Access Federation

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

   http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.

### Contributing

AAF is happy to accept contributions which improve the quality of this sample application. Feel free to issue a pull request.

## Laravel PHP Framework

[![Latest Stable Version](https://poser.pugx.org/laravel/framework/version.png)](https://packagist.org/packages/laravel/framework) [![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.png)](https://packagist.org/packages/laravel/framework) [![Build Status](https://travis-ci.org/laravel/framework.png)](https://travis-ci.org/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.

Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

### Official Documentation

Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs).

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
