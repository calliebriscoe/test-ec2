<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ContactFormRequest;


class AboutController extends Controller
{

    public function create()
    {
        return view('index');
    }

    public function store(ContactFormRequest $request)
    {

       \Mail::send('emails.contact',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'employer' => $request->get('employer'),
            'phone' => $request->get('phone'),
            'address' => $request->get('address'),
            'city' => $request->get('city'),
            'zipcode' => $request->get('zipcode'),
            'state' => $request->get('state'),
            'interest' => $request->get('interest'),
            'price' => $request->get('price'),
            'time' => $request->get('time'),
            'where' => $request->get('where')

        ), function($message)
    {
        $message->from('jenny@hbcgroupkw.com');
        $message->to('jenny@hbcgroupkw.com', 'HomeBenfitsIQ')->subject('Contact us');
    });


  /*  \Mail::send('emails.welcomeEmail',
      array(
          'name' => $request->get('name'),
          'email' => $request->get('email'),
          'interest' => $request->get('interest'),
          'price' => $request->get('price'),
          'time' => $request->get('time'),

      ), function($message)
  {
      $message->from('calliebriscoe@gmail.com', 'HBC Group');
      $message->to($senderEmail, $senderName)->subject('Thanks for contacting HBC Group');
  });
*/
      return \Redirect::route('index')
        ->with('message', 'Thanks for contacting us we will get back to you shortly!');

    }

}
