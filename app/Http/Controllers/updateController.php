<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
<<<<<<< HEAD
use App\Http\middleware\Authenticate;
=======
>>>>>>> 0d352c0dde60b4698b2a73a07d3ec485fbc29152

use Illuminate\Http\Request;

class updateController extends Controller
{

<<<<<<< HEAD
	protected $redirectTo = '/login';
=======
	protected $redirectTo = '/user/update';
>>>>>>> 0d352c0dde60b4698b2a73a07d3ec485fbc29152
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user/update');
    }

    public function update(Request $request)
    {
    	$id = Auth::user()->id;
    	$user = User::find($id);
    	$user->president = $request->input('presparty');
    	$user->prevote = Carbon::now();
    	$user->prestate = $request->input('location');
    	
    	$user->save();
    	$request->session()->flash('message', 'Voting Successful');
        
<<<<<<< HEAD
[-t6gve4y67t5rfj[
]]         return view('update');
=======
         return view('update');
>>>>>>> 0d352c0dde60b4698b2a73a07d3ec485fbc29152
        //return redirect()->route('update');
        
    }

    
}
