<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function create()
    {
        return view('auth.admin_login');
    }
}
