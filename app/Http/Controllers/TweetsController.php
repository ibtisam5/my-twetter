<?php

namespace App\Http\Controllers;
use App\Tweet;
use Illuminate\Http\Request;
use Auth;

class TweetsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
     public function timeline()
    {
      $data['tweets']  = Tweet::all();
     return view('tweets.timeline',$data);
    }


    public function createTweet(Request $request )
    {
        $tweet= new Tweet();
        $tweet->content   =   $request->tweet_content;
        $tweet->user_id   =   Auth::user()->id;
        $tweet->save();
    }
}
