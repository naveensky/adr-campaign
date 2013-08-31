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

Route::get('/twitter', function () {

    $tweets = array('Election Commission to follow SC order on Convicted MPs/MLAs in upcoming assembly elections <a href="http://zeenews.india.com/news/nation/election-commission-to-follow-supreme-court-s-judgement-cec_873094.html">http://zeenews.india.com/news/nation/...</a>',
        'Bihar MLAs, MLCs under scanner for faking travel bills- <a href="http://articles.timesofindia.indiatimes.com/2013-08-28/india/41537271_1_travel-bills-bihar-mlas-patna-jn">http://articles.timesofindia.indiatimes.com/.... </a>',
        'Haryana Govt. spends 8 Crore every year alone on pensions of former legislators and their widows- <a href="http://www.hindustantimes.com/India-news/Haryana/Bring-political-parties-under-ambit-of-transparency/Article1-1112765.aspx"> http://www.hindustantimes.com/India-news/.…</a>');
    echo json_encode($tweets);
    exit;
});

Route::get('/file', function () {
    return View::make('home.homebcp');
});