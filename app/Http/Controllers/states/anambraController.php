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
     $aguataAPC =+ count($aguataAPC);
    
    $aguataPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Aguata', 'PDP']);
    $aguataPdp =+ count($aguataPdp);
    
    $aguataApga = DB::select('select * from users where govlga = ? and governor = ?', ['Aguata', 'APGA']);
   $aguataApga =+ count($aguataApga);
   
    $aguataLp = DB::select('select * from users where govlga = ? and governor = ?', ['Aguata', 'LP']);
   $aguataLp =+ count($aguataLp);
    
    $aguataUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Aguata', 'UPP']);
    $aguataUpp =+ count($aguataUpp);
   
    $aguataPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Aguata', 'PPA']);
    $aguataPpa =+ count($aguataPpa);


    $anambraEastAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Anambra East', 'APC']);
    $anambraEastAPC =+ count($anambraEastAPC);

    $anambraEastPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Anambra East', 'PDP']);
    $anambraEastPdp =+ count($anambraEastPdp);

    $anambraEastApga = DB::select('select * from users where govlga = ? and governor = ?', ['Anambra East', 'APGA']);
    $anambraEastApga =+ count($anambraEastApga);

    $anambraEastLp = DB::select('select * from users where govlga = ? and governor = ?', ['Anambra East', 'LP']);
    $anambraEastLp =+ count($anambraEastLp);

    $anambraEastUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Anambra East', 'UPP']);
    $anambraEastUpp =+ count($anambraEastUpp);

    $anambraEastPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Anambra East', 'PPA']);
    $anambraEastPpa =+ count($anambraEastPpa);



    $anambraWestAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Anambra West', 'APC']);
    $anambraWestAPC =+ count($anambraWestAPC);

    $anambraWestPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Anambra West', 'PDP']);
    $anambraWestPdp =+ count($anambraWestPdp);

    $anambraWestApga = DB::select('select * from users where govlga = ? and governor = ?', ['Anambra West', 'APGA']);
    $anambraWestApga =+ count($anambraWestApga);

    $anambraWestLp = DB::select('select * from users where govlga = ? and governor = ?', ['Anambra West', 'LP']);
    $anambraWestLp =+ count($anambraWestLp);

    $anambraWestUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Anambra West', 'UPP']);
    $anambraWestUpp =+ count($anambraWestUpp);

    $anambraWestPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Anambra West', 'PPA']);
    $anambraWestPpa =+ count($anambraWestPpa);



     $anaochaAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Anaocha', 'APC']);
    $anaochaAPC =+ count($anaochaAPC);

    $anaochaPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Anaocha', 'PDP']);
     $anaochaPdp =+ count( $anaochaPdp);

    $anaochaApga = DB::select('select * from users where govlga = ? and governor = ?', ['Anaocha', 'APGA']);
    $anaochaApga =+ count($anaochaApga);

    $anaochaLp = DB::select('select * from users where govlga = ? and governor = ?', ['Anaocha', 'LP']);
    $anaochaLp =+ count($anaochaLp);

    $anaochaUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Anaocha', 'UPP']);
    $anaochaUpp=+ count($anaochaUpp);

    $anaochaPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Anaocha', 'PPA']);
    $anaochaPpa =+ count($anaochaPpa);



     $awkaNorthAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Awka North', 'APC']);
    $awkaNorthAPC =+ count($awkaNorthAPC);

    $awkaNorthPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Awka North', 'PDP']);
    $awkaNorthPdp =+ count($awkaNorthPdp);

    $awkaNorthApga = DB::select('select * from users where govlga = ? and governor = ?', ['Awka North', 'APGA']);
    $awkaNorthApga =+ count($awkaNorthApga);

    $awkaNorthLp = DB::select('select * from users where govlga = ? and governor = ?', ['Awka North', 'LP']);
    $awkaNorthLp =+ count($awkaNorthLp);

    $awkaNorthUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Awka North', 'UPP']);
    $awkaNorthUpp =+ count($awkaNorthUpp);

    $awkaNorthPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Awka North', 'PPA']);
    $awkaNorthPpa =+ count($awkaNorthPpa);


     $awkaSouthAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Awka South', 'APC']);
    $awkaSouthAPC =+ count( $awkaSouthAPC);

    $awkaSouthPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Awka South', 'PDP']);
   $awkaSouthPdp =+ count($awkaSouthPdp);

    $awkaSouthApga = DB::select('select * from users where govlga = ? and governor = ?', ['Awka South', 'APGA']);
    $awkaSouthApga =+ count($awkaSouthApga);

    $awkaSouthLp = DB::select('select * from users where govlga = ? and governor = ?', ['Awka South', 'LP']);
    $awkaSouthLp =+ count($awkaSouthLp);

    $awkaSouthUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Awka South', 'UPP']);
    $awkaSouthUpp =+ count($awkaSouthUpp);

    $awkaSouthPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Awka South', 'PPA']);
    $awkaSouthPpa =+ count($awkaSouthPpa);



        $ayamelumAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Ayamelum', 'APC']);
    $ayamelumAPC =+ count($ayamelumAPC);

    $ayamelumAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Ayamelum', 'PDP']);
    $ayamelumAPC =+ count($ayamelumAPC);

    $ayamelumApga = DB::select('select * from users where govlga = ? and governor = ?', ['Ayamelum', 'APGA']);
    $ayamelumApga =+ count($ayamelumApga);

    $ayamelumLp = DB::select('select * from users where govlga = ? and governor = ?', ['Ayamelum', 'LP']);
   $ayamelumLp =+ count($ayamelumLp);

    $ayamelumUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Ayamelum', 'UPP']);
    $ayamelumUpp =+ count($ayamelumUpp);

    $ayamelumPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Ayamelum', 'PPA']);
    $ayamelumPpa =+ count($ayamelumPpa);



        $dunukofiaAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Dunukofia', 'APC']);
    $dunukofiaAPC =+ count($dunukofiaAPC);

    $dunukofiaPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Dunukofia', 'PDP']);
    $dunukofiaPdp =+ count($dunukofiaPdp);

    $dunukofiaApga = DB::select('select * from users where govlga = ? and governor = ?', ['Dunukofia', 'APGA']);
    $dunukofiaApga =+ count($dunukofiaApga);

    $dunukofiaLp = DB::select('select * from users where govlga = ? and governor = ?', ['Dunukofia', 'LP']);
   $dunukofiaLp =+ count($dunukofiaLp);

    $dunukofiaUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Dunukofia', 'UPP']);
    $dunukofiaUpp =+ count($dunukofiaUpp);

    $dunukofiaPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Dunukofia', 'PPA']);
    $dunukofiaPpa =+ count($dunukofiaPpa);



        $ekwusigoAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Ekwusigo', 'APC']);
     $ekwusigoAPC =+ count( $ekwusigoAPC);

    $ekwusigoPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Ekwusigo', 'PDP']);
    $ekwusigoPdp =+ count($ekwusigoPdp);

    $ekwusigoApga = DB::select('select * from users where govlga = ? and governor = ?', ['Ekwusigo', 'APGA']);
    $ekwusigoApga =+ count($ekwusigoApga);

    $ekwusigoLp = DB::select('select * from users where govlga = ? and governor = ?', ['Ekwusigo', 'LP']);
   $ekwusigoLp =+ count($ekwusigoLp);

    $ekwusigoUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Ekwusigo', 'UPP']);
   $ekwusigoUpp =+ count($ekwusigoUpp);

    $ekwusigoPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Ekwusigo', 'PPA']);
    $ekwusigoPpa =+ count($ekwusigoPpa);


     $idemiliNorthAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Idemili North', 'APC']);
     $idemiliNorthAPC =+ count($idemiliNorthAPC);

    $idemiliNorthPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Idemili North', 'PDP']);
     $idemiliNorthPdp =+ count($idemiliNorthPdp);

    $idemiliNorthApga = DB::select('select * from users where govlga = ? and governor = ?', ['Idemili North', 'APGA']);
     $idemiliNorthApga =+ count($idemiliNorthApga);

    $idemiliNorthLp = DB::select('select * from users where govlga = ? and governor = ?', ['Idemili North', 'LP']);
     $idemiliNorthLp=+ count($idemiliNorthLp);

    $idemiliNorthUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Idemili North', 'UPP']);
     $idemiliNorthUpp =+ count($idemiliNorthUpp);

    $idemiliNorthPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Idemili North', 'PPA']);
     $idemiliNorthPpa =+ count($idemiliNorthPpa);


     $idemiliSouthAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Idemili South', 'APC']);
    $idemiliSouthAPC =+ count($idemiliSouthAPC);

    $idemiliSouthPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Idemili South', 'PDP']);
    $idemiliSouthPdp =+ count($idemiliSouthPdp);

    $idemiliSouthApga = DB::select('select * from users where govlga = ? and governor = ?', ['Idemili South', 'APGA']);
    $idemiliSouthApga =+ count($idemiliSouthApga);

    $idemiliSouthLp = DB::select('select * from users where govlga = ? and governor = ?', ['Idemili South', 'LP']);
   $idemiliSouthLp=+ count($idemiliSouthLp);

    $idemiliSouthUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Idemili South', 'UPP']);
   $idemiliSouthUpp =+ count($idemiliSouthUpp);

    $idemiliSouthPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Idemili South', 'PPA']);
$idemiliSouthPpa =+ count($idemiliSouthPpa);


     $ihialaAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Ihiala', 'APC']);
    $ihialaAPC =+ count($ihialaAPC);

    $ihialaPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Ihiala', 'PDP']);
    $ihialaPdp =+ count($ihialaPdp);

    $ihialaApga = DB::select('select * from users where govlga = ? and governor = ?', ['Ihiala', 'APGA']);
    $ihialaApga =+ count($ihialaApga);

    $ihialaLp = DB::select('select * from users where govlga = ? and governor = ?', ['Ihiala', 'LP']);
    $ihialaLp =+ count($ihialaLp);

    $ihialaUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Ihiala', 'UPP']);
    $ihialaUpp =+ count($ihialaUpp);

    $ihialaPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Ihiala', 'PPA']);
$ihialaPpa =+ count($ihialaPpa);



     $njikokaAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Njikoka', 'APC']);
    $njikokaAPC =+ count($njikokaAPC);

    $njikokaPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Njikoka', 'PDP']);
    $njikokaPdp =+ count($njikokaPdp);

    $njikokaApga = DB::select('select * from users where govlga = ? and governor = ?', ['Njikoka', 'APGA']);
    $njikokaApga =+ count($njikokaApga);

    $njikokaLp = DB::select('select * from users where govlga = ? and governor = ?', ['Njikoka', 'LP']);
    $njikokaLp =+ count($njikokaLp);

    $njikokaUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Njikoka', 'UPP']);
    $njikokaUpp =+ count($njikokaUpp);

    $njikokaPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Njikoka', 'PPA']);
    $njikokaPpa =+ count($njikokaPpa);



     $nnewiNorthAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Nnewi North', 'APC']);
   $nnewiNorthAPC=+ count($nnewiNorthAPC);

   $nnewiNorthPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Nnewi North', 'PDP']);
   $nnewiNorthPdp =+ count($nnewiNorthPdp);

    $nnewiNorthApga = DB::select('select * from users where govlga = ? and governor = ?', ['Nnewi North', 'APGA']);
   $nnewiNorthApga =+ count($nnewiNorthApga);

    $nnewiNorthLp = DB::select('select * from users where govlga = ? and governor = ?', ['Nnewi North', 'LP']);
   $nnewiNorthLp =+ count($nnewiNorthLp);

    $nnewiNorthUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Nnewi North', 'UPP']);
   $nnewiNorthUpp =+ count($nnewiNorthUpp);

    $nnewiNorthPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Nnewi North', 'PPA']);
    $nnewiNorthPpa =+ count($nnewiNorthPpa);



    $nnewiSouthAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Nnewi South', 'APC']);
    $nnewiSouthAPC =+ count($nnewiSouthAPC);

    $nnewiSouthPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Nnewi South', 'PDP']);
    $nnewiSouthPdp =+ count($nnewiSouthPdp);

    $nnewiSouthApga = DB::select('select * from users where govlga = ? and governor = ?', ['Nnewi South', 'APGA']);
    $nnewiSouthApga =+ count($nnewiSouthApga);

    $nnewiSouthLp = DB::select('select * from users where govlga = ? and governor = ?', ['Nnewi South', 'LP']);
    $$nnewiSouthLp =+ count($nnewiSouthLp);

    $nnewiSouthUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Nnewi South', 'UPP']);
    $nnewiSouthUpp =+ count($nnewiSouthUpp);

    $nnewiSouthPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Nnewi South', 'PPA']);
    $nnewiSouthPpa =+ count($nnewiSouthPpa);


    $ogbaruAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Ogbaru', 'APC']);
    $ogbaruAPC =+ count($ogbaruAPC);

    $ogbaruPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Ogbaru', 'PDP']);
    $ogbaruPdp =+ count($ogbaruPdp);

    $ogbaruApga = DB::select('select * from users where govlga = ? and governor = ?', ['Ogbaru', 'APGA']);
    $ogbaruApga =+ count($ogbaruApga);

    $ogbaruLp = DB::select('select * from users where govlga = ? and governor = ?', ['Ogbaru', 'LP']);
    $ogbaruLp =+ count($ogbaruLp);

    $ogbaruUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Ogbaru', 'UPP']);
    $ogbaruUpp =+ count($ogbaruUpp);

    $ogbaruPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Ogbaru', 'PPA']);
    $ogbaruPpa =+ count($ogbaruPpa);


    $onitshaNorthAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Onitsha North', 'APC']);
    $onitshaNorthAPC =+ count($onitshaNorthAPC);

    $onitshaNorthPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Onitsha North', 'PDP']);
    $onitshaNorthPdp =+ count($onitshaNorthPdp);

    $onitshaNorthApga = DB::select('select * from users where govlga = ? and governor = ?', ['Onitsha North', 'APGA']);
    $onitshaNorthApga =+ count($onitshaNorthApga);

    $onitshaNorthLp = DB::select('select * from users where govlga = ? and governor = ?', ['Onitsha North', 'LP']);
    $onitshaNorthLp =+ count($onitshaNorthLp);

    $onitshaNorthUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Onitsha North', 'UPP']);
    $onitshaNorthUpp =+ count($onitshaNorthUpp);

    $onitshaNorthPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Onitsha North', 'PPA']);
$onitshaNorthPpa =+ count($onitshaNorthPpa);



    $onitshaSouthAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Onitsha South', 'APC']);
    $onitshaSouthAPC =+ count($onitshaSouthAPC);

    $onitshaSouthPdp = DB::select('select * from users where govlga = ? and governor = ?', ['Onitsha South', 'PDP']);
    $onitshaSouthPdp =+ count($onitshaSouthPdp);

    $onitshaSouthApga = DB::select('select * from users where govlga = ? and governor = ?', ['Onitsha South', 'APGA']);
    $onitshaSouthApga =+ count($onitshaSouthApga);

    $onitshaSouthLp = DB::select('select * from users where govlga = ? and governor = ?', ['Onitsha South', 'LP']);
    $onitshaSouthLp =+ count($onitshaSouthLp);

    $onitshaSouthUpp = DB::select('select * from users where govlga = ? and governor = ?', ['Onitsha South', 'UPP']);
    $onitshaSouthUpp =+ count($onitshaSouthUpp);

    $onitshaSouthPpa = DB::select('select * from users where govlga = ? and governor = ?', ['Onitsha South', 'PPA']);
    $onitshaSouthPpa =+ count($onitshaSouthPpa);


    
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

 
