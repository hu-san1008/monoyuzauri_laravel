<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationControlller extends Controller
{
    public function new_user()
    {
        return view('Registration');
    }
}
