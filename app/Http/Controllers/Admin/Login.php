<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Login extends Controller
{
       /**
     * Display the login view.
     */
    public function auth()
    {
        return view('admin.login');   
    }
}
