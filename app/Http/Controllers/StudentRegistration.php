<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StudentRegistration extends Controller
{
    //

    public function register()
    {
            return view('registrationform');
    }
    public function register2()
    {
        return view('registrationform_edu');
    }
}