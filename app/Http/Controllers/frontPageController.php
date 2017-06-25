<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Charts;


class frontPageController extends Controller
{
    public function getFrontPresidentPie(){
    	//$data = DB::

    //retrieve parties
    $apc = DB::select('select * from users where president = ?', ['APC']);
    $apc =+ count($apc);

    $pdp = DB::select('select * from users where president = ?', ['PDP']);
     $pdp =+count($pdp);

    $lp = DB::select('select * from users where president = ?', ['LP']);
     $lp =+ count($lp);

    $apga = DB::select('select * from users where president = ?', ['APGA']);
     $apga =+ count($apga);

     $acpn = DB::select('select * from users where favparty = ?', ['ACPN']);
     $acpn =+ count($acpn);

     $aa = DB::select('select * from users where favparty = ?', ['AA']);
     $aa =+ count($apga);

     $ad = DB::select('select * from users where favparty = ?', ['AD']);
     $ad =+ count($apga);

     $kp = DB::select('select * from users where favparty = ?', ['KP']);
     $kp =+ count($kp);

     $adc = DB::select('select * from users where favparty = ?', ['ADC']);
     $adc =+ count($apga);

     $ncp = DB::select('select * from users where favparty = ?', ['NCP']);
     $ncp =+ count($ncp);

     $udp = DB::select('select * from users where favparty = ?', ['UDP']);
     $udp =+ count($udp);

     $upp = DB::select('select * from users where favparty = ?', ['UPP']);
     $upp =+ count($upp);

     $hdp = DB::select('select * from users where favparty = ?', ['HDP']);
     $hdp =+ count($hdp);

     $ppa = DB::select('select * from users where favparty = ?', ['PPA']);
     $ppa =+ count($ppa);




    	//pie chart- votes by party
             $partyPie = Charts::create('donut', 'highcharts')

            // Setup the chart settings
            ->title("Mocked presidential Votes according to party")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(0, 300) // Width x Height
            // This defines a preset of colors already done:)
            
            // You could always set them manually
            ->colors(['#2196F3', '#F44336', '#4FC107', '#F3C111'])
            // Setup the diferent datasets (this is a multi chart)
            ->values([$apc,$apga,$lp,$pdp,$hdp,$upp,$acpn,$udp,$ncp,$adc,$kp,$ad,$aa,$ppa])
            
            // Setup what the values mean
            ->labels(['APC', 'APGA', 'LP', 'PDP', 'HDP', 'UPP', 'ACPN', 'UDP',
     'NCP', 'ADC', 'KP', 'AD', 'AA', 'PPA']);

           // $pie = collect(['partyPie' => 'partyPie']);


        return $partyPie;
    }



    public function getFrontPresidentStatePie(){
    	//$data = DB::

    //retrieve parties
    $abia = DB::select('select * from users where prestate = ?', ['Abia']);
    $abia =+ count($abia);

    $lagos = DB::select('select * from users where prestate = ?', ['Lagos']);
     $lagos =+count($lagos);

    $adamawa = DB::select('select * from users where prestate = ?', ['Adamawa']);
     $adamawa =+ count($adamawa);

    $akwaibom = DB::select('select * from users where prestate = ?', ['Akwa Ibom']);
     $akwaibom =+ count($akwaibom);

     $enugu = DB::select('select * from users where prestate = ?', ['Enugu']);
     $enugu =+ count($enugu);

     $zamfara = DB::select('select * from users where prestate = ?', ['Zamfara']);
     $zamfara =+ count($zamfara);

     $yobe = DB::select('select * from users where prestate = ?', ['Yobe']);
     $yobe =+ count($yobe);

     $taraba = DB::select('select * from users where prestate = ?', ['Taraba']);
     $taraba =+ count($taraba);

     $imo = DB::select('select * from users where prestate = ?', ['Imo']);
     $imo =+ count($imo);


    	//pie chart- votes by party
             $statePie = Charts::create('donut', 'highcharts')

            // Setup the chart settings
            ->title("Mocked presidential Votes according to States")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(0, 400) // Width x Height
            // This defines a preset of colors already done:)
            
            // You could always set them manually
            ->colors(['#2196F3', '#F44336', '#4FC107', '#F3C111', '#458333', '#F50011', '#F30000', '#F39110', '#F3C444'])
            // Setup the diferent datasets (this is a multi chart)
            ->values([$abia, $adamawa, $akwaibom, $enugu, $imo, $lagos, $taraba, $yobe, $zamfara])
            
            // Setup what the values mean
            ->labels(['Abia', 'Adamawa', 'Akwa Ibom', 'Enugu', 'Imo', 'Lagos', 'Taraba', 'Yobe', 'Zamfara']);

           // $pie = collect(['partyPie' => 'partyPie']);


        return $statePie;
    }

 public function getFrontFavPartyLine(){
//retrieve parties
    $apc = DB::select('select * from users where favparty = ?', ['APC']);
    $apc =+ count($apc);

    $pdp = DB::select('select * from users where favparty = ?', ['PDP']);
     $pdp =+count($pdp);

    $lp = DB::select('select * from users where favparty = ?', ['LP']);
     $lp =+ count($lp);

    $apga = DB::select('select * from users where favparty = ?', ['APGA']);
     $apga =+ count($apga);

     $acpn = DB::select('select * from users where favparty = ?', ['ACPN']);
     $acpn =+ count($acpn);

     $aa = DB::select('select * from users where favparty = ?', ['AA']);
     $aa =+ count($apga);

     $ad = DB::select('select * from users where favparty = ?', ['AD']);
     $ad =+ count($apga);

     $kp = DB::select('select * from users where favparty = ?', ['KP']);
     $kp =+ count($kp);

     $adc = DB::select('select * from users where favparty = ?', ['ADC']);
     $adc =+ count($apga);

     $ncp = DB::select('select * from users where favparty = ?', ['NCP']);
     $ncp =+ count($ncp);

     $udp = DB::select('select * from users where favparty = ?', ['UDP']);
     $udp =+ count($udp);

     $upp = DB::select('select * from users where favparty = ?', ['UPP']);
     $upp =+ count($upp);

     $hdp = DB::select('select * from users where favparty = ?', ['HDP']);
     $hdp =+ count($hdp);

     $ppa = DB::select('select * from users where favparty = ?', ['PPA']);
     $ppa =+ count($ppa);

     $favPartyLine = Charts::create('area', 'highcharts')
     ->elementLabel('population')
     ->title("Favourity Party")
    ->colors(['#ff0000', '#00ff00', '#0000ff', '#045fff', '#ff0000', '#00ff00', '#0000ff', '#045fff',
    	'#ff0000', '#00ff00', '#0000ff', '#045fff', '#0000ff', '#045fff'])
    ->labels(['APC', 'APGA', 'LP', 'PDP', 'HDP', 'UPP', 'ACPN', 'UDP',
     'NCP', 'ADC', 'KP', 'AD', 'AA', 'PPA'])
    ->values([$apc,$apga,$lp,$pdp,$hdp,$upp,$acpn,$udp,$ncp,$adc,$kp,$ad,$aa,$ppa]);

 return $favPartyLine;
 }

}
