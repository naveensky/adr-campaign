<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get("/", array('as' => 'home', 'uses' => 'HomeController@getIndex'));
Route::controller('campaign', 'HomeController');
Route::get('/error', 'ErrorController@getIndex');
Route::get('/test', function () {
    $date = new DateTime();
    $dateString = $date->format('Y-m');
    $registrationNumber = preg_replace('#\-#', '', $dateString) . str_pad(1, 10, "0", STR_PAD_LEFT);
    var_dump($registrationNumber);
});

Route::get('/testemail', function () {
    $emailService = new EmailService();
    $emailService->sendEmail(array('userName' => 'Keshav', 'userEmail' => 'kashta@greenapplesolutions.com'));
});