<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Khill\Lavacharts\Lavacharts;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Charts;

use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class dataviewController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

	public function getAllVotes(){
		 $user = DB::table('users')->count();
		return view('dataview')->with($user);
	}
	

//render the president data chata







}
