<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\RegistrationRequest;
use Illuminate\Support\Facades\DB;




class RegistrationController  extends Controller
{
    public function create()
    {
            
        return view("registration.create");

    }


    public function store(Request $request, RegistrationRequest $form)
    {
        
        $email = $request->input("email");
        
        if (DB::table('users')->where('email', $email)->exists())
        {

            return redirect()->back()->with('message', 'The email address you have entered is already registered. Login instead');            
            
        } else 

        $form->persist();

        session()->flash("message", "Thanks for Signing up");
        
        return redirect()->home();
    }



}
