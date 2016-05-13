<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

    public function store()
    {
        $input = Request::all();
        $validation = Validator::make($input, ['name' => 'required']);

        if (date('l') === 'Friday') {
            throw new Exception('We do not work on Fridays');
        }

        if ($validation->fails()) {
            return Redirect::back()->withInput()->withErrors($validation);
        }

        Post::create($input);

        return Redirect::home();
    }

}
