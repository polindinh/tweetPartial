<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function showTweets(){
        $tweets = DB::select('SELECT * FROM tweet');
        return view('showTweets', ['tweets' => $tweets]);
    }

    function showTweet($id) {
        $tweets = DB::table('tweet')->get();
        if($id > sizeOf($tweets)) {
            return view("tweetError");
        }
        return view("showTweets", [ 'tweets' => [$tweets[$id]]]);
    }
    public function addTweet(Request $request){
        DB::insert("INSERT INTO tweet (author,content) VALUES ('$request->author', '$request->content');");
        $tweets = DB::select('SELECT * FROM tweet');
        return view('showTweets', ['tweets' => $tweets]);
    }
    public function deleteTweet(Request $request){
        DB::delete("DELETE FROM tweet WHERE id = '$request->id'");
        $tweets = DB::select('SELECT * FROM tweet');
        return view('showTweets', ['tweets' => $tweets]);
    }

    public function editTweet(Request $request){
        $tweets = DB::select("SELECT * FROM tweet WHERE id='$request->id'");
        return view('editTweet', ['tweets' => $tweets]);
    }

    public function updateTweet(Request $request){
        DB::update("UPDATE tweet SET author = '$request->author',content = '$request->content' WHERE id='$request->id'");
        $tweets = DB::select('SELECT * FROM tweet');
        return view('showTweets', ['tweets' => $tweets]);
    }

    public function showsingleTweet(Request $request) {
        $tweets = DB::select("SELECT * FROM tweet WHERE id='$request->id'");
        return view("singleTweet", ['tweets' => $tweets]);
    }

}
