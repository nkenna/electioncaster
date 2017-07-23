<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\User as Authenticatable;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use App\Http\middleware\Authenticate;


use Illuminate\Http\Request;

class editProfileController extends Controller
{
    protected $redirectTo = '/login';

	

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update(Request $request)
    {


    	return view('success');
    }
}
