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
    
          $abakAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Abak','APC']);              
    $abakAPC =+ count($abakAPC);
    
          $abakAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Abak','APC']);              
    $abakAPC =+ count($abakAPC);
    
          $abakAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Abak','APC']);              
    $abakAPC =+ count($abakAPC);
    
          $abakAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Abak','APC']);              
    $abakAPC =+ count($abakAPC);
    
          $abakAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Abak','APC']);              
    $abakAPC =+ count($abakAPC);
    
          $abakAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Abak','APC']);              
    $abakAPC =+ count($abakAPC);
    
          $abakAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Abak','APC']);              
    $abakAPC =+ count($abakAPC);
    
          $EtinanAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Etinan','APC']);              
    $abakAPC =+ count($EtinanAPC);
    
          $ibenoAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Ibeno','APC']);              
    $ibenoAPC =+ count($ibenoAPC);
    
          $ibesikpoAsutanAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Ibesikpo Asutan','APC']);              
    $ibesikpoAsutanAPC =+ count($ibesikpoAsutanAPC);
    
          $ibionoIbomAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Ibiono-Ibom','APC']);              
    $ibionoIbomAPC =+ count($ibionoIbomAPC);
    
          $ikaAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Ika','APC']);              
    $ikaAPC =+ count($ikaAPC);
    
          $ikonoAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Ikono','APC']);              
    $ikonoAPC =+ count($ikonoAPC);
    
          $ikotAbasiAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Ikot Abasi','APC']);              
    $ikotAbasiAPC =+ count($ikotAbasiAPC);
    
          $ikotEkpeneAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Ikot Ekpene','APC']);              
    $ikotEkpeneAPC =+ count($ikotEkpeneAPC);
    
          $iniAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Ini','APC']);              
    $iniAPC =+ count($iniAPC);
    
          $ituAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Itu','APC']);              
    $ituAPC =+ count($ituAPC);
    
          $mboAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Mbo','APC']);              
    $mboAPC =+ count($mboAPC);
    
   
          $nsitAtaiAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Nsit-Atai','APC']);              
    $nsitAtaiAPC =+ count($nsitAtaiAPC);
    
          $nsitUbiumAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Nsit-Ubium','APC']);              
    $nsitUbiumAPC =+ count($nsitUbiumAPC);
    
          $obotAkaraAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Obot Akara','APC']);              
    $obotAkaraAPC =+ count($obotAkaraAPC);
    
          $okoboAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Okobo','APC']);              
    $okoboAPC =+ count($okoboAPC);
    
          $onnaAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Onna','APC']);              
    $onnaAPC =+ count($onnaAPC);
    
          $oronAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Oron','APC']);              
    $oronAPC =+ count($oronAPC);
    
          $orukAnamAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Oruk Anam','APC']);              
    $orukAnamAPC =+ count($orukAnamAPC);
    
          $udungUkoAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Udung-Uko','APC']);              
    $udungUkoAPC =+ count($udungUkoAPC);
    
          $ukanafunAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Ukanafun','APC']);              
    $ukanafunAPC =+ count($ukanafunAPC);
    
          $uruanAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Uruan','APC']);              
    $uruanAPC =+ count($uruanAPC);
    
          $orukoAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Urue-Offong Oruko','APC']);              
    $orukoAPC =+ count($orukoAPC);
    
          $uyoAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Uyo','APC']);              
    $uyoAPC =+ count($uyokAPC);
    
    }
 
 //var AkwaIbom = ['Select item...', 'Abak', 'Eastern Obolo', 'Eket', 'Esit Eket', 'Essien Udim', 'Etim Ekpo', 'Etinan', 'Ibeno', 'Ibesikpo Asutan', 'Ibiono-Ibom', 'Ika', 'Ikono', 'Ikot Abasi', 'Ikot Ekpene', 'Ini', 'Itu', 'Mbo', 'Mkpat-Enin', 'Nsit-Atai', 'Nsit-Ibom', 'Nsit-Ubium', 'Obot Akara', 'Okobo', 'Onna', 'Oron', 'Oruk Anam', 'Udung-Uko', 'Ukanafun', 'Uruan', 'Urue-Offong Oruko', 'Uyo'];
}
