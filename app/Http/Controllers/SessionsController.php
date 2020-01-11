<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

class SessionsController extends Controller
{
    


    public function __construct() 
    {
        $this->middleware("guest", ["excerpt" => "destroy"]);
    }

    public function create ()
    {
        
        return view("sessions.create");
        
    }


    public function store ()
    {
        //attempt to authenticate the user & sign in
        
        if (! auth()->attempt(request(["email", "password"]))) 
        {

            //if not, redirect back with erro message

            return back()->withErrors([
                "message" => "Please check your credentials and try again"
            ]);
        }

        //if sign in redirecto to home
        return redirect()->home(); 

    }


    
    public function destroy (Request $request)
    {

        Auth::logout();


        return redirect()->home();
        
    }

}
