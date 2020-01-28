<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'TweetController@showTweets');

Route::post('/', 'TweetController@addTweet');

Route::post('/deletePost', 'TweetController@deleteTweet');

Route::get('/{tweetId}', 'TweetController@showTweet');

Route::post('/editPost', 'TweetController@editTweet');

Route::post('/updatePost', 'TweetController@updateTweet');

Route::post('/singleTweet', 'TweetController@showSingleTweet');









