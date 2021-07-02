<?php

namespace App\Http\Controllers;
use App\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Users;
use Intervention\Image\Facades\Image as ImageInt;

class ImageController extends Controller
{

    public function index()
    {
        $images = Image::all();
        return view('images.index',['images' => $images]);
    }

    public function store(Request $request)
    {
        $img = new Image;

        $img->user_id = request('user_id');
        $img->user_name = request('user_name');
        $img->ref_id = request('ref_id');
        $img->image = request('image');


        if(request('comment')!=null) {
            $img->comment = request('comment');
        } else {
            $img->comment = " ";
        }

        $img->save();

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
