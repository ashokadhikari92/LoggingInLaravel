<?php

$router->get('/', function () {
    return view('welcome');
});

$router->get('/log',array(
    'as' => 'application.log',
    'uses' => 'HomeController@index'
));
