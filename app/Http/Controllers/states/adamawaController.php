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
    
    //get vote count
    public function getAllVoteCount(){
    $allAdamawaCount = DB::select('select * from users where govstate = ?', ['Adamawa']);
        $allAdamawaCount =+ count($allAdamawaCount);
        
        return $allAdamawaCount;
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
 $adamawaAge = Charts::create('bar', 'highcharts')
           
            // Setup the chart settings
            ->title("Votes according to Age in Adamawa State")
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

   
return $adamawaAge;

    }


public function getVoteByLGAAdamawa(){
	


    $demsaAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Demsa', 'APC']);
    $demsaAPC =+ count($demsaAPC);

    $demsaPDM=DB::select('select * from users where govlga = ? and governor = ?', ['Demsa', 'PDM']);
    $demsaPDM  =+ count($demsaPDM);

    $demsaPDP = DB::select('select * from users where govlga = ? and governor = ?', ['Demsa', 'PDP']);
    $demsaPDP =+ count($demsaPDP);

    $demsaSDP = DB::select('select * from users where govlga = ? and governor = ?', ['Demsa', 'SDP']);
    $demsaSDP =+ count($demsaSDP);


    $fufureAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Fufure','APC']);                    
    $fufureAPC =+ count($fufureAPC);

    $fufurePDM = DB::select('select * from users where govlga = ? and governor = ?', ['Fufure','PDM']);                    
    $fufurePDM =+ count($fufurePDM);

    $fufurePDP = DB::select('select * from users where govlga = ? and governor = ?', ['Fufure','PDP']);                    
    $fufurePDP =+ count($fufurePDP);

    $fufureSDP = DB::select('select * from users where govlga = ? and governor = ?', ['Fufure','SDP']);                    
    $fufureSDP =+ count($fufureSDP);


    $ganyeAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Ganye','APC']);                    
    $ganyeAPC =+ count($ganyeAPC);

     $ganyePDM = DB::select('select * from users where govlga = ? and governor = ?', ['Ganye','PDM']);                    
    $ganyePDM =+ count($ganyePDM);

     $ganyePDP = DB::select('select * from users where govlga = ? and governor = ?', ['Ganye','PDP']);                    
    $ganyePDP =+ count($ganyePDP);

     $ganyeSDP = DB::select('select * from users where govlga = ? and governor = ?', ['Ganye','SDP']);                    
    $ganyeSDP =+ count($ganyeSDP);


     $gayukAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Gayuk','APC']);                    
    $gayukAPC =+ count($gayukAPC);

    $gayukPDM = DB::select('select * from users where govlga = ? and governor = ?', ['Gayuk','PDM']);                    
    $gayukPDM =+ count($gayukPDM);

    $gayukPDP = DB::select('select * from users where govlga = ? and governor = ?', ['Gayuk','PDP']);                    
    $gayukPDP =+ count($gayukPDP);

    $gayukSDP = DB::select('select * from users where govlga = ? and governor = ?', ['Gayuk','SDP']);                    
    $gayukSDP =+ count($gayukSDP);


    $gombiAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Gombi','APC']);                    
    $gombiAPC =+ count($gombiAPC);

     $gombiPDM = DB::select('select * from users where govlga = ? and governor = ?', ['Gombi','PDM']);                    
    $gombiPDM =+ count($gombiPDM);

     $gombiPDP = DB::select('select * from users where govlga = ? and governor = ?', ['Gombi','PDP']);                    
    $gombiPDP =+ count($gombiPDP);

     $gombiSDP = DB::select('select * from users where govlga = ? and governor = ?', ['Gombi','SDP']);                    
    $gombiSDP =+ count($gombiSDP);


     $grieAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Grie','APC']);                    
    $grieAPC =+ count($grieAPC);

      $griePDM = DB::select('select * from users where govlga = ? and governor = ?', ['Grie','PDM']);                    
    $griePDM =+ count($griePDM);

      $griePDP = DB::select('select * from users where govlga = ? and governor = ?', ['Grie','PDP']);                    
    $griePDP =+ count($griePDP);

      $grieSDP = DB::select('select * from users where govlga = ? and governor = ?', ['Grie','SDP']);                    
    $grieSDP =+ count($grieSDP);


    $hongAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Hong','APC']);                    
    $hongAPC =+ count($hongAPC);

        $hongPDM = DB::select('select * from users where govlga = ? and governor = ?', ['Hong','PDM']);                    
    $hongPDM =+ count($hongPDM);

        $hongPDP = DB::select('select * from users where govlga = ? and governor = ?', ['Hong','PDP']);                    
    $hongPDP =+ count($hongPDP);

        $hongSDP = DB::select('select * from users where govlga = ? and governor = ?', ['Hong','SDP']);                    
    $hongSDP =+ count($hongSDP);


           $jadaAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Jada','APC']);                    
    $jadaAPC =+ count($jadaAPC);

    $jadaPDM = DB::select('select * from users where govlga = ? and governor = ?', ['Jada','PDM']);                    
    $jadaPDM =+ count($jadaPDM);

    $jadaPDP = DB::select('select * from users where govlga = ? and governor = ?', ['Jada','PDP']);                    
    $jadaPDP =+ count($jadaPDP);

    $jadaSDP = DB::select('select * from users where govlga = ? and governor = ?', ['Jada','SDP']);                    
    $jadaSDP =+ count($jadaSDP);


    $larmurdeAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Larmurde', 'APC']);                 
    $larmurdeAPC =+ count($larmurdeAPC);

    $larmurdePDM = DB::select('select * from users where govlga = ? and governor = ?', ['Larmurde', 'PDM']);                 
    $larmurdePDM =+ count($larmurdePDM);

    $larmurdePDP = DB::select('select * from users where govlga = ? and governor = ?', ['Larmurde', 'PDP']);                 
    $larmurdePDP =+ count($larmurdePDP);

    $larmurdeSDP = DB::select('select * from users where govlga = ? and governor = ?', ['Larmurde', 'SDP']);                 
    $larmurdeSDP =+ count($larmurdeSDP);


       $madagaliAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Madagali', 'APC']);                 
    $madagaliAPC =+ count($madagaliAPC);

         $madagaliPDM = DB::select('select * from users where govlga = ? and governor = ?', ['Madagali', 'PDM']);                 
    $madagaliPDM =+ count($madagaliPDM);

         $madagaliPDP = DB::select('select * from users where govlga = ? and governor = ?', ['Madagali', 'PDP']);                 
    $madagaliPDP =+ count($madagaliPDP);

         $madagaliSDP = DB::select('select * from users where govlga = ? and governor = ?', ['Madagali', 'SDP']);                 
    $madagaliSDP =+ count($madagaliSDP);


      $maihaAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Maiha', 'APC']);                 
    $maihaAPC =+ count($maihaAPC);

    $maihaPDM = DB::select('select * from users where govlga = ? and governor = ?', ['Maiha', 'PDM']);                 
    $maihaPDM =+ count($maihaPDM);

    $maihaPDP = DB::select('select * from users where govlga = ? and governor = ?', ['Maiha', 'PDP']);                 
    $maihaPDP =+ count($maihaPDP);

    $maihaSDP = DB::select('select * from users where govlga = ? and governor = ?', ['Maiha', 'SDP']);                 
    $maihaSDP =+ count($maihaSDP);


    $mayobelwaAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Mayo Belwa','APC']);                
    $mayobelwaAPC =+ count($mayobelwaAPC);

     $mayobelwaPDM =  DB::select('select * from users where govlga = ? and governor = ?', ['Mayo Belwa','PDM']);                
    $mayobelwaPDM =+ count($mayobelwaPDM);

     $mayobelwaPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Mayo Belwa','PDP']);                
    $mayobelwaPDP =+ count($mayobelwaPDP);

     $mayobelwaSDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Mayo Belwa','SDP']);                
    $mayobelwaSDP =+ count($mayobelwaSDP);
    
    
    
    $michikaAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Michika','APC']);                
    $michikaAPC =+ count($michikaAPC);

     $michikaPDM =  DB::select('select * from users where govlga = ? and governor = ?', ['Michika','PDM']);                
    $michikaPDM =+ count($michikaPDM);

     $michikaPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Michika','PDP']);                
    $michikaPDP =+ count($michikaPDP);

     $michikaSDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Michika','SDP']);                
    $michikaSDP =+ count($michikaSDP);
    
    


    $mubinorthAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Mubi North','APC']);                
    $mubinorthAPC =+ count($mubinorthAPC);

    $mubinorthPDM =  DB::select('select * from users where govlga = ? and governor = ?', ['Mubi North','PDM']);                
    $mubinorthPDM =+ count($mubinorthPDM);

    $mubinorthPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Mubi North','PDP']);                
    $mubinorthPDP =+ count($mubinorthPDP);

    $mubinorthSDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Mubi North','SDP']);                
    $mubinorthSDP =+ count($mubinorthSDP);


    $mubisouthAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Mubi South','APC']);                
    $mubisouthAPC =+ count($mubisouthAPC);

     $mubisouthPDM =  DB::select('select * from users where govlga = ? and governor = ?', ['Mubi South','PDM']);                
    $mubisouthPDM =+ count($mubisouthPDM);

     $mubisouthPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Mubi South','PDP']);                
    $mubisouthPDP =+ count($mubisouthPDP);

     $mubisouthSDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Mubi South','SDP']);                
    $mubisouthSDP =+ count($mubisouthSDP);



     $numanAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Numan','APC']);                
    $numanAPC =+ count($numanAPC);

    $numanPDM =  DB::select('select * from users where govlga = ? and governor = ?', ['Numan','PDM']);                
    $numanPDM =+ count($numanAPC);

    $numanPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Numan','PDP']);                
    $numanPDP =+ count($numanAPC);

    $numanSDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Numan','SDP']);                
    $numanSDP =+ count($numanSDP);


    $shellengAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Shelleng','APC']);                
    $shellengAPC =+ count($shellengAPC);

     $shellengPDM = DB::select('select * from users where govlga = ? and governor = ?', ['Shelleng','PDM']);                
    $shellengPDM =+ count($shellengPDM);

     $shellengPDP = DB::select('select * from users where govlga = ? and governor = ?', ['Shelleng','PDP']);                
    $shellengPDP =+ count($shellengAPC);

     $shellengSDP = DB::select('select * from users where govlga = ? and governor = ?', ['Shelleng','SDP']);                
    $shellengSDP =+ count($shellengSDP);



     $songAPC = DB::select('select * from users where govlga = ? and governor = ?', ['Song','APC']);                
    $songAPC =+ count($songAPC);

    $songPDM = DB::select('select * from users where govlga = ? and governor = ?', ['Song','PDM']);                
    $songPDM =+ count($songPDM);

    $songPDP = DB::select('select * from users where govlga = ? and governor = ?', ['Song','PDP']);                
    $songPDP =+ count($songPDP);

    $songSDP = DB::select('select * from users where govlga = ? and governor = ?', ['Song','SDP']);                
    $songSDP =+ count($songSDP);


    $toungoAPC =  DB::select('select * from users where govlga = ? and governor = ?', ['Toungo','APC']);              
    $toungoAPC =+ count($toungoAPC);

    $toungoPDM =  DB::select('select * from users where govlga = ? and governor = ?', ['Toungo','PDM']);              
    $toungoPDM =+ count($toungoPDM);

    $toungoPDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Toungo','PDP']);              
    $toungoPDP =+ count($toungoPDP);

    $toungoSDP =  DB::select('select * from users where govlga = ? and governor = ?', ['Toungo','SDP']);              
    $toungoSDP =+ count($toungoSDP);


    $yolanorthAPC =DB::select('select * from users where govlga = ? and governor = ?', ['Yola North','APC']);             
    $yolanorthAPC =+ count($yolanorthAPC);

    $yolanorthPDM =DB::select('select * from users where govlga = ? and governor = ?', ['Yola North','PDM']);          
    $yolanorthPDM =+ count($yolanorthPDM);

    $yolanorthPDP =DB::select('select * from users where govlga = ? and governor = ?', ['Yola North','PDP']);             
    $yolanorthPDP =+ count($yolanorthPDP);

    $yolanorthSDP =DB::select('select * from users where govlga = ? and governor = ?', ['Yola North','SDP']);             
    $yolanorthSDP =+ count($yolanorthSDP);


    $yolasouthAPC =DB::select('select * from users where govlga = ? and governor = ?', ['Yola North','APC']);             
    $yolasouthAPC =+ count($yolasouthAPC);

     $yolasouthPDM =DB::select('select * from users where govlga = ? and governor = ?', ['Yola North','PDM']);             
    $yolasouthPDM =+ count($yolasouthPDM);

     $yolasouthPDP =DB::select('select * from users where govlga = ? and governor = ?', ['Yola North','PDP']);             
    $yolasouthPDP =+ count($yolasouthPDP);

     $yolasouthSDP =DB::select('select * from users where govlga = ? and governor = ?', ['Yola North','SDP']);             
    $yolasouthSDP =+ count($yolasouthSDP);


  //bar chart - party votes in Anambra LGAs
            $adamawaLgaParty = Charts::multi('bar', 'highcharts')
            ->elementLabel(' ')
            // Setup the chart settings
            ->title("Distribution of Gubernatorial votes according to party votes in Adamawa State LGAs")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(0, 400) // Width x Height

            // This defines a preset of colors already done:)
            ->template("material")
            // You could always set them manually
            ->colors(['#2196F3', '#F44336', '#FFC107', '#F0C545'])
            // Setup the diferent datasets (this is a multi chart)
          

            ->dataset('APC', [$demsaAPC, $fufureAPC, $ganyeAPC, $gayukAPC, $gombiAPC, $grieAPC, $hongAPC, $jadaAPC, $larmurdeAPC, $madagaliAPC, $maihaAPC, $mayobelwaAPC, $michikaAPC, $mubinorthAPC, $mubisouthAPC, $numanAPC, $shellengAPC, $songAPC, $toungoAPC, $yolanorthAPC, $yolasouthAPC])
            ->dataset('PDM', [$demsaPDM, $fufurePDM, $ganyePDM, $gayukPDM, $gombiPDM, $griePDM, $hongPDM, $jadaPDM, $larmurdePDM, $madagaliPDM, $maihaPDM, $mayobelwaPDM, $michikaPDM, $mubinorthPDM, $mubisouthPDM, $numanPDM, $shellengPDM, $songPDM, $toungoPDM, $yolanorthPDM, $yolasouthPDM])
            ->dataset('PDP', [$demsaPDP, $fufurePDP, $ganyePDP, $gayukPDP, $gombiPDP, $griePDP, $hongPDP, $jadaPDP, $larmurdePDP, $madagaliPDP, $maihaPDP, $mayobelwaPDP, $michikaPDP, $mubinorthPDP, $mubisouthPDP, $numanPDP, $shellengPDP, $songPDP, $toungoPDP, $yolanorthPDP, $yolasouthPDP])
            ->dataset('SDP', [$demsaSDP, $fufureSDP, $ganyeSDP, $gayukSDP, $gombiSDP, $grieSDP, $hongSDP, $jadaSDP, $larmurdeSDP, $madagaliSDP, $maihaSDP, $mayobelwaSDP, $michikaSDP, $mubinorthSDP, $mubisouthSDP, $numanSDP, $shellengSDP, $songSDP, $toungoSDP, $yolanorthSDP, $yolasouthSDP])
            
            
            ->labels(['Demsa', 'Fufure', 'Ganye', 'Gayuk','Gombi', 'Grie', 'Hong', 'Jada', 'Larmurde', 'Madagali', 'Maiha', 'Mayo Belwa', 'Michika', 'Mubi North', 'Mubi South','Mubi North', 'Numan','Shelleng', 'Song', 'Toungo', 'Yola North', 'Yola South']);

     return $adamawaLgaParty;

    

}



     public function getVotesByOccupation(){
     	
    $farmer = DB::select('select * from users where occupation = ? and govstate = ?', ['Farmer','Adamawa']);
		$farmer =+ count($farmer);

		$civilServant = DB::select('select * from users where occupation = ? and govstate = ?', ['Civil Servant', 'Adamawa']);
		$civilServant =+ count($civilServant);
                
                $student = DB::select('select * from users where occupation = ? and govstate = ?', ['Student', 'Adamawa']);
		$student =+ count($student);

		$publicServant = DB::select('select * from users where occupation = ? and govstate = ?', ['Public Servant', 'Adamawa']);
		$publicServant = count($publicServant);

		$politician = DB::select('select * from users where occupation = ? and govstate = ?', ['Politician', 'Adamawa']);
		$politician =+ count($politician);

		$business = DB::select('select * from users where occupation = ? and govstate = ?', ['Business', 'Adamawa']);
		$business =+ count($business);

		$tradesman = DB::select('select * from users where occupation = ? and govstate = ?', ['Skilled', 'Adamawa']);
		$tradesman =+ count($tradesman);

		$self = DB::select('select * from users where occupation and govstate = ?', ['Self Employed', 'Adamawa']);
		$self=+ count($self);

		$trader = DB::select('select * from users where occupation and govstate = ?', ['Trader', 'Adamawa']);
		$trader =+ count($trader);

		$teacher = DB::select('select * from users where occupation and govstate = ?', ['Teacher', 'Adamawa']);
                $teacher =+ count($teacher);
                
                
                 //bar chart- votes by age
 $adamawaOccupation = Charts::create('bar', 'highcharts')
           
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
 
            return $adamawaOccupation;
        }
        
        
        public function getVotesBySex(){
            $male = DB::select('select * from users where gender = ? and govstate = ?', ['Male', 'Adamawa']);
             $female = DB::select('select * from users where gender = ? and govstate = ?', ['Female', 'Adamawa']);
             
        
              //bar chart- votes by age
 $adamawaGender = Charts::create('bar', 'highcharts')
           
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
 
            return $adamawaGender;
             
        }
}
