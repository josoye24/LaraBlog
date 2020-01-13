<?php

namespace App\Http\Requests;

use App\User;
use App\Mail\WelcomeAgain;
use Illuminate\Http\Request;


use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
                'password' => 'required|confirmed'
            
        ];
    }

    public function persist()
    {
        
        $user = User::create(
            $this->only(['name', 'email', 'password']));
        
        auth()->login($user);

    }

}
