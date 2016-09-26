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
      $contactMessage = (string) $request->get('message');
      //$senderName = $request->get('name');
      //$senderEmail = $request->get('email');

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
            'contactMessage' => $contactMessage

        ), function($message)
    {
        $message->from('calliebriscoe@gmail.com');
        $message->to('calliebriscoe@gmail.com', 'Admin')->subject('Contact us');
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
