<?php

namespace App\Http\Controllers;
use App\Follow;
use Illuminate\Http\Request;
use DB;
use App\User;
use Intervention\Image\Facades\Image as ImageInt;

class FollowController extends Controller
{
    public function index()
    {
        $follows = Follow::all();
        return view('images.index',['follows' => $follows]);
    }

    public function store(Request $request)
    {
        $follow = new Follow;

        $follow->follower = request('follower');

        if(request('user')!=null) {
            $follow->user = request('user');
        } else {
            $follow->user = "error";
        }

        $follow->save();

        $user_name = User::where('id', 1)->first()->name;

        $url = 'user/'.$user_name;

        return redirect($url);
    }

    public function followers (){
        // get all were user id = user in follow table
        // function use to show number and names of followers to user
    }

    public function follows (){
        // get all were user id = follower in follow table
        // function use to show last posts of follows in "last posts" page
    }
}
