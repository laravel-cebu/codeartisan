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

        if (date('l') !== 'Friday') {
            if ($validation->passes()) {
                Post::create($input);

                return Redirect::home();
            } else {
                return Redirect::back()->withInput()->withErrors($validation);
            }
        } else {
            throw new Exception('We do not work on Fridays');
        }
    }

}
