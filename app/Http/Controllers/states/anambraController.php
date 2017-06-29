<?php

namespace App\Http\Controllers\states;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Charts;
use Carbon\Carbon;
use App\User;

class anambraController extends Controller
{

	//get all users registered as resident under anambra
	public function allAnambraResident(){
    	

    	$allAnambra2 = DB::select('select * from users where resident = ?', ['Anambra']);
    	$allAnambra2 =+ count($allAnambra2);

    	return $allAnambra2;
    	
    }

//get all users registered as origin under anambra
    public function allAnambraOrigin(){
        $allAnambra1 = DB::select('select * from users where origin = ?', ['Anambra']);
        $allAnambra1 =+ count($allAnambra1);

        

        return $allAnambra1;
       
    }

    //get all users registered under anambra
    public function allRegisterAnambra(){
       
        return $allAnambraResident() + $allAnambraOrigin();
    }

    //get all votes
    public function allAnambraVotes(){
    	$allAnambraGov = DB::select('select * from users where govstate = ?', ['Anambra']);
    	$allAnambraGov =+ count($allAnambraGov);

    	return $allAnambraGov;
    }


    //retrieve votes according to party
    public function anambraVoteParty(){
    	 
    	 $anambraGovApc = DB::select('select governor,govstate from users where governor = ? and govstate = ?', ['APC', 'Anambra']); 
    	 $anambraGovApc =+ count($anambraGovApc);   

    	 $anambraGovPdp = DB::select('select governor,govstate from users where governor = ? and govstate = ?', ['PDP', 'Anambra']);
    	 $anambraGovPdp =+ count($anambraGovPdp);

    	 $anambraGovApga = DB::select('select governor,govstate from users where governor = ? and govstate = ?', ['APGA', 'Anambra']);
    	 $anambraGovApga =+ count($anambraGovApga);

    	 $anambraGovLp = DB::select('select governor,govstate from users where governor = ? and govstate = ?', ['LP', 'Anambra']);
    	 $anambraGovLp =+ count($anambraGovLp);

         $anambraGovPpa = DB::select('select governor,govstate from users where governor = ? and govstate = ?', ['PPA', 'Anambra']);
         $anambraGovPpa =+ count($anambraGovPpa);

         $anambraGovUpp = DB::select('select governor,govstate from users where governor = ? and govstate = ?', ['UPP', 'Anambra']);
         $anambraGovUpp =+ count($anambraGovUpp);

         //bar chart- anambra gov votes by party chart
 $anambraChart1 = Charts::create('bar', 'highcharts')
           
            
            ->title("Votes according to party in Abia State")
            ->dimensions(0, 400) // Width x Height
            ->template("material")
            // You could always set them manually
            ->colors(['#2196F3', '#F44336', '#4FC107', '#F3C111', '#4FC1555', '#F3C771'])
            // Setup the diferent datasets (this is a multi chart)
            ->values([$anambraGovApc, $anambraGovPdp, $anambraGovApga, $anambraGovLp, $anambraGovPpa, $anambraGovUpp])
            
            // Setup what the values mean
            ->labels(['APC', 'PDP', 'APGA', 'LP', 'PPA', 'UPP']);

            

            return $anambraChart1;
    }

 
public function anambraVoteLGA(){

    $aguataAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Aguata',  'APC']);
    $aguataPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Aguata', 'PDP']);
    $aguataApga = DB::select('select * from users where govlga = ? and governor = ?', ['Aguata', 'APGA']);
    $aguataLp = DB::select('select * from users where govlga = ? and governor = ?', ['Aguata', 'LP']);
    $aguataUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Aguata', 'UPP']);
    $aguataPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Aguata', 'PPA']);


    $anambraEastAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Anambra East', 'APC']);
    $anambraEastPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Anambra East', 'PDP']);
    $anambraEastApga = DB::select('select * from users where govlga = ? and governor = ?', ['Anambra East', 'APGA']);
    $anambraEastLp = DB::select('select * from users where govlga = ? and governor = ?', ['Anambra East', 'LP']);
    $anambraEastUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Anambra East', 'UPP']);
    $anambraEastPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Anambra East', 'PPA']);


    $anambraWestAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Anambra West', 'APC']);
    $anambraWestPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Anambra West', 'PDP']);
    $anambraWestApga = DB::select('select * from users where govlga = ? and governor = ?', ['Anambra West', 'APGA']);
    $anambraWestLp = DB::select('select * from users where govlga = ? and governor = ?', ['Anambra West', 'LP']);
    $anambraWestUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Anambra West', 'UPP']);
    $anambraWestPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Anambra West', 'PPA']);

     $anaochaAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Anaocha', 'APC']);
    $anaochaPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Anaocha', 'PDP']);
    $anaochaApga = DB::select('select * from users where govlga = ? and governor = ?', ['Anaocha', 'APGA']);
    $anaochaLp = DB::select('select * from users where govlga = ? and governor = ?', ['Anaocha', 'LP']);
    $anaochaUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Anaocha', 'UPP']);
    $anaochaPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Anaocha', 'PPA']);

     $awkaNorthAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Awka North', 'APC']);
    $awkaNorthPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Awka North', 'PDP']);
    $awkaNorthApga = DB::select('select * from users where govlga = ? and governor = ?', ['Awka North', 'APGA']);
    $awkaNorthLp = DB::select('select * from users where govlga = ? and governor = ?', ['Awka North', 'LP']);
    $awkaNorthUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Awka North', 'UPP']);
    $awkaNorthPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Awka North', 'PPA']);

     $awkaSouthAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Awka South', 'APC']);
    $awkaSouthPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Awka South', 'PDP']);
    $awkaSouthApga = DB::select('select * from users where govlga = ? and governor = ?', ['Awka South', 'APGA']);
    $awkaSouthLp = DB::select('select * from users where govlga = ? and governor = ?', ['Awka South', 'LP']);
    $awkaSouthUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Awka South', 'UPP']);
    $awkaSouthPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Awka South', 'PPA']);


        $ayamelumAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Ayamelum', 'APC']);
    $ayamelumPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Ayamelum', 'PDP']);
    $ayamelumApga = DB::select('select * from users where govlga = ? and governor = ?', ['Ayamelum', 'APGA']);
    $ayamelumLp = DB::select('select * from users where govlga = ? and governor = ?', ['Ayamelum', 'LP']);
    $ayamelumUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Ayamelum', 'UPP']);
    $ayamelumPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Ayamelum', 'PPA']);


        $dunukofiaAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Dunukofia', 'APC']);
    $dunukofiaPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Dunukofia', 'PDP']);
    $dunukofiaApga = DB::select('select * from users where govlga = ? and governor = ?', ['Dunukofia', 'APGA']);
    $dunukofiaLp = DB::select('select * from users where govlga = ? and governor = ?', ['Dunukofia', 'LP']);
    $dunukofiaUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Dunukofia', 'UPP']);
    $dunukofiaPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Dunukofia', 'PPA']);

        $ekwusigoAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Ekwusigo', 'APC']);
    $ekwusigoPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Ekwusigo', 'PDP']);
    $ekwusigoApga = DB::select('select * from users where govlga = ? and governor = ?', ['Ekwusigo', 'APGA']);
    $ekwusigoLp = DB::select('select * from users where govlga = ? and governor = ?', ['Ekwusigo', 'LP']);
    $ekwusigoUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Ekwusigo', 'UPP']);
    $ekwusigoPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Ekwusigo', 'PPA']);

     $idemiliNorthAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Idemili North', 'APC']);
    $idemiliNorthPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Idemili North', 'PDP']);
    $idemiliNorthApga = DB::select('select * from users where govlga = ? and governor = ?', ['Idemili North', 'APGA']);
    $idemiliNorthLp = DB::select('select * from users where govlga = ? and governor = ?', ['Idemili North', 'LP']);
    $idemiliNorthUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Idemili North', 'UPP']);
    $idemiliNorthPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Idemili North', 'PPA']);

     $idemiliSouthAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Idemili South', 'APC']);
    $idemiliSouthPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Idemili South', 'PDP']);
    $idemiliSouthApga = DB::select('select * from users where govlga = ? and governor = ?', ['Idemili South', 'APGA']);
    $idemiliSouthLp = DB::select('select * from users where govlga = ? and governor = ?', ['Idemili South', 'LP']);
    $idemiliSouthUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Idemili South', 'UPP']);
    $idemiliSouthPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Idemili South', 'PPA']);

     $ihialaAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Ihiala', 'APC']);
    $ihialaPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Ihiala', 'PDP']);
    $ihialaApga = DB::select('select * from users where govlga = ? and governor = ?', ['Ihiala', 'APGA']);
    $ihialaLp = DB::select('select * from users where govlga = ? and governor = ?', ['Ihiala', 'LP']);
    $ihialaUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Ihiala', 'UPP']);
    $ihialaPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Ihiala', 'PPA']);

     $njikokaAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Njikoka', 'APC']);
    $njikokaPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Njikoka', 'PDP']);
    $njikokaApga = DB::select('select * from users where govlga = ? and governor = ?', ['Njikoka', 'APGA']);
    $njikokaLp = DB::select('select * from users where govlga = ? and governor = ?', ['Njikoka', 'LP']);
    $njikokaUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Njikoka', 'UPP']);
    $njikokaPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Njikoka', 'PPA']);

     $nnewiNorthAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Nnewi North', 'APC']);
    $nnewiNorthPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Nnewi North', 'PDP']);
    $nnewiNorthApga = DB::select('select * from users where govlga = ? and governor = ?', ['Nnewi North', 'APGA']);
    $nnewiNorthLp = DB::select('select * from users where govlga = ? and governor = ?', ['Nnewi North', 'LP']);
    $nnewiNorthUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Nnewi North', 'UPP']);
    $nnewiNorthPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Nnewi North', 'PPA']);

    $nnewiSouthAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Nnewi South', 'APC']);
    $nnewiSouthPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Nnewi South', 'PDP']);
    $nnewiSouthApga = DB::select('select * from users where govlga = ? and governor = ?', ['Nnewi South', 'APGA']);
    $nnewiSouthLp = DB::select('select * from users where govlga = ? and governor = ?', ['Nnewi South', 'LP']);
    $nnewiSouthUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Nnewi South', 'UPP']);
    $nnewiSouthPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Nnewi South', 'PPA']);

    $ogbaruAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Ogbaru', 'APC']);
    $ogbaruPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Ogbaru', 'PDP']);
    $ogbaruApga = DB::select('select * from users where govlga = ? and governor = ?', ['Ogbaru', 'APGA']);
    $ogbaruLp = DB::select('select * from users where govlga = ? and governor = ?', ['Ogbaru', 'LP']);
    $ogbaruUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Ogbaru', 'UPP']);
    $ogbaruPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Ogbaru', 'PPA']);

    $onitshaNorthAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Onitsha North', 'APC']);
    $onitshaNorthPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Onitsha North', 'PDP']);
    $onitshaNorthApga = DB::select('select * from users where govlga = ? and governor = ?', ['Onitsha North', 'APGA']);
    $onitshaNorthLp = DB::select('select * from users where govlga = ? and governor = ?', ['Onitsha North', 'LP']);
    $onitshaNorthUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Onitsha North', 'UPP']);
    $onitshaNorthPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Onitsha North', 'PPA']);

    $onitshaSouthAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Onitsha South', 'APC']);
    $onitshaSouthPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Onitsha South', 'PDP']);
    $onitshaSouthApga = DB::select('select * from users where govlga = ? and governor = ?', ['Onitsha South', 'APGA']);
    $onitshaSouthLp = DB::select('select * from users where govlga = ? and governor = ?', ['Onitsha South', 'LP']);
    $onitshaSouthUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Onitsha South', 'UPP']);
    $onitshaSouthPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Onitsha South', 'PPA']);

    $orumbaNorthAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Orumba North', 'APC']);
    $orumbaNorthPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Orumba North', 'PDP']);
    $orumbaNorthApga = DB::select('select * from users where govlga = ? and governor = ?', ['Orumba North', 'APGA']);
    $orumbaNorthLp = DB::select('select * from users where govlga = ? and governor = ?', ['Orumba North', 'LP']);
    $orumbaNorthUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Orumba North', 'UPP']);
    $orumbaNorthPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Orumba North', 'PPA']);

    $orumbaSouthAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Orumba South', 'APC']);
    $orumbaSouthPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Orumba South', 'PDP']);
    $orumbaSouthApga = DB::select('select * from users where govlga = ? and governor = ?', ['Orumba South', 'APGA']);
    $orumbaSouthLp = DB::select('select * from users where govlga = ? and governor = ?', ['Orumba South', 'LP']);
    $orumbaSouthUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Orumba South', 'UPP']);
    $orumbaSouthPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Orumba South', 'PPA']);

    $oyiAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Oyi', 'APC']);
    $oyiPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Oyi', 'PDP']);
    $oyiApga = DB::select('select * from users where govlga = ? and governor = ?', ['Oyi', 'APGA']);
    $oyiLp = DB::select('select * from users where govlga = ? and governor = ?', ['Oyi', 'LP']);
    $oyiUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Oyi', 'UPP']);
    $oyiPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Oyi', 'PPA']);


    //bar chart - party votes in Anambra LGAs
            $anambraLgaParty = Charts::multi('bar', 'highcharts')
            ->elementLabel(' ')
            // Setup the chart settings
            ->title("Gubernatorial party votes in Anambra LGAs")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(0, 400) // Width x Height

            // This defines a preset of colors already done:)
            ->template("material")
            // You could always set them manually
            ->colors(['#2196F3', '#F44336', '#FFC107', '#F0C545', '#55C107',
                '#219954'])
            // Setup the diferent datasets (this is a multi chart)
          

            ->dataset('APC', [$aguataAPC,$anambraEastAPC,$anambraWestAPC,$anaochaAPC,$awkaNorthAPC,$awkaSouthAPC,$ayamelumAPC,$dunukofiaAPC,$ekwusigoAPC,$idemiliNorthAPC,$idemiliSouthAPC,$ihialaAPC,$njikokaAPC,$nnewiNorthAPC,$nnewiSouthAPC,$ogbaruAPC,$onitshaNorthAPC,$onitshaSouthAPC,$orumbaNorthAPC,$orumbaNorthAPC,$oyiAPC])
            ->dataset('APGA', [$aguataApga,$anambraEastApga,$anambraWestApga,$anaochaApga,$awkaNorthApga,$awkaSouthApga,$ayamelumApga,$dunukofiaApga,$ekwusigoApga,$idemiliNorthApga,$idemiliSouthApga,$ihialaApga,$njikokaApga,$nnewiNorthApga,$nnewiSouthApga,$ogbaruApga,$onitshaNorthApga,$onitshaSouthApga,$orumbaNorthApga,$orumbaSouthApga,$oyiApga])
            ->dataset('LP', [$aguataLp,$anambraEastLp,$anambraWestLp,$anaochaLp,$awkaNorthLp,$awkaSouthLp,$ayamelumLp,$dunukofiaLp,$ekwusigoLp,$idemiliNorthLp,$idemiliSouthLp,$ihialaLp,$njikokaLp,$nnewiNorthLp,$nnewiSouthLp,$ogbaruLp,$onitshaNorthLp,$onitshaSouthLp,$orumbaNorthLp,$orumbaSouthLp,$oyiLp])
            ->dataset('PDP', [$aguataPdp,$anambraEastPdp,$anambraWestPdp,$anaochaPdp,$awkaNorthPdp,$awkaSouthPdp,$ayamelumPdp,$dunukofiaPdp,$ekwusigoPdp,$idemiliNorthPdp,$idemiliSouthPdp,$ihialaPdp,$njikokaPdp,$nnewiNorthPdp,$nnewiSouthPdp,$ogbaruPdp,$onitshaNorthPdp,$onitshaSouthPdp,$orumbaNorthPdp,$orumbaSouthPdp,$oyiPdp])
            ->dataset('UPP', [$aguataUpp,$anambraEastUpp,$anambraWestUpp,$anaochaUpp,$awkaNorthUpp,$awkaSouthUpp,$ayamelumUpp,$dunukofiaUpp,$ekwusigoUpp,$idemiliNorthUpp,$idemiliSouthUpp,$ihialaUpp,$njikokaUpp,$nnewiNorthUpp,$nnewiSouthUpp,$ogbaruUpp,$onitshaNorthUpp,$onitshaSouthUpp,$orumbaNorthUpp,$orumbaSouthUpp,$oyiUpp])
            ->dataset('PPA', [$aguataPpa,$anambraEastPpa,$anambraWestPpa,$anaochaPpa,$awkaNorthPpa,$awkaSouthPpa,$ayamelumPpa,$dunukofiaPpa,$ekwusigoPpa,$idemiliNorthPpa,$idemiliSouthPpa,$ihialaPpa,$njikokaPpa,$nnewiNorthPpa,$nnewiSouthPpa,$ogbaruPpa,$onitshaNorthPpa,$onitshaSouthPpa,$orumbaNorthPpa,$orumbaSouthPpa,$oyiPpa])
            ->labels(['Aguata','Anambra East','Anambra West','Anaocha','Awka North','Awka South',
                'Awka South','Ayamelum','Dunukofia','Ekwusigo','Idemili North',
                'Idemili South', 'Ihiala', 'Njikoka', 'Nnewi North','Nnewi South','Ogbaru',
                'Onitsha North', 'Onitsha South', 'Orumba North','Orumba South','Oyi']);

            return $anambraLgaParty;
 }

 public function anambraVoteAge(){
    //retrieve age data
 $age18_30 = User::whereYear('dod','<', '1999')
 ->whereYear('dod', '>', '1987')
 ->where('govstate', 'Anambra')->count();

 $age31_43 = User::whereYear('dod','<', '1986')
 ->whereYear('dod', '>', '1974')
 ->where('govstate', 'Anambra')->count();

 $age44_56 = User::whereYear('dod','<', '1973')
 ->whereYear('dod', '>', '1961')
 ->where('govstate', 'Anambra')->count();

 $age57_69 = User::whereYear('dod','<', '1960')
 ->whereYear('dod', '>', '1948')
 ->where('govstate', 'Anambra')->count();

 $age70_82 = User::whereYear('dod','<', '1947')
 ->whereYear('dod', '>', '1935')
 ->where('govstate', 'Anambra')->count();

 $age83 = User::whereYear('dod','<=', '1934')
 ->where('govstate', 'Anambra')->count();


 //bar chart- votes by age
 $anambraAge = Charts::create('bar', 'highcharts')
           
            // Setup the chart settings
            ->title("Votes according to Age")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(0, 400) // Width x Height
            // This defines a preset of colors already done:)
             ->elementLabel(' ')
            ->template("material")
            // You could always set them manually
            ->colors(['#2196F3', '#F44336', '#4FC107','#F3C111', '#F3C444', '#333111'])
            // Setup the diferent datasets (this is a multi chart)
            ->values([$age18_30, $age31_43, $age44_56, $age57_69, $age70_82, $age83])
            
            // Setup what the values mean
            ->labels(['18 - 30yrs', '31 - 43yrs', '44 - 56yrs', '57 - 69yrs', '70 - 82yrs', '83yrs above']);
 
            return $anambraAge;
 }


}

 
