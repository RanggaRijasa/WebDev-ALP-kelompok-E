<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('Login'); // This should match the name of your view file without the .blade.php extension
    }
}