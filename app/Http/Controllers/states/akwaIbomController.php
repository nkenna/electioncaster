<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Charts;
use Carbon\Carbon;
use App\User;

class akwaIbomController extends Controller
{
    
    public function getAllAkwaIbomVotes(){
        
         $allAkwaIbomVotes = DB::select('select * from users where govstate = ?', ['Akwa Ibom']);
    	 $allAkwaIbomVotes =+ count( $allAkwaIbomVotes);
         return $allAkwaIbomVotes;
    }
    
    public function getAllAkwaIbomResident(){
        $allAkwaIbomRes = DB::select('select resident from users where govstate = ?', ['Akwa Ibom']);
    	 $allAkwaIbomRes =+ count( $allAkwaIbomRes);
         return $allAkwaIbomRes;
    }
    
    public function getAllAkwaIbomOrigin(){
        $allAkwaIbomOri = DB::select('select origin from users where govstate = ?', ['Akwa Ibom']);
    	 $allAkwaIbomOri =+ count( $allAkwaIbomOri);
         return $allAkwaIbomOri;
    }
    
    public function getAllAkwaIbom(){
        
        return $allAkwaIbom = getAllAkwaIbomOrigin() + getAllAkwaIbomResident();
    }
    
    public function getVotesByAge(){
        
        
$age18_30 = User::whereYear('dod','<', '1999')
 ->whereYear('dod', '>', '1987')->where('govstate', '=', 'Akwa Ibom')->count();

 $age31_43 = User::whereYear('dod','<', '1986')
 ->whereYear('dod', '>', '1974')->where('govstate', '=', 'Akwa Ibom')->count();

 $age44_56 = User::whereYear('dod','<', '1973')
 ->whereYear('dod', '>', '1961')->where('govstate', '=', 'Akwa Ibom')->count();

 $age57_69 = User::whereYear('dod','<', '1960')
 ->whereYear('dod', '>', '1948')->where('govstate', '=', 'Akwa Ibom')->count();

 $age70_82 = User::whereYear('dod','<', '1947')
 ->whereYear('dod', '>', '1935')->where('govstate', '=', 'Akwa Ibom')->count();

 $age83 = User::whereYear('dod','<=', '1934')->where('govstate', '=', 'Akwa Ibom')->count();
 
//bar chart- votes by age
 $akwaIbomAge = Charts::create('bar', 'highcharts')
           
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

   
return $akwaIbomAge;
        
    }
    
    public function getVotesByOccupation(){
        $farmer = DB::select('select * from users where occupation = ? and govstate = ?', ['Farmer','Akwa Ibom']);
		$farmer =+ count($farmer);

		$civilServant = DB::select('select * from users where occupation = ? and govstate = ?', ['Civil Servant', 'Akwa Ibom']);
		$civilServant =+ count($civilServant);
                
                $student = DB::select('select * from users where occupation = ? and govstate = ?', ['Student', 'Adamawa']);
		$student =+ count($student);

		$publicServant = DB::select('select * from users where occupation = ? and govstate = ?', ['Public Servant', 'Akwa Ibom']);
		$publicServant = count($publicServant);

		$politician = DB::select('select * from users where occupation = ? and govstate = ?', ['Politician', 'Akwa Ibom']);
		$politician =+ count($politician);

		$business = DB::select('select * from users where occupation = ? and govstate = ?', ['Business', 'Akwa Ibom']);
		$business =+ count($business);

		$tradesman = DB::select('select * from users where occupation = ? and govstate = ?', ['Skilled', 'Akwa Ibom']);
		$tradesman =+ count($tradesman);

		$self = DB::select('select * from users where occupation and govstate = ?', ['Self Employed', 'Akwa Ibom']);
		$self=+ count($self);

		$trader = DB::select('select * from users where occupation and govstate = ?', ['Trader', 'Akwa Ibom']);
		$trader =+ count($trader);

		$teacher = DB::select('select * from users where occupation and govstate = ?', ['Teacher', 'Akwa Ibom']);
                $teacher =+ count($teacher);
                
                
                 //bar chart- votes by age
 $akwaIbomOccupation = Charts::create('bar', 'highcharts')
           
            // Setup the chart settings
            ->title("Votes distribution according to Occupation")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(0, 400) // Width x Height
            // This defines a preset of colors already done:)
             ->elementLabel(' ')
            ->template("material")
            // You could always set them manually
            ->colors(['#2196F3', '#F44336', '#4FC107','#F3C111', '#F3C444', '#333111','#F3C000', '#F88444', '#3FF111'])
            // Setup the diferent datasets (this is a multi chart)
            ->values([$student, $farmer, $business, $civilServant, $politician, $publicServant, $self, $teacher, $trader, $tradesman])
            
            // Setup what the values mean
            ->labels(['Student', 'Farmer', 'Business', 'Civil Servant', 'Politician', 'Public Servant', 'Self-Employed', 'Teacher/Lecturer', 'Trader', 'Skilled/Tradesman']);
 
            return $akwaIbomOccupation;
    }

  public function getAkwaIbomVotesBySex(){
            $male = DB::select('select * from users where gender = ? and govstate = ?', ['Male', 'Akwa Ibom']);
             $female = DB::select('select * from users where gender = ? and govstate = ?', ['Female', 'Akwa Ibom']);
             
        
              //bar chart- votes by age
 $akwaIbomGender = Charts::create('bar', 'highcharts')
           
            // Setup the chart settings
            ->title("Votes distribution according to Gender")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(0, 400) // Width x Height
            // This defines a preset of colors already done:)
             ->elementLabel(' ')
            ->template("material")
            // You could always set them manually
            ->colors(['#2196F3', '#F44336'])
            // Setup the diferent datasets (this is a multi chart)
            ->values([$male, $female])
            
            // Setup what the values mean
            ->labels(['Male', 'Female']);
 
            return $akwaIbomGender;
             
        }
    
    public function getVotesByParty(){
        
    }
    
    public function getVotesByLGA(){
        $abakAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Abak','APC']);              
    $abakAPC =+ count($abakAPC);

    $abakAA =  DB::select('select * from users where govlga = ? and governor = ?', ['Abak','AA']);              
    $abakAA =+ count($abakAA);

    $abakLP=  DB::select('select * from users where govlga = ? and governor = ?', ['Abak','LP']);              
    $abakLP =+ count($abakLP);

    $abakPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Abak','PDP']);              
    $abakPDP =+ count($abakPDP);

    




    
    
          $easternOboloAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Eastern Obolo','APC']);              
    $easternOboloAPC =+ count($easternOboloAPC);

    $easternOboloAA =  DB::select('select * from users where govlga = ? and governor = ?', ['Eastern Obolo','AA']);              
    $easternOboloAA =+ count($easternOboloAA);

    $easternOboloLP=  DB::select('select * from users where govlga = ? and governor = ?', ['Eastern Obolo','LP']);              
    $easternOboloLP =+ count($easternOboloLP);

    $easternOboloPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Eastern Obolo','PDP']);              
    $easternOboloPDP =+ count($easternOboloPDP);




    $eketAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Eket','APC']);              
    $eketAPC =+ count($eketAPC);

    $eketAA =  DB::select('select * from users where govlga = ? and governor = ?', ['Eket','AA']);              
    $eketAA =+ count($eketAA);

    $eketLP=  DB::select('select * from users where govlga = ? and governor = ?', ['Eket','LP']);              
    $eketLP =+ count($eketLP);

    $eketPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Eket','PDP']);              
    $eketPDP =+ count($eketPDP);




    
    
          $esitEketAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Esit Eket','APC']);              
    $esitEketAPC =+ count($esitEketAPC);

    $esitEketAA =  DB::select('select * from users where govlga = ? and governor = ?', ['Esit Eket','AA']);              
    $esitEketAA =+ count($esitEketAA);

    $esitEketLP=  DB::select('select * from users where govlga = ? and governor = ?', ['Esit Eket','LP']);              
    $esitEketLP =+ count($esitEketLP);

    $esitEketPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Esit Eket','PDP']);              
    $esitEketPDP =+ count($esitEketPDP);


    
          $essienUdimAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Essien Udim','APC']);              
    $essienUdimAPC =+ count($essienUdimAPC);

    $essienUdimAA =  DB::select('select * from users where govlga = ? and governor = ?', ['Essien Udim','AA']);              
    $essienUdimAA =+ count($essienUdimAA);

    $essienUdimLP=  DB::select('select * from users where govlga = ? and governor = ?', ['Essien Udim','LP']);              
    $essienUdimLP =+ count($essienUdimLP);

    $essienUdimPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Essien Udim','PDP']);              
    $essienUdimPDP =+ count($essienUdimPDP);



    
          $etimEkpoAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Etim Ekpo','APC']);              
    $etimEkpoAPC =+ count($etimEkpoAPC);

     $etimEkpoAA =  DB::select('select * from users where govlga = ? and governor = ?', ['Etim Ekpo','AA']);              
    $etimEkpoAA =+ count($etimEkpoAA);

    $etimEkpoLP=  DB::select('select * from users where govlga = ? and governor = ?', ['Etim Ekpo','LP']);              
    $etimEkpoLP =+ count($etimEkpoLP);

    $etimEkpoPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Etim Ekpo','PDP']);              
    $etimEkpoPDP =+ count($etimEkpoPDP);



    
          $etinanAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Etinan','APC']);              
    $etinanAPC =+ count($etinanAPC);

    $etinanAA =  DB::select('select * from users where govlga = ? and governor = ?', ['Etinan','AA']);              
    $etinanAA =+ count($etinanAA);

    $etinanLP=  DB::select('select * from users where govlga = ? and governor = ?', ['Etinan','LP']);              
    $etinanLP =+ count($etinanLP);

    $etinanPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Etinan','PDP']);              
    $etinanPDP =+ count($etinanPDP);



    
          $ibenoAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Ibeno','APC']);              
    $ibenoAPC =+ count($ibenoAPC);

    $ibenoAA =  DB::select('select * from users where govlga = ? and governor = ?', ['Ibeno','AA']);              
    $ibenoAA =+ count($ibenoAA);

    $ibenoLP=  DB::select('select * from users where govlga = ? and governor = ?', ['Ibeno','LP']);              
    $ibenoLP =+ count($ibenoLP);

    $ibenoPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Ibeno','PDP']);              
    $ibenoPDP =+ count($ibenoPDP);



    
          $ibesikpoAsutanAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Ibesikpo Asutan','APC']);              
    $ibesikpoAsutanAPC =+ count($ibesikpoAsutanAPC);

    $ibesikpoAsutanAA =  DB::select('select * from users where govlga = ? and governor = ?', ['Ibesikpo Asutan','AA']);              
    $ibesikpoAsutanAA =+ count($ibesikpoAsutanAA);

    $ibesikpoAsutanLP=  DB::select('select * from users where govlga = ? and governor = ?', ['Ibesikpo Asutan','LP']);              
    $ibesikpoAsutanLP =+ count($ibesikpoAsutanLP);

    $ibesikpoAsutanPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Ibesikpo Asutan','PDP']);              
    $ibesikpoAsutanPDP =+ count($ibesikpoAsutanPDP);



    
          $ibionoIbomAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Ibiono-Ibom','APC']);              
    $ibionoIbomAPC =+ count($ibionoIbomAPC);

    $ibionoIbomAA =  DB::select('select * from users where govlga = ? and governor = ?', ['Ibiono-Ibom','AA']);              
    $ibionoIbomAA =+ count($ibionoIbomAA);

    $ibionoIbomLP=  DB::select('select * from users where govlga = ? and governor = ?', ['Ibiono-Ibom','LP']);              
    $ibionoIbomLP =+ count($ibionoIbomLP);

    $ibionoIbomPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Ibiono-Ibom','PDP']);              
    $ibionoIbomPDP =+ count($ibionoIbomPDP);



    
          $ikaAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Ika','APC']);              
    $ikaAPC =+ count($ikaAPC);
    
    $ikaAA =  DB::select('select * from users where govlga = ? and governor = ?', ['Ika','AA']);              
    $ikaAA =+ count($ikaAA);

    $ikaLP=  DB::select('select * from users where govlga = ? and governor = ?', ['Ika','LP']);              
    $ikaLP =+ count($ikaLP);

    $ikaPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Ika','PDP']);              
    $ikaPDP =+ count($ikaPDP);



          $ikonoAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Ikono','APC']);              
    $ikonoAPC =+ count($ikonoAPC);

     $ikonoAA =  DB::select('select * from users where govlga = ? and governor = ?', ['Ikono','AA']);              
    $ikonoAA =+ count($ikonoAA);

    $ikonoLP=  DB::select('select * from users where govlga = ? and governor = ?', ['Ikono','LP']);              
    $ikonoLP =+ count($ikonoLP);

    $ikonoPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Ikono','PDP']);              
    $ikonoPDP =+ count($ikonoPDP);



    
          $ikotAbasiAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Ikot Abasi','APC']);              
    $ikotAbasiAPC =+ count($ikotAbasiAPC);

     $ikotAbasiAA =  DB::select('select * from users where govlga = ? and governor = ?', ['Ikot Abasi','AA']);              
    $ikotAbasiAA =+ count($ikotAbasiAA);

    $ikotAbasiLP=  DB::select('select * from users where govlga = ? and governor = ?', ['Ikot Abasi','LP']);              
    $ikotAbasiLP =+ count($ikotAbasiLP);

    $ikotAbasiPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Ikot Abasi','PDP']);              
    $ikotAbasiPDP =+ count($ikotAbasiPDP);



    
          $ikotEkpeneAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Ikot Ekpene','APC']);              
    $ikotEkpeneAPC =+ count($ikotEkpeneAPC);

     $ikotEkpeneAA =  DB::select('select * from users where govlga = ? and governor = ?', ['Ikot Ekpene','AA']);              
    $ikotEkpeneAA =+ count($ikotEkpeneAA);

    $ikotEkpeneLP=  DB::select('select * from users where govlga = ? and governor = ?', ['Ikot Ekpene','LP']);              
    $ikotEkpeneLP =+ count($ikotEkpeneLP);

    $ikotEkpenePDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Ikot Ekpene','PDP']);              
    $ikotEkpenePDP =+ count($ikotEkpenePDP);



    
          $iniAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Ini','APC']);              
    $iniAPC =+ count($iniAPC);

    $iniAA =  DB::select('select * from users where govlga = ? and governor = ?', ['Ini','AA']);              
    $iniAA =+ count($iniAA);

    $iniLP=  DB::select('select * from users where govlga = ? and governor = ?', ['Ini','LP']);              
    $iniLP =+ count($iniLP);

    $iniPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Ini','PDP']);              
    $iniPDP =+ count($iniPDP);




    
          $ituAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Itu','APC']);              
    $ituAPC =+ count($ituAPC);

     $ituAA =  DB::select('select * from users where govlga = ? and governor = ?', ['Itu','AA']);              
    $ituAA =+ count($ituAA);

    $ituLP=  DB::select('select * from users where govlga = ? and governor = ?', ['Itu','LP']);              
    $ituLP =+ count($ituLP);

    $ituPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Itu','PDP']);              
    $ituPDP =+ count($ituPDP);




    
          $mboAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Mbo','APC']);              
    $mboAPC =+ count($mboAPC);

     $mboAA =  DB::select('select * from users where govlga = ? and governor = ?', ['Mbo','AA']);              
    $mboAA =+ count($mboAA);

    $mboLP=  DB::select('select * from users where govlga = ? and governor = ?', ['Mbo','LP']);              
    $mboLP =+ count($mboLP);

    $mboPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Mbo','PDP']);              
    $mboPDP =+ count($mboPDP);



       $mkpatEninAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Mkpat-Enin','APC']);              
    $mkpatEninAPC =+ count($mkpatEninAPC);

     $mkpatEninAA =  DB::select('select * from users where govlga = ? and governor = ?', ['Mkpat-Enin','AA']);              
    $mkpatEninAA =+ count($mkpatEninAA);

    $mkpatEninLP=  DB::select('select * from users where govlga = ? and governor = ?', ['Mkpat-Enin','LP']);              
    $mkpatEninLP =+ count($mkpatEninLP);

    $mkpatEninPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Mkpat-Enin','PDP']);              
    $mkpatEninPDP =+ count($mkpatEninPDP);


    
   
          $nsitAtaiAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Nsit-Atai','APC']);              
    $nsitAtaiAPC =+ count($nsitAtaiAPC);

    $nsitAtaiAA =  DB::select('select * from users where govlga = ? and governor = ?', ['Nsit-Atai','AA']);              
    $nsitAtaiAA =+ count($nsitAtaiAA);

    $nsitAtaiLP=  DB::select('select * from users where govlga = ? and governor = ?', ['Nsit-Atai','LP']);              
    $nsitAtaiLP =+ count($nsitAtaiLP);

    $nsitAtaiPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Nsit-Atai','PDP']);              
    $nsitAtaiPDP =+ count($nsitAtaiPDP);



     $nsitIbomAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Nsit-Ibom','APC']);              
    $nsitIbomAPC =+ count($nsitIbomAPC);

    $nsitIbomAA =  DB::select('select * from users where govlga = ? and governor = ?', ['Nsit-Ibom','AA']);              
    $nsitIbomAA =+ count($nsitIbomAA);

    $nsitIbomLP=  DB::select('select * from users where govlga = ? and governor = ?', ['Nsit-Ibom','LP']);              
    $nsitIbomLP =+ count($nsitIbomLP);

    $nsitIbomPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Nsit-Ibom','PDP']);              
    $nsitIbomPDP =+ count($nsitIbomPDP);




    
          $nsitUbiumAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Nsit-Ubium','APC']);              
    $nsitUbiumAPC =+ count($nsitUbiumAPC);

     $nsitUbiumAA =  DB::select('select * from users where govlga = ? and governor = ?', ['Nsit-Ubium','AA']);              
    $nsitUbiumAA =+ count($nsitUbiumAA);

    $nsitUbiumLP=  DB::select('select * from users where govlga = ? and governor = ?', ['Nsit-Ubium','LP']);              
    $nsitUbiumLP =+ count($nsitUbiumLP);

    $nsitUbiumPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Nsit-Ubium','PDP']);              
    $nsitUbiumPDP =+ count($nsitUbiumPDP);



    
          $obotAkaraAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Obot Akara','APC']);              
    $obotAkaraAPC =+ count($obotAkaraAPC);

     $obotAkaraAA =  DB::select('select * from users where govlga = ? and governor = ?', ['Obot Akara','AA']);              
    $obotAkaraAA =+ count($obotAkaraAA);

    $obotAkaraLP=  DB::select('select * from users where govlga = ? and governor = ?', ['Obot Akara','LP']);              
    $obotAkaraLP =+ count($obotAkaraLP);

    $obotAkaraPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Obot Akara','PDP']);              
    $obotAkaraPDP =+ count($obotAkaraPDP);



    
          $okoboAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Okobo','APC']);              
    $okoboAPC =+ count($okoboAPC);

    $okoboAA =  DB::select('select * from users where govlga = ? and governor = ?', ['Okobo','AA']);              
    $okoboAA =+ count($okoboAA);

    $okoboLP=  DB::select('select * from users where govlga = ? and governor = ?', ['Okobo','LP']);              
    $okoboLP =+ count($okoboLP);

    $okoboPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Okobo','PDP']);              
    $okoboPDP =+ count($okoboPDP);



    
          $onnaAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Onna','APC']);              
    $onnaAPC =+ count($onnaAPC);

    $onnaAA =  DB::select('select * from users where govlga = ? and governor = ?', ['Onna','AA']);              
    $onnaAA =+ count($onnaAA);

    $onnaLP=  DB::select('select * from users where govlga = ? and governor = ?', ['Onna','LP']);              
    $onnaLP =+ count($onnaLP);

    $onnaPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Onna','PDP']);              
    $onnaPDP =+ count($onnaPDP);


    
          $oronAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Oron','APC']);              
    $oronAPC =+ count($oronAPC);

    $oronAA =  DB::select('select * from users where govlga = ? and governor = ?', ['Oron','AA']);              
    $oronAA =+ count($oronAA);

    $oronLP=  DB::select('select * from users where govlga = ? and governor = ?', ['Oron','LP']);              
    $oronLP =+ count($oronLP);

    $oronPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Oron','PDP']);              
    $oronPDP =+ count($oronPDP);




    
          $orukAnamAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Oruk Anam','APC']);              
    $orukAnamAPC =+ count($orukAnamAPC);

     $orukAnamAA =  DB::select('select * from users where govlga = ? and governor = ?', ['Oruk Anam','AA']);              
    $orukAnamAA =+ count($orukAnamAA);

    $orukAnamLP=  DB::select('select * from users where govlga = ? and governor = ?', ['Oruk Anam','LP']);              
    $orukAnamLP =+ count($orukAnamLP);

    $orukAnamPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Oruk Anam','PDP']);              
    $orukAnamPDP =+ count($orukAnamPDP);



    
          $udungUkoAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Udung-Uko','APC']);              
    $udungUkoAPC =+ count($udungUkoAPC);

    $udungUkoAA =  DB::select('select * from users where govlga = ? and governor = ?', ['Udung-Uko','AA']);              
    $udungUkoAA =+ count($udungUkoAA);

    $udungUkoLP=  DB::select('select * from users where govlga = ? and governor = ?', ['Udung-Uko','LP']);              
    $udungUkoLP =+ count($udungUkoLP);

    $udungUkoPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Udung-Uko','PDP']);              
    $udungUkoPDP =+ count($udungUkoPDP);




    
          $ukanafunAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Ukanafun','APC']);              
    $ukanafunAPC =+ count($ukanafunAPC);

     $ukanafunAA =  DB::select('select * from users where govlga = ? and governor = ?', ['Ukanafun','AA']);              
    $ukanafunAA =+ count($ukanafunAA);

    $ukanafunLP=  DB::select('select * from users where govlga = ? and governor = ?', ['Ukanafun','LP']);              
    $ukanafunLP =+ count($ukanafunLP);

    $ukanafunPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Ukanafun','PDP']);              
    $ukanafunPDP =+ count($ukanafunPDP);




    
          $uruanAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Uruan','APC']);              
    $uruanAPC =+ count($uruanAPC);

    $uruanAA =  DB::select('select * from users where govlga = ? and governor = ?', ['Uruan','AA']);              
    $uruanAA =+ count($uruanAA);

    $uruanLP=  DB::select('select * from users where govlga = ? and governor = ?', ['Uruan','LP']);              
    $uruanLP =+ count($uruanLP);

    $uruanPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Uruan','PDP']);              
    $uruanPDP =+ count($uruanPDP);




    $urueOffongAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Urue-Offong Oruko','APC']);              
    $urueOffongAPC =+ count($urueOffongAPC);

    $urueOffongAA =  DB::select('select * from users where govlga = ? and governor = ?', ['Urue-Offong Oruko','AA']);              
    $urueOffongAA =+ count($urueOffongAA);

    $urueOffongLP=  DB::select('select * from users where govlga = ? and governor = ?', ['Urue-Offong Oruko','LP']);              
    $urueOffongLP =+ count($urueOffongLP);

    $urueOffongPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Urue-Offong Oruko','PDP']);              
    $urueOffongPDP =+ count($urueOffongPDP);





    
          $uyoAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Uyo','APC']);              
    $uyoAPC =+ count($uyoAPC);

    $uyoAA =  DB::select('select * from users where govlga = ? and governor = ?', ['Uyo','AA']);              
    $uyoAA =+ count($uyoAA);

    $uyoLP=  DB::select('select * from users where govlga = ? and governor = ?', ['Uyo','LP']);              
    $uyoLP =+ count($uyoLP);

    $uyoPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Uyo','PDP']);              
    $uyoPDP =+ count($uyoPDP);


    //bar chart - party votes in Akwa ibom LGAs
            $akwaibomLgaParty = Charts::multi('bar', 'highcharts')
            ->elementLabel(' ')
            // Setup the chart settings
            ->title("Distribution of Gubernatorial votes according to party votes in Anambra LGAs")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(0, 400) // Width x Height

            // This defines a preset of colors already done:)
            ->template("material")
            // You could always set them manually
            ->colors(['#2196F3', '#F44336', '#FFC107', '#F0C545'])
            // Setup the diferent datasets (this is a multi chart)


            ->dataset('APC', [$abakAPC, $easternOboloAPC, $eketAPC, $esitEketAPC, $essienUdimAPC, $etimEkpoAPC, $etinanAPC, $ibenoAPC, $ibesikpoAsutanAPC, $ibionoIbomAPC, $ikaAPC, $ikonoAPC, $ikotAbasiAPC, $ikotEkpeneAPC, $iniAPC, $ituAPC, $mboAPC, $mkpatEninAPC, $nsitAtaiAPC, $nsitIbomAPC, $nsitUbiumAPC, $obotAkaraAPC, $okoboAPC, $onnaAPC, $oronAPC, $orukAnamAPC, $udungUkoAPC, $ukanafunAPC, $uruanAPC, $urueOffongAPC, $uyoAPC])
            ->dataset('AA', [$abakAA, $easternOboloAA, $eketAA, $esitEketAA, $essienUdimAA, $etimEkpoAA, $etinanAA, $ibenoAA, $ibesikpoAsutanAA, $ibionoIbomAA, $ikaAA, $ikonoAA, $ikotAbasiAA, $ikotEkpeneAA, $iniAA, $ituAA, $mboAA, $mkpatEninAA, $mkpatEninAA, $nsitAtaiAA, $nsitIbomAA, $nsitUbiumAA, $obotAkaraAA, $okoboAA, $onnaAA, $oronAA, $orukAnamAA, $udungUkoAA, $ukanafunAA, $uruanAA, $urueOffongAA, $uyoAA])
            ->dataset('LP', [$abakLP, $easternOboloLP, $eketLP, $esitEketLP, $essienUdimLP, $etimEkpoLP, $etinanLP, $ibenoLP, $ibesikpoAsutanLP, $ibionoIbomLP, $ikaLP, $ikonoLP, $ikotAbasiLP, $ikotEkpeneLP, $iniLP, $ituLP, $mboLP, $mkpatEninLP, $mkpatEninLP, $nsitAtaiLP, $nsitIbomLP, $nsitUbiumLP, $obotAkaraLP, $okoboLP, $onnaLP, $oronLP, $orukAnamLP, $udungUkoLP, $ukanafunLP, $uruanLP, $urueOffongLP, $uyoLP])
            ->dataset('PDP', [$abakPDP, $easternOboloPDP, $eketPDP, $esitEketPDP, $essienUdimPDP, $etimEkpoPDP, $etinanPDP, $ibenoPDP, $ibesikpoAsutanPDP, $ibionoIbomPDP, $ikaPDP, $ikonoPDP, $ikotAbasiPDP, $ikotEkpenePDP, $iniPDP, $ituPDP, $mboPDP, $mkpatEninPDP, $nsitAtaiPDP, $nsitIbomPDP, $nsitUbiumPDP, $obotAkaraPDP, $okoboPDP, $onnaPDP, $oronPDP, $orukAnamPDP, $udungUkoPDP, $ukanafunPDP, $uruanPDP, $urueOffongPDP, $uyoPDP])
             ->labels(['Abak', 'Eastern Obolo', 'Eket', 'Esit Eket', 'Essien Udim',
              'Etim Ekpo', 'Etinan', 'Ibeno', 'Ibesikpo Asutan',
               'Ibiono-Ibom', 'Ika', 'Ikono', 'Ikot Abasi', 'Ikot Ekpene',
                'Ini', 'Itu', 'Mbo', 'Mkpat-Enin', 'Nsit-Atai', 
                'Nsit-Ibom', 'Nsit-Ubium', 'Obot Akara', 'Okobo', 'Onna',
                 'Oron', 'Oruk Anam', 'Udung-Uko', 'Ukanafun', 'Uruan',
                  'Urue-Offong Oruko', 'Uyo']);
             
    return $akwaibomLgaParty;
    }
 
 //];
}
