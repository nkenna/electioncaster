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
 
//bar chart- votes by age
 $chart5 = Charts::create('bar', 'highcharts')
           
            // Setup the chart settings
            ->title("president Votes according to Age")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(0, 400) // Width x Height
            // This defines a preset of colors already done:)

            ->template("material")
            // You could always set them manually
            ->colors(['#2196F3', '#F44336', '#4FC107','#F3C111', '#F3C444', '#333111'])
            // Setup the diferent datasets (this is a multi chart)
            ->values([$age18_30, $age31_43, $age44_56, $age57_69, $age70_82, $age83])
            
            // Setup what the values mean
            ->labels(['18 - 30yrs', '31 - 43yrs', '44 - 56yrs', '57 - 69yrs', '70 - 82yrs', '83yrs above']);

   


    }




    //var Adamawa = ['Select item...', 'Demsa', 'Fufure', 'Ganye', 'Gayuk', 'Gombi', 'Grie', 'Hong', 'Jada', 'Larmurde', 'Madagali', 'Maiha', 'Mayo Belwa', 'Michika', 'Mubi North', 'Mubi South', 'Numan', 'Shelleng', 'Song', 'Toungo', 'Yola North', 'Yola South'];
}
