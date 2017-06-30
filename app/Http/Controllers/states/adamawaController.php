<?php

namespace App\Http\Controllers\states;

use Illuminate\Http\Request;




use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Charts;
use Carbon\Carbon;
use App\User;

class adamawaController extends Controller
{

	//get all users registered as resident under adamawa
	public function allAdamawaResident(){
    	

    	$allAdamawaRes = DB::select('select resident from users where resident = ?', ['Adamawa']);
    	$allAdamawaRes =+ count($allAdamawaRes);

    	return $allAdamawaRes;
    	
    }

//get all users registered as origin under adamawa
    public function allAdamawaOrigin(){
        $allAdamawaOri = DB::select('select origin from users where origin = ?', ['Adamawa']);
        $allAdamawaOri =+ count($allAdamawaOri);

        

        return $allAdamawaOri;
       
    }

    //get all users registered under adamawa
    public function allRegisterAdamawa(){
       
        return $allAdamawaRes() + $allAdamawaOri();
    }


    //retrieve vote by age
    public function getVoteByAgeAdamawa(){



$age18_30 = User::whereYear('dod','<', '1999')
 ->whereYear('dod', '>', '1987')->where('govstate', '=', 'Adamawa')->count();

 $age31_43 = User::whereYear('dod','<', '1986')
 ->whereYear('dod', '>', '1974')->where('govstate', '=', 'Adamawa')->count();

 $age44_56 = User::whereYear('dod','<', '1973')
 ->whereYear('dod', '>', '1961')->where('govstate', '=', 'Adamawa')->count();

 $age57_69 = User::whereYear('dod','<', '1960')
 ->whereYear('dod', '>', '1948')->where('govstate', '=', 'Adamawa')->count();

 $age70_82 = User::whereYear('dod','<', '1947')
 ->whereYear('dod', '>', '1935')->where('govstate', '=', 'Adamawa')->count();

 $age83 = User::whereYear('dod','<=', '1934')->where('govstate', '=', 'Adamawa')->count();
  
    }

    //var Adamawa = ['Select item...', 'Demsa', 'Fufure', 'Ganye', 'Gayuk', 'Gombi', 'Grie', 'Hong', 'Jada', 'Larmurde', 'Madagali', 'Maiha', 'Mayo Belwa', 'Michika', 'Mubi North', 'Mubi South', 'Numan', 'Shelleng', 'Song', 'Toungo', 'Yola North', 'Yola South'];
}
