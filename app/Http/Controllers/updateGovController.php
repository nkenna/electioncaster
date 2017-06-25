<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class updateGovController extends Controller
{
    protected $redirectTo = '/user/updateGov';
    public function __construct()
    {
        $this->middleware('auth');
    }

     public function index()
    {
        return view('user/updateGov');
    }


     public function updateGov(Request $request)
    {
    	$id = Auth::user()->id;
    	$user = User::find($id);
    	$user->governor = $request->input('govparty');
    	$user->govstate = $request->input('sta');
    	$user->govorigin = $request->input('votelga');
    	$user->govvote = Carbon::now();
    	
    	$user->save();
    	$request->session()->flash('message', 'Voting Successful');
        
         return view('updateGov');
        //return redirect()->route('update');
        
    }
}
