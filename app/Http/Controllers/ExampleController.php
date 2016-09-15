<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
  public function getExample()
  {
    return view('index');
  }

  public function postExample(Request $request)
  {
    // validate the user-entered Captcha code when the form is submitted
    $code = $request->input('CaptchaCode');
    $isHuman = captcha_validate($code);

    if ($isHuman) {
      console.log("it works");
    } else {
      console.log("error message");
    }
  }

}
