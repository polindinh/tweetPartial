<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function showTweets(){
        $tweets = DB::select('select * from tweet');
        return view('showTweets', ['tweets' => $tweets]);
    }

    public function addTweet(Request $request){
        DB::insert("INSERT INTO tweet (author,content) VALUES ('$request->author', '$request->content');");
        $tweets = DB::select('select * from tweet');
        return view('showTweets', ['tweets' => $tweets]);
    }
    public function deleteTweet(Request $request){
        DB::delete("DELETE FROM tweet WHERE id = '$request->id'");
        $tweets = DB::select('select * from tweet');
        return view('showTweets', ['tweets' => $tweets]);
    }

}
