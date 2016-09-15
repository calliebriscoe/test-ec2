<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class AboutController extends Controller
{

    public function create()
    {
        return view('index');
    }

    public function store(ContactFormRequest $request)
    {

      return \Redirect::route('/')
        ->with('message', 'Thanks for contacting us!');

    }

}
