<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TweetController extends Controller
{
    private $tweets = [
        [
        'author' => 'Paul',
        'content' => 'This is my first tweet'
        ],
        [
        'author' => 'Oz',
        'content' => 'This is my second tweet'
        ],
        [
        'author' => 'Alex',
        'content' => 'This is my third tweet'
        ],
        [
        'author' => 'John',
        'content' => 'This is my fourth tweet'
        ]

    ];

    function show(){
        return view('showTweets', ['allTweets' => $this -> tweets]);
    }
    function showTweet($id){
        if($id > sizeOf($this->tweets)){
            return view("tweetError");
        }
        return view('showTweets', ['allTweets' =>[$this-> tweets[$id]]]);
    }
}
