<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
//use Carbon\Carbon;
use Carbon\Carbon;
use Khill\Lavacharts\Lavacharts;
use Charts;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    //protected $dateFormat = 'U';

   protected $casts = [
   'dod' => 'date',
   'prevote' => 'date',
    ];
    protected $fillable = [
        'name', 'username', 'email', 'password','dod', 'gender', 'occupation','favparty','resident','residentlga','origin','originlga','president','prestate','prevote','governor','govstate','govlga','govvote','senate', 'senatelga','senvote','statehouse', 'statehouselga','shvote',
    ];

    /**
     * The attributes that should be hidden for arrays. 
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getAge(){
        return $this->dod->diffInYears(Carbon::now());
    }

    public function getDays(){
        if($this->prevote == null){
return 8;
        }else{
        return $this->prevote->diffInDays(Carbon::now());
    }
    }

    public function numDays(){
if($this->prevote == null){
return 0;
 }else{
        return $this->prevote->addDays(7)->diffInDays(Carbon::now());
    }
    }

 public function getAllVotes(){
    return $user = User::all()->count();
}






public function getAllPresidentVotes(){
    $user = User::where('president', '!=', null)->count();
   
    return $user;

}



 public function getPresidentChart(){

    //retrieves party votes in states
    //abia state
    $abiaapc = User::where([
        ['prestate', '=', 'Abia'],
        ['president', '=', 'APC'],
        ])->count();
    $abiapdp = User::where([
        ['prestate', '=', 'Abia'],
        ['president', '=', 'PDP'],
        ])->count();
    $abiaapga = User::where([
        ['prestate', '=', 'Abia'],
        ['president', '=', 'APGA'],
        ])->count();
    $abialp = User::where([
        ['prestate', '=', 'Abia'],
        ['president', '=', 'LP'],
        ])->count();

    //adamawa state
    $adamawaapc = User::where([
        ['prestate', '=', 'Adamawa'],
        ['president', '=', 'APC'],
        ])->count();
    $adamawapdp = User::where([
        ['prestate', '=', 'Adamawa'],
        ['president', '=', 'PDP'],
        ])->count();
    $adamawaapga = User::where([
        ['prestate', '=', 'Adamawa'],
        ['president', '=', 'APGA'],
        ])->count();
    $adamawalp = User::where([
        ['prestate', '=', 'Adamawa'],
        ['president', '=', 'LP'],
        ])->count();

     //adamawa state
    $akwaibomapc = User::where([
        ['prestate', '=', 'AkwaIbom'],
        ['president', '=', 'APC'],
        ])->count();
    $akwaibompdp = User::where([
        ['prestate', '=', 'AkwaIbom'],
        ['president', '=', 'PDP'],
        ])->count();
    $akwaibomapga = User::where([
        ['prestate', '=', 'AkwaIbom'],
        ['president', '=', 'APGA'],
        ])->count();
    $akwaibomlp = User::where([
        ['prestate', '=', 'AkwaIbom'],
        ['president', '=', 'LP'],
        ])->count();

     //enugu state
    $enuguapc = User::where([
        ['prestate', '=', 'Enugu'],
        ['president', '=', 'APC'],
        ])->count();
    $enugupdp = User::where([
        ['prestate', '=', 'Enugu'],
        ['president', '=', 'PDP'],
        ])->count();
    $enuguapga = User::where([
        ['prestate', '=', 'Enugu'],
        ['president', '=', 'APGA'],
        ])->count();
    $enugulp = User::where([
        ['prestate', '=', 'Enugu'],
        ['president', '=', 'LP'],
        ])->count();

     //imo state
    $imoapc = User::where([
        ['prestate', '=', 'Imo'],
        ['president', '=', 'APC'],
        ])->count();
    $imopdp = User::where([
        ['prestate', '=', 'Imo'],
        ['president', '=', 'PDP'],
        ])->count();
    $imoapga = User::where([
        ['prestate', '=', 'Imo'],
        ['president', '=', 'APGA'],
        ])->count();
    $imolp = User::where([
        ['prestate', '=', 'Imo'],
        ['president', '=', 'LP'],
        ])->count();

      //lagos state
    $lagosapc = User::where([
        ['prestate', '=', 'Lagos'],
        ['president', '=', 'APC'],
        ])->count();
    $lagospdp = User::where([
        ['prestate', '=', 'Lagos'],
        ['president', '=', 'PDP'],
        ])->count();
    $lagosapga = User::where([
        ['prestate', '=', 'Lagos'],
        ['president', '=', 'APGA'],
        ])->count();
    $lagoslp = User::where([
        ['prestate', '=', 'Lagos'],
        ['president', '=', 'LP'],
        ])->count();

      //taraba state
    $tarabaapc = User::where([
        ['prestate', '=', 'Taraba'],
        ['president', '=', 'APC'],
        ])->count();
    $tarabapdp = User::where([
        ['prestate', '=', 'Taraba'],
        ['president', '=', 'PDP'],
        ])->count();
    $tarabaapga = User::where([
        ['prestate', '=', 'Taraba'],
        ['president', '=', 'APGA'],
        ])->count();
    $tarabalp = User::where([
        ['prestate', '=', 'Taraba'],
        ['president', '=', 'LP'],
        ])->count();

     //yobe state
    $yobeapc = User::where([
        ['prestate', '=', 'Yobe'],
        ['president', '=', 'APC'],
        ])->count();
    $yobepdp = User::where([
        ['prestate', '=', 'Yobe'],
        ['president', '=', 'PDP'],
        ])->count();
    $yobeapga = User::where([
        ['prestate', '=', 'Yobe'],
        ['president', '=', 'APGA'],
        ])->count();
    $yobelp = User::where([
        ['prestate', '=', 'Yobe'],
        ['president', '=', 'LP'],
        ])->count();

     //zamfara state
    $zamfaraapc = User::where([
        ['prestate', '=', 'Zamfara'],
        ['president', '=', 'APC'],
        ])->count();
    $zamfarapdp = User::where([
        ['prestate', '=', 'Zamfara'],
        ['president', '=', 'PDP'],
        ])->count();
    $zamfaraapga = User::where([
        ['prestate', '=', 'Zamfara'],
        ['president', '=', 'APGA'],
        ])->count();
    $zamfaralp = User::where([
        ['prestate', '=', 'Zamfara'],
        ['president', '=', 'LP'],
        ])->count();

    //retrieve states
    $abia = User::where('prestate', '=', 'Abia')->count();
    $adamawa = User::where('prestate', '=', 'Adamawa')->count();
    $akwaibom = User::where('prestate', '=', 'AkwaIbom')->count();

    $enugu = User::where('prestate', '=', 'Enugu')->count();
    $imo = User::where('prestate', '=', 'Imo')->count();
    $lagos = User::where('prestate', '=', 'Lagos')->count();

    $taraba = User::where('prestate', '=', 'Taraba')->count();
    $yobe = User::where('prestate', '=', 'Yobe')->count();
    $zamfara = User::where('prestate', '=', 'Zamfara')->count();

//retrieve parties
 $apc = User::where('president', '=', 'APC')->count();
    $pdp = User::where('president', '=', 'PDP')->count();
    $lp = User::where('president', '=', 'LP')->count();
    $apga = User::where('president', '=', 'APGA')->count();

    $hdp = User::where('president', '=', 'HDP')->count();
    $upp = User::where('president', '=', 'UPP')->count();
    $acpn = User::where('president', '=', 'ACPN')->count();
    $udp = User::where('president', '=', 'UDP')->count();
    $ncp = User::where('president', '=', 'NCP')->count();
    $adc = User::where('president', '=', 'ADC')->count();
    $kp = User::where('president', '=', 'KP')->count();
    $ad = User::where('president', '=', 'AD')->count();
    $aa = User::where('president', '=', 'AA')->count();
    $ppa = User::where('president', '=', 'PPA')->count();

//retrieve age data
 $age18_30 = User::whereYear('dod','<', '1999')
 ->whereYear('dod', '>', '1987')->count();

 $age31_43 = User::whereYear('dod','<', '1986')
 ->whereYear('dod', '>', '1974')->count();

 $age44_56 = User::whereYear('dod','<', '1973')
 ->whereYear('dod', '>', '1961')->count();

 $age57_69 = User::whereYear('dod','<', '1960')
 ->whereYear('dod', '>', '1948')->count();

 $age70_82 = User::whereYear('dod','<', '1947')
 ->whereYear('dod', '>', '1935')->count();

 $age83 = User::whereYear('dod','<=', '1934')->count();

 


//bar chart- votes by party chart
 $chart1 = Charts::create('bar', 'highcharts')
           
            // Setup the chart settings
            ->title("president Votes according to party")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(0, 400) // Width x Height
            // This defines a preset of colors already done:)
            ->template("material")
            // You could always set them manually
            ->colors(['#2196F3', '#F44336', '#4FC107', '#F3C111', '#4FC333', '#FF55111',
                '#219FFF', '#F44777', '#098765', '#123111',
                '#4FC11100', '#F3C100'])
            // Setup the diferent datasets (this is a multi chart)
            ->values([$apc,$apga,$lp,$pdp,$hdp,$upp,$acpn,$udp,$ncp,$adc,$kp,$ad,$aa,$ppa])
            
            // Setup what the values mean
            ->labels(['APC', 'APGA', 'LP', 'PDP', 'HDP', 'UPP', 'ACPN', 'UDP', 'NCP',
                'ADC', 'KP', 'AD', 'AA', 'PPA']);


//pie chart- votes by party
             $chart2 = Charts::create('donut', 'highcharts')

            // Setup the chart settings
            ->title("president Votes according to party")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(1000, 500) // Width x Height
            // This defines a preset of colors already done:)
            ->elementLabel(' ')
            // You could always set them manually
            ->colors(['#2196F3', '#F44336', '#4FC107', '#F3C111'])
            // Setup the diferent datasets (this is a multi chart)
            ->values([$apc,$apga,$lp,$pdp])
            
            // Setup what the values mean
            ->labels(['APC', 'APGA', 'LP', 'PDP']);


           

          
            //bar chart - party votes in states
            $chart4 = Charts::multi('bar', 'highcharts')
            ->elementLabel(' ')
            // Setup the chart settings
            ->title("Presidential party votes in States")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(0, 400) // Width x Height

            // This defines a preset of colors already done:)
            ->template("material")
            // You could always set them manually
            ->colors(['#2196F3', '#F44336', '#FFC107', '#F0C545', '#55C107'])
            // Setup the diferent datasets (this is a multi chart)
          

            ->dataset('APC', [$abiaapc,$adamawaapc,$akwaibomapc,$enuguapc,$imoapc,$lagosapc,$tarabaapc,$yobeapc,$zamfaraapc])
            ->dataset('APGA', [$abiaapga,$adamawaapga,$akwaibomapga,$enuguapga,$imoapga,$lagosapga,$tarabaapga,$yobeapga,$zamfaraapga])
            ->dataset('LP', [$abialp,$adamawalp,$akwaibomlp,$enugulp,$imolp,$lagoslp,$tarabalp,$yobelp,$zamfaralp])
            ->dataset('APGA', [$abiapdp,$adamawapdp,$akwaibompdp,$enugupdp,$imopdp,$lagospdp,$tarabapdp,$yobepdp,$zamfarapdp])
            ->dataset('Total Votes', [$abia,$adamawa,$akwaibom,$enugu,$imo,$lagos,$taraba,$yobe,$zamfara])
            ->labels(['Abia','Adamawa','AkwaIbom','Enugu','Imo','Lagos','Taraba','Yobe','Zamfara']);

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

   

             $dataChart = collect(['tbar' => $chart1,'tpie' => $chart2, 'sabar' => $chart4, 'agePres' => $chart5]);


        return $dataChart;
              

    }

    //state Governor vote data
    //abia state data
    public function getAllAbiaResident(){
        
         $userAbia1 = User::where('resident', '=', 'Abia')->count();
        return $userAbia1;

    }

     public function getAllAbiaOrigin(){
        
         $userAbia2 = User::where('origin', '=', 'Abia')->count();

        return $userAbia2;

    }

     public function getAllAbia(){
        
       

        return $this->getAllAbiaResident() + $this->getAllAbiaOrigin();

    }

    public function getAllAbiaGovVotes(){
  $voteAbia1 = User::where(
        'govstate', '=', 'Abia')->count();



        return $voteAbia1 ; 
 

}

  public function getAbiaGovChart(){
    $abiaGovApc = User::where('governor', '=', 'APC')->where('govstate', '=', 'Abia')->count();
    $abiaGovApga =  User::where('governor', '=', 'APGA')->where('govstate', '=', 'Abia')->count();
   $abiaGovPdp =  User::where('governor', '=', 'PDP')->where('govstate', '=', 'Abia')->count();      
   $abiaGovLp = User::where('governor', '=', 'LG')->where('govstate', '=', 'Abia')->count();
     $abiaGovPpa = User::where('governor', '=', 'PPA')->where('govstate', '=', 'Abia')->count();
        
//var Abia = ['Select item...', 'Aba North', 'Aba South', 'Arochukwu', 'Bende', 'Ikwuano', 'Isiala Ngwa North', 'Isiala Ngwa South', 'Isuikwuato', 'Obi Ngwa', 'Ohafia', 'Osisioma', 'Ugwunagbo', 'Ukwa East', 'Ukwa West', 'Umuahia North', 'Umuahia South', 'Umu Nneochi'];   
  //retrieving Abia State lga vote data
  $abiaAbaNorthApc =  User::where('governor', '=', 'APC')->where('govlga', '=', 'Aba North')->count();
  $abiaAbaNorthApga =  User::where('governor', '=', 'APGA')->where('govlga', '=', 'Aba North')->count();
  $abiaAbaNorthpdp =  User::where('governor', '=', 'PDP')->where('govlga', '=', 'Aba North')->count();
  $abiaAbaNorthlp =  User::where('governor', '=', 'LP')->where('govlga', '=', 'Aba North')->count();
  $abiaAbaNorthPpa = User::where('governor', '=', 'PPA')->where('govlga', '=', 'Aba North')->count();      
    
  $abiaAbaSouthApc =  User::where('governor', '=', 'APC')->where('govlga', '=', 'Aba South')->count();
  $abiaAbaSouthApga =  User::where('governor', '=', 'APGA')->where('govlga', '=', 'Aba South')->count();
  $abiaAbaSouthpdp =  User::where('governor', '=', 'PDP')->where('govlga', '=', 'Aba South')->count();
  $abiaAbaSouthlp =  User::where('governor', '=', 'LP')->where('govlga', '=', 'Aba South')->count(); 
  $abiaAbaSouthPpa = User::where('governor', '=', 'PPA')->where('govlga', '=', 'Aba South')->count(); 

    $abiaArochukwuApc =  User::where('governor', '=', 'APC')->where('govlga', '=', 'Arochukwu')->count();
  $abiaArochukwuApga =  User::where('governor', '=', 'APGA')->where('govlga', '=', 'Arochukwu')->count();
  $abiaArochukwupdp =  User::where('governor', '=', 'PDP')->where('govlga', '=', 'Arochukwu')->count();
  $abiaArochukwulp =  User::where('governor', '=', 'LP')->where('govlga', '=', 'Arochukwu')->count();
  $abiaArochukwuPpa = User::where('governor', '=', 'PPA')->where('govlga', '=', 'Arochukwu')->count();  

    $abiaBendeApc =  User::where('governor', '=', 'APC')->where('govlga', '=', 'Bende')->count();
  $abiaBendeApga =  User::where('governor', '=', 'APGA')->where('govlga', '=', 'Bende')->count();
  $abiaBendepdp =  User::where('governor', '=', 'PDP')->where('govlga', '=', 'Bende')->count();
  $abiaBendelp =  User::where('governor', '=', 'LP')->where('govlga', '=', 'Bende')->count();
  $abiaBendePpa = User::where('governor', '=', 'PPA')->where('govlga', '=', 'Bende')->count();  

    $abiaIkwuanoApc =  User::where('governor', '=', 'APC')->where('govlga', '=', 'Ikwuano')->count();
  $abiaIkwuanoApga =  User::where('governor', '=', 'APGA')->where('govlga', '=', 'Ikwuano')->count();
  $abiaIkwuanopdp =  User::where('governor', '=', 'PDP')->where('govlga', '=', 'Ikwuano')->count();
  $abiaIkwuanolp =  User::where('governor', '=', 'LP')->where('govlga', '=', 'Ikwuano')->count(); 
  $abiaIkwuanoPpa = User::where('governor', '=', 'PPA')->where('govlga', '=', 'Ikwuano')->count(); 

    $abiaIsialaNgwaNorthApc =  User::where('governor', '=', 'APC')->where('govlga', '=', 'Isiala Ngwa North')->count();
  $abiaIsialaNgwaNorthApga =  User::where('governor', '=', 'APGA')->where('govlga', '=', 'Isiala Ngwa North')->count();
  $abiaIsialaNgwaNorthpdp =  User::where('governor', '=', 'PDP')->where('govlga', '=', 'Isiala Ngwa North')->count();
  $abiaIsialaNgwaNorthlp =  User::where('governor', '=', 'LP')->where('govlga', '=', 'Isiala Ngwa North')->count();
  $abiaIsialaNgwaNorthPpa = User::where('governor', '=', 'PPA')->where('govlga', '=', 'Isiala Ngwa North')->count();  

    $abiaIsialaNgwaSouthApc =  User::where('governor', '=', 'APC')->where('govlga', '=', 'Isiala Ngwa South')->count();
  $abiaIsialaNgwaSouthApga =  User::where('governor', '=', 'APGA')->where('govlga', '=', 'Isiala Ngwa South')->count();
  $abiaIsialaNgwaSouthpdp =  User::where('governor', '=', 'PDP')->where('govlga', '=', 'Isiala Ngwa South')->count();
  $abiaIsialaNgwaSouthlp =  User::where('governor', '=', 'LP')->where('govlga', '=', 'Isiala Ngwa South')->count();
  $abiaIsialaNgwaSouthPpa = User::where('governor', '=', 'PPA')->where('govlga', '=', 'Isiala Ngwa South')->count();  

    $abiaIsuikwuatoApc =  User::where('governor', '=', 'APC')->where('govlga', '=', 'Isuikwuato')->count();
  $abiaIsuikwuatoApga =  User::where('governor', '=', 'APGA')->where('govlga', '=', 'Isuikwuato')->count();
  $abiaIsuikwuatopdp =  User::where('governor', '=', 'PDP')->where('govlga', '=', 'Isuikwuato')->count();
  $abiaIsuikwuatolp =  User::where('governor', '=', 'LP')->where('govlga', '=', 'Isuikwuato')->count(); 
  $abiaIsuikwuatoPpa = User::where('governor', '=', 'PPA')->where('govlga', '=', 'Isuikwuato')->count(); 

    $abiaObiNgwaApc =  User::where('governor', '=', 'APC')->where('govlga', '=', 'Obi Ngwa')->count();
  $abiaObiNgwaApga =  User::where('governor', '=', 'APGA')->where('govlga', '=', 'Obi Ngwa')->count();
  $abiaObiNgwapdp =  User::where('governor', '=', 'PDP')->where('govlga', '=', 'Obi Ngwa')->count();
  $abiaObiNgwalp =  User::where('governor', '=', 'LP')->where('govlga', '=', 'Obi Ngwa')->count();
  $abiaObiNgwaPpa = User::where('governor', '=', 'PPA')->where('govlga', '=', 'Obi Ngwa')->count();  

    $abiaOhafiaApc =  User::where('governor', '=', 'APC')->where('govlga', '=', 'Ohafia')->count();
  $abiaOhafiaApga =  User::where('governor', '=', 'APGA')->where('govlga', '=', 'Ohafia')->count();
  $abiaOhafiapdp =  User::where('governor', '=', 'PDP')->where('govlga', '=', 'Ohafia')->count();
  $abiaOhafialp =  User::where('governor', '=', 'LP')->where('govlga', '=', 'Ohafia')->count(); 
  $abiaOhafiaPpa = User::where('governor', '=', 'PPA')->where('govlga', '=', 'Ohafia')->count(); 


    $abiaOsisiomaApc =  User::where('governor', '=', 'APC')->where('govlga', '=', 'Osisioma')->count();
  $abiaOsisiomaApga =  User::where('governor', '=', 'APGA')->where('govlga', '=', 'Osisioma')->count();
  $abiaOsisiomapdp =  User::where('governor', '=', 'PDP')->where('govlga', '=', 'Osisioma')->count();
  $abiaOsisiomalp =  User::where('governor', '=', 'LP')->where('govlga', '=', 'Osisioma')->count(); 
  $abiaOsisiomaPpa = User::where('governor', '=', 'PPA')->where('govlga', '=', 'Osisioma')->count(); 

    $abiaUgwunagboApc =  User::where('governor', '=', 'APC')->where('govlga', '=', 'Ugwunagbo')->count();
  $abiaUgwunagboApga =  User::where('governor', '=', 'APGA')->where('govlga', '=', 'Ugwunagbo')->count();
  $abiaUgwunagbopdp =  User::where('governor', '=', 'PDP')->where('govlga', '=', 'Ugwunagbo')->count();
  $abiaUgwunagbolp =  User::where('governor', '=', 'LP')->where('govlga', '=', 'Ugwunagbo')->count(); 
  $abiaUgwunagboPpa = User::where('governor', '=', 'PPA')->where('govlga', '=', 'Ugwunagbo')->count(); 
  
  $abiaUkwaEastApc =  User::where('governor', '=', 'APC')->where('govlga', '=', 'Ukwa East')->count();
  $abiaUkwaEastApga =  User::where('governor', '=', 'APGA')->where('govlga', '=', 'Ukwa East')->count();
  $abiaUkwaEastpdp =  User::where('governor', '=', 'PDP')->where('govlga', '=', 'Ukwa East')->count();
  $abiaUkwaEastlp =  User::where('governor', '=', 'LP')->where('govlga', '=', 'Ukwa East')->count(); 
  $abiaUkwaEastPpa = User::where('governor', '=', 'PPA')->where('govlga', '=', 'Ukwa East')->count(); 
   
    $abiaUkwaWestApc =  User::where('governor', '=', 'APC')->where('govlga', '=', 'Ukwa West')->count();
  $abiaUkwaWestApga =  User::where('governor', '=', 'APGA')->where('govlga', '=', 'Ukwa West')->count();
  $abiaUkwaWestpdp =  User::where('governor', '=', 'PDP')->where('govlga', '=', 'Ukwa West')->count();
  $abiaUkwaWestlp =  User::where('governor', '=', 'LP')->where('govlga', '=', 'Ukwa West')->count();
  $abiaUkwaWestPpa = User::where('governor', '=', 'PPA')->where('govlga', '=', 'Ukwa West')->count();  

  $abiaUmuahiaNorthApc =  User::where('governor', '=', 'APC')->where('govlga', '=', 'Umuahia North')->count();
  $abiaUmuahiaNorthApga =  User::where('governor', '=', 'APGA')->where('govlga', '=', 'Umuahia North')->count();
  $abiaUmuahiaNorthpdp =  User::where('governor', '=', 'PDP')->where('govlga', '=', 'Umuahia North')->count();
  $abiaUmuahiaNorthlp =  User::where('governor', '=', 'LP')->where('govlga', '=', 'Umuahia North')->count();     
  $abiaUmuahiaNorthPpa = User::where('governor', '=', 'PPA')->where('govlga', '=', 'Umuahia North')->count(); 

  $abiaUmuahiaSouthApc =  User::where('governor', '=', 'APC')->where('govlga', '=', 'Umuahia South')->count();
  $abiaUmuahiaSouthApga =  User::where('governor', '=', 'APGA')->where('govlga', '=', 'Umuahia Soth')->count();
  $abiaUmuahiaSouthpdp =  User::where('governor', '=', 'PDP')->where('govlga', '=', 'Umuahia South')->count();
  $abiaUmuahiaSouthlp =  User::where('governor', '=', 'LP')->where('govlga', '=', 'Umuahia South')->count();     
  $abiaUmuahiaSouthPpa = User::where('governor', '=', 'PPA')->where('govlga', '=', 'Umuahia South')->count();     

  $abiaUmuNneochiApc =  User::where('governor', '=', 'APC')->where('govlga', '=', 'Umu Nneochi')->count();
  $abiaUmuNneochiApga =  User::where('governor', '=', 'APGA')->where('govlga', '=', 'Umu Nneochi')->count();
  $abiaUmuNneochipdp =  User::where('governor', '=', 'PDP')->where('govlga', '=', 'Umu Nneochi')->count();
  $abiaUmuNneochilp =  User::where('governor', '=', 'LP')->where('govlga', '=', 'Umu Nneochi')->count();     
  $abiaUmuNneochiPpa = User::where('governor', '=', 'PPA')->where('govlga', '=', 'Umu Nneochi')->count();     

//bar chart- abia votes by party chart
 $abiaChartLGA= Charts::multi('bar', 'highcharts')
           
            
            ->title("Votes count distribution according LGA in Abia State")
            ->dimensions(0, 400) // Width x Height
            ->template("material")
            // You could always set them manually
            ->colors(['#2196F3', '#F44336', '#4FC107', '#F3C111', '#F12345'])
            // Setup the diferent datasets (this is a multi chart)
           ->dataset('APC', [$abiaAbaNorthApc,$abiaAbaSouthApc,$abiaArochukwuApc,$abiaBendeApc,$abiaIkwuanoApc,$abiaIsialaNgwaNorthApc,$abiaIsialaNgwaSouthApc,$abiaIsuikwuatoApc,$abiaObiNgwaApc,$abiaOhafiaApc,$abiaOsisiomaApc,$abiaUgwunagboApc,$abiaUkwaEastApc,$abiaUkwaWestApc,$abiaUmuahiaNorthApc,$abiaUmuahiaSouthApc,$abiaUmuNneochiApc])
            ->dataset('APGA', [$abiaAbaNorthApga,$abiaAbaSouthApga,$abiaArochukwuApga,$abiaBendeApga,$abiaIkwuanoApga,$abiaIsialaNgwaNorthApga,$abiaIsialaNgwaSouthApga,$abiaIsuikwuatoApga,$abiaObiNgwaApga,$abiaOhafiaApga,$abiaOsisiomaApga,$abiaUgwunagboApga,$abiaUkwaEastApga,$abiaUkwaWestApga,$abiaUmuahiaNorthApga,$abiaUmuahiaSouthApga,$abiaUmuNneochiApga])
            ->dataset('PDP', [$abiaAbaNorthpdp,$abiaAbaSouthpdp,$abiaArochukwupdp,$abiaBendepdp,$abiaIkwuanopdp,$abiaIsialaNgwaNorthpdp,$abiaIsialaNgwaSouthpdp,$abiaIsuikwuatopdp,$abiaObiNgwapdp,$abiaOhafiapdp,$abiaOsisiomapdp,$abiaUgwunagbopdp,$abiaUkwaEastpdp,$abiaUkwaWestpdp,$abiaUmuahiaNorthpdp,$abiaUmuahiaSouthpdp,$abiaUmuNneochipdp])
            ->dataset('PPA', [$abiaAbaNorthPpa,$abiaAbaSouthPpa,$abiaArochukwuPpa,$abiaBendePpa,$abiaIkwuanoPpa,$abiaIsialaNgwaNorthPpa,$abiaIsialaNgwaSouthPpa,$abiaIsuikwuatoPpa,$abiaObiNgwaPpa,$abiaOhafiaPpa,$abiaOsisiomaPpa,$abiaUgwunagboPpa,$abiaUkwaEastPpa,$abiaUkwaWestPpa,$abiaUmuahiaNorthPpa,$abiaUmuahiaSouthPpa,$abiaUmuNneochiPpa])
            ->dataset('LP', [$abiaAbaNorthlp,$abiaAbaSouthlp,$abiaArochukwulp,$abiaBendelp,$abiaIkwuanolp,$abiaIsialaNgwaNorthlp,$abiaIsialaNgwaSouthlp,$abiaIsuikwuatolp,$abiaObiNgwalp,$abiaOhafialp,$abiaOsisiomalp,$abiaUgwunagbolp,$abiaUkwaEastlp,$abiaUkwaWestlp,$abiaUmuahiaNorthlp,$abiaUmuahiaSouthlp,$abiaUmuNneochilp])
            // Setup what the values mean
            ->labels(['Aba North', 'Aba South', 'Arochukwu', 'Bende', 'Ikwuano',
                'Isiala Ngwa North', 'Isiala Ngwa South', 'Isuikwuato', 'Obi Ngwa', 'Ohafia',
                'Osisioma', 'Ugwunagbo', 'Ukwa East', 'Ukwa West', 'Umuahia North',
                'Umuahia South', 'Umu Nneochi']);


//bar chart- abia votes by party chart
            $abiaPartyChart = Charts::create('bar', 'highcharts')
           
            // Setup the chart settings
            ->title("Votes distribution according to party in Abia State")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(0, 400) // Width x Height
            // This defines a preset of colors already done:)
             ->elementLabel(' ')
            ->template("material")
            // You could always set them manually
            ->colors(['#2196F3', '#F44336', '#4FC107','#F3C111', '#333111'])
            // Setup the diferent datasets (this is a multi chart)
            ->values([$abiaGovApc, $abiaGovApga, $abiaGovPpa, $abiaGovPdp, $abiaGovLp])
            
            // Setup what the values mean
            ->labels(['APC', 'APGA', 'PPA', 'PDP', 'LP']);


            $abiaDataLGA = collect(['abialgabar' => $abiaChartLGA, 'abiapartychart' => $abiaPartyChart]);

            return $abiaDataLGA;

    }

  
 




}