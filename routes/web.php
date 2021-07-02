<?php
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(
    /**
     *
     */
    function () {

        Route::get('/', function () {
            return view('welcome');
        });

        Route::get('/about', function () {
            return view('about');
        });

        Route::get('/editor', function () {
            return view('editor');
        });

        Route::get('/new', function () {
            $images = DB::table('images')
                ->take(12)
                ->get();
            return view('new', compact('images'));
        });

        Route::get('/articles', function () {
            return view('articles');
        });

        Route::get('/home', function () {
            $user_id = Auth::user()->id;
            $images = DB::table('images')
                ->where('user_id', '=', $user_id)
                ->get();
            return view('home', compact('images'));
        });

        Route::get('/start_editor', function () {
            return view('start_editor');
        });

        Route::post('post_image', 'ImageController@store');

        Route::post('make_follow', 'FollowController@store');
        
        Route::get('/user/{user_name}', function ($user_name) {
            $name = $user_name;
            $images = DB::table('images')
                ->where('user_name', '=', $name)
                ->get();
            return view('user')->with(compact('images'));

            $id = DB::table('users')
                ->select('id')
                ->where('name', '=', $name)
                ->get();

            $follow = DB::table('follows')
                ->where('user', '=',  $id)
                ->where('follower', '=', Auth::user()->id)
                ->get();
           
        });
    }
);
