<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index(Request $request) {
        $data = Test::all();

        return view('form', ['data' => $data]);
    }

    public function store (Request $request) {
        $test = new Test();
        $test->name = $request->name;
        $test->save();

        return redirect('/download');
    }
}
