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
	

//get president data for charts[pie]
	public function getPresidentPartyPie(){
	


    $apc = DB::select('select * from users where president = ?', ['APC']);
    $apc =+ count($apc);

    $pdp = DB::select('select * from users where president = ?', ['PDP']);
     $pdp =+count($pdp);

    $lp = DB::select('select * from users where president = ?', ['LP']);
     $lp =+ count($lp);

    $apga = DB::select('select * from users where president = ?', ['APGA']);
     $apga =+ count($apga);

     $acpn = DB::select('select * from users where president = ?', ['ACPN']);
     $acpn =+ count($acpn);

     $aa = DB::select('select * from users where president = ?', ['AA']);
     $aa =+ count($aa);

     $ad = DB::select('select * from users where president = ?', ['AD']);
     $ad =+ count($ad);

     $kp = DB::select('select * from users where president = ?', ['KP']);
     $kp =+ count($kp);

     $adc = DB::select('select * from users where president = ?', ['ADC']);
     $adc =+ count($adc);

     $ncp = DB::select('select * from users where president = ?', ['NCP']);
     $ncp =+ count($ncp);

     $udp = DB::select('select * from users where president = ?', ['UDP']);
     $udp =+ count($udp);

     $upp = DB::select('select * from users where president = ?', ['UPP']);
     $upp =+ count($upp);

     $hdp = DB::select('select * from users where president = ?', ['HDP']);
     $hdp =+ count($hdp);

     $ppa = DB::select('select * from users where president = ?', ['PPA']);
     $ppa =+ count($ppa);

     $apda = DB::select('select * from users where favparty = ?', ['APDA']);
     $apda =+ count($apda);


    	//pie chart- votes by party chart
 $piePresidentVote = Charts::create('pie', 'highcharts')
           
            // Setup the chart settings
            ->title("president Votes according to party")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(1000, 500) // Width x Height
            // This defines a preset of colors already done:)
            ->template("material")
            // You could always set them manually
            ->colors(['#2196F3', '#F44336', '#4FC107', '#F3C111', '#4FC333', '#FF55111',
                '#219FFF', '#F44777', '#098765', '#123111',
                '#4FC11100', '#F3C100', '#777100'])
            // Setup the diferent datasets (this is a multi chart)
            ->values([$apc,$apga,$lp,$pdp,$hdp,$upp,$acpn,$udp,$ncp,$adc,$kp,$ad,$aa,$ppa, $apda])
            
            // Setup what the values mean
            ->labels(['APC', 'APGA', 'LP', 'PDP', 'HDP', 'UPP', 'ACPN', 'UDP', 'NCP',
                'ADC', 'KP', 'AD', 'AA', 'PPA', 'APDA']);

            return $piePresidentVote;

	}







}
