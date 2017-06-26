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

     $fct = DB::select('select * from users where prestate = ?', ['FCT']);
     $fct =+ count($fct);


     $abia = DB::select('select * from users where prestate = ?', ['Abia']);
    $abia =+ count($abia);

    $lagos = DB::select('select * from users where prestate = ?', ['Lagos']);
     $lagos =+count($lagos);

    $anambra = DB::select('select * from users where prestate = ?', ['Anambra']);
     $anambra =+ count($anambra);

    $bauchi = DB::select('select * from users where prestate = ?', ['Bauchi']);
     $bauchi =+ count($bauchi);

     $bayelsa = DB::select('select * from users where prestate = ?', ['Bayelsa']);
     $bayelsa =+ count($enugu);

     $benue = DB::select('select * from users where prestate = ?', ['Benue']);
     $benue =+ count($benue);

     $borno = DB::select('select * from users where prestate = ?', ['Borno']);
     $borno =+ count($borno);

     $crossRivers = DB::select('select * from users where prestate = ?', ['Cross Rivers']);
     $crossRivers =+ count($crossRivers);

     $delta = DB::select('select * from users where prestate = ?', ['Delta']);
     $delta =+ count($delta);

     $ebonyi = DB::select('select * from users where prestate = ?', ['Ebonyi']);
     $ebonyi =+ count($ebonyi);


     $edo = DB::select('select * from users where prestate = ?', ['Edo']);
    $edo =+ count($edo);

    $ekiti = DB::select('select * from users where prestate = ?', ['Ekiti']);
     $ekiti =+count($ekiti);

    $gombe = DB::select('select * from users where prestate = ?', ['Gombe']);
     $gombe =+ count($gombe);

    $jigawa = DB::select('select * from users where prestate = ?', ['Jigawa']);
     $jigawa =+ count($jigawa);

     $kaduna = DB::select('select * from users where prestate = ?', ['Kaduna']);
     $kaduna =+ count($kaduna);

     $kano = DB::select('select * from users where prestate = ?', ['Kano']);
     $kano =+ count($kano);

     $katsina = DB::select('select * from users where prestate = ?', ['Katsina']);
     $katsina =+ count($katsina);

     $kebbi = DB::select('select * from users where prestate = ?', ['Kebbi']);
     $kebbi =+ count($kebbi);

     $kwara = DB::select('select * from users where prestate = ?', ['Kwara']);
     $kwara =+ count($kwara);

     $nasarawa = DB::select('select * from users where prestate = ?', ['Nasarawa']);
     $nasarawa =+ count($nasarawa);

     $niger = DB::select('select * from users where prestate = ?', ['Niger']);
     $niger =+ count($niger);

     $ogun = DB::select('select * from users where prestate = ?', ['Ogun']);
     $ogun =+ count($ogun);

     $ondo = DB::select('select * from users where prestate = ?', ['Ondo']);
     $ondo =+ count($ondo);

     $osun = DB::select('select * from users where prestate = ?', ['Osun']);
     $osun =+ count($osun);

     $oyo = DB::select('select * from users where prestate = ?', ['Oyo']);
     $oyo =+ count($oyo);

     $plateau = DB::select('select * from users where prestate = ?', ['Plateau']);
     $plateau =+ count($plateau);

     $sokoto = DB::select('select * from users where prestate = ?', ['Sokoto']);
     $sokoto =+ count($sokoto);

       $rivers = DB::select('select * from users where prestate = ?', ['Rivers']);
     $rivers =+ count($rivers);





    	//pie chart- votes by party
             $statePie = Charts::create('donut', 'highcharts')

            // Setup the chart settings
            ->title("Mocked presidential Votes according to States")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(0, 400) // Width x Height
            // This defines a preset of colors already done:)
            
            // You could always set them manually
            ->colors(['#2196F3', '#F44336', '#4FC107', '#F3C111', '#458333',
             '#F50011', '#F30000', '#F39110', '#F3C444', '#010444',
             '#1196F3', '#110336', '#001107', '#011111', '#010333',
             '#F50F01', '#F30F78', '#F39F56', '#F3CF34', '#010F12',
             '#219109', '#F44432', '#4FC765', '#F3C098', '#459012',
             '#F55678', '#F31234', '#210987', '#876543', '#432109',
             '#098765', '#567890', '#901234', '#345678', '#789012', '#123456'])
            // Setup the diferent datasets (this is a multi chart)
            ->values([$abia, $adamawa, $akwaibom, $enugu, $imo,
            	$lagos, $taraba, $yobe, $zamfara, $fct,
            	$anambra, $bauchi, $bayelsa, $benue, $borno,
            	$crossRivers, $delta, $ebonyi, $edo, $ekiti,
            	$gombe, $jigawa, $kaduna, $kano, $katsina, 
            	$kebbi, $kwara, $nasarawa, $niger, $ogun,
            	$ondo, $osun, $oyo, $plateau, $sokoto, $rivers])
            
            // Setup what the values mean
            ->labels(['Abia', 'Adamawa', 'Akwa Ibom', 'Enugu', 'Imo', 
            	'Lagos', 'Taraba', 'Yobe', 'Zamfara', 'FCT',
            	'Anambra', 'Bauchi', 'Bayelsa', 'Benue', 'Borno',
            	'Cross Rivers', 'Delta', 'Ebonyi', 'Edo', 'Ekiti',
            	'Gombe', 'Jigawa', 'Kaduna', 'Kano', 'Katsina',
            	'Kebbi', 'Kwara', 'Nasarawa', 'Niger', 'Ogun',
            	'Ondo', 'Osun', 'Oyo', 'Plateau', 'Sokoto', 'Rivers']);

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

     $ypp = DB::select('select * from users where favparty = ?', ['YPP']);
     $ypp =+ count($ypp);

     $prp = DB::select('select * from users where favparty = ?', ['PRP']);
     $prp =+ count($prp);

     $ydp = DB::select('select * from users where favparty = ?', ['YDP']);
     $ydp =+ count($ydp);

     $nup = DB::select('select * from users where favparty = ?', ['NUP']);
     $nup =+ count($nup);

     $ngp = DB::select('select * from users where favparty = ?', ['NGP']);
     $ngp =+ count($ngp);

     $ppp = DB::select('select * from users where favparty = ?', ['PPP']);
     $ppp =+ count($ppp);

     $nepp = DB::select('select * from users where favparty = ?', ['NEPP']);
     $nepp =+ count($nepp);

     $ndlp = DB::select('select * from users where favparty = ?', ['NDLP']);
     $ndlp =+ count($ndlp);

     $nac = DB::select('select * from users where favparty = ?', ['NAC']);
     $nac =+ count($nac);

     $mmn = DB::select('select * from users where favparty = ?', ['MMN']);
     $mmn =+ count($mmn);

     $idp = DB::select('select * from users where favparty = ?', ['ID']);
     $idp =+ count($idp);

     $gpn = DB::select('select * from users where favparty = ?', ['GPN']);
     $gpn =+ count($gpn);

     $bnpp = DB::select('select * from users where favparty = ?', ['BNPP']);
     $bnpp =+ count($bnpp);

     $apda = DB::select('select * from users where favparty = ?', ['APDA']);
     $apda =+ count($apda);

     $apa = DB::select('select * from users where favparty = ?', ['APA']);
     $apa =+ count($apa);


     $adpm = DB::select('select * from users where favparty = ?', ['ADPM']);
     $adpm =+ count($adpm);

     $acd = DB::select('select * from users where favparty = ?', ['ACD']);
     $acd =+ count($acd);

     $a = DB::select('select * from users where favparty = ?', ['A']);
     $a =+ count($a);

     $cpp = DB::select('select * from users where favparty = ?', ['CPP']);
     $cpp =+ count($cpp);

     $dpp = DB::select('select * from users where favparty = ?', ['DPP']);
     $dpp =+ count($dpp);

     $dpc = DB::select('select * from users where favparty = ?', ['DPC']);
     $dpc =+ count($dpc);

     $upn = DB::select('select * from users where favparty = ?', ['UPN']);
     $upn =+ count($upn);

     $mppp = DB::select('select * from users where favparty = ?', ['MPPP']);
     $mppp =+ count($mppp);

     $nnpp = DB::select('select * from users where favparty = ?', ['NNPP']);
     $nnpp =+ count($nnpp);

     $pdm = DB::select('select * from users where favparty = ?', ['PDM']);
     $pdm =+ count($pdm);

     $fresh = DB::select('select * from users where favparty = ?', ['FRESH']);
     $fresh =+ count($fresh);

     $pdc = DB::select('select * from users where favparty = ?', ['PDC']);
     $pdc =+ count($pdc);

     $sdp = DB::select('select * from users where favparty = ?', ['SDP']);
     $sdp =+ count($sdp);

     $favPartyLine = Charts::create('area', 'highcharts')
     ->elementLabel(' ')
     ->title("Favourity Party")
    ->colors(['#ff0000', '#00ff00', '#0000ff', '#045fff', '#ff0000', '#00ff00', '#0000ff', '#045fff',
    	'#ff0000', '#00ff00', '#0000ff', '#045fff', '#0000ff', '#045fff', '#234567', '#123456', '#1234ff', '#110987', '#045f34',
    	'#234567', '#345678', '#456789', '#567890', '#098765', '#234ff5', '#090909', '#999fff', '#876543', '#432109',
    	'#234012', '#345011', '#456010', '#567009', '#098008', '#234007', '#090006', '#999005', '#876004', '#432003', '#432002','#432001'])
    ->labels(['APC', 'APGA', 'LP', 'PDP', 'HDP', 'UPP', 'ACPN', 'UDP',
     'NCP', 'ADC', 'KP', 'AD', 'AA', 'PPA','YPP', 'PRP', 'YDP', 'NUP', 'NGP', 'PPP', 'NEPP',
     'NDLP', 'NAC', 'MMN', 'ID', 'GPN', 'BNPP', 'APDA','APA', 'ADPM', 'ACD', 'A', 'CPP', 'DPP',
     'DPC', 'UPN', 'MPPP', 'NNPP', 'PDM', 'FRESH', 'PDC', 'SDP'])
    ->values([$apc,$apga,$lp,$pdp,$hdp,$upp,$acpn,$udp,$ncp,$adc,$kp,$ad,$aa,$ppa,$ypp,
    	$prp,$ydp,$nup,$ngp,$ppp,$nepp,$ndlp,$nac,$mmn,$idp,$gpn,$bnpp,$apda,$apa,
    	$adpm,$acd,$a,$cpp,$dpp,$dpc,$upn,$mppp,$nnpp]);

 return $favPartyLine;
 }

}
