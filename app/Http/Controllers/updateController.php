<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Http\middleware\Authenticate;

use Illuminate\Http\Request;

class updateController extends Controller
{

	protected $redirectTo = '/login';
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
        
[-t6gve4y67t5rfj[
]]         return view('update');
        //return redirect()->route('update');
        
    }

    
}
