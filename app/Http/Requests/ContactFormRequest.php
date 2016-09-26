<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      return [
        'name' => 'required',
        'email' => 'required|email',
        'employer' => 'max:200',
        'phone' => 'numeric',
        'employer' => 'max:200',
        'address' => 'max:200',
        'city' => 'max:200',
        'zipcode' => 'max:20',
        'state' => 'max:2',
        'interest' => 'required',
        'price' => 'max:20',
        'time' => 'max:20',
        'message' => 'max:500',
        'g-recaptcha-response' => 'required|recaptcha',
      ];
    }
}
