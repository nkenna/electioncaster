
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'iVoteiCheck') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
  <!--  <script src="{{ asset('js/states.js') }}"></script>-->
   <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/statelga.js"></script>
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->

 <script >
 $(document).ready(function(){
   
   //list the lga
var Abia = ['Select item...', 'Aba North', 'Aba South', 'Arochukwu', 'Bende', 'Ikwuano', 'Isiala Ngwa North', 'Isiala Ngwa South', 'Isuikwuato', 'Obi Ngwa', 'Ohafia', 'Osisioma', 'Ugwunagbo', 'Ukwa East', 'Ukwa West', 'Umuahia North', 'muahia South', 'Umu Nneochi'];
var Adamawa = ['Select item...', 'Demsa', 'Fufure', 'Ganye', 'Gayuk', 'Gombi', 'Grie', 'Hong', 'Jada', 'Larmurde', 'Madagali', 'Maiha', 'Mayo Belwa', 'Michika', 'Mubi North', 'Mubi South', 'Numan', 'Shelleng', 'Song', 'Toungo', 'Yola North', 'Yola South'];
var AkwaIbom = ['Select item...', 'Abak', 'Eastern Obolo', 'Eket', 'Esit Eket', 'Essien Udim', 'Etim Ekpo', 'Etinan', 'Ibeno', 'Ibesikpo Asutan', 'Ibiono-Ibom', 'Ika', 'Ikono', 'Ikot Abasi', 'Ikot Ekpene', 'Ini', 'Itu', 'Mbo', 'Mkpat-Enin', 'Nsit-Atai', 'Nsit-Ibom', 'Nsit-Ubium', 'Obot Akara', 'Okobo', 'Onna', 'Oron', 'Oruk Anam', 'Udung-Uko', 'Ukanafun', 'Uruan', 'Urue-Offong Oruko', 'Uyo'];
var Anambra = ['Select item...', 'Aguata', 'Anambra East', 'Anambra West', 'Anaocha', 'Awka North', 'Awka South', 'Ayamelum', 'Dunukofia', 'Ekwusigo', 'Idemili North', 'Idemili South', 'Ihiala', 'Njikoka', 'Nnewi North', 'Nnewi South', 'Ogbaru', 'Onitsha North', 'Onitsha South', 'Orumba North', 'Orumba South', 'Oyi'];
var Bauchi = ['Select item...', 'Alkaleri', 'Bauchi', 'Bogoro', 'Damban', 'Darazo', 'Dass', 'Gamawa', 'Ganjuwa', 'Giade', 'Itas-Gadau', 'Jama are', 'Katagum', 'Kirfi', 'Misau', 'Ningi', 'Shira', 'Tafawa Balewa', ' Toro', ' Warji', ' Zaki'];
var Bayelsa = ['Select item...', 'Brass', 'Ekeremor', 'Kolokuma Opokuma', 'Nembe', 'Ogbia', 'Sagbama', 'Southern Ijaw', 'Yenagoa'];
var Benue = ['Select item...', 'Agatu', 'Apa', 'Ado', 'Buruku', 'Gboko', 'Guma', 'Gwer East', 'Gwer West', 'Katsina-Ala', 'Konshisha', 'Kwande', 'Logo', 'Makurdi', 'Obi', 'Ogbadibo', 'Ohimini', 'Oju', 'Okpokwu', 'Oturkpo', 'Tarka', 'Ukum', 'Ushongo', 'Vandeikya'];
var Borno = ['Select item...', 'Abadam', 'Askira-Uba', 'Bama', 'Bayo', 'Biu', 'Chibok', 'Damboa', 'Dikwa', 'Gubio', 'Guzamala', 'Gwoza', 'Hawul', 'Jere', 'Kaga', 'Kala-Balge', 'Konduga', 'Kukawa', 'Kwaya Kusar', 'Mafa', 'Magumeri', 'Maiduguri', 'Marte', 'Mobbar', 'Monguno', 'Ngala', 'Nganzai', 'Shani'];
var CrossRiver = ['Select item...', 'Abi', 'Akamkpa', 'Akpabuyo', 'Bakassi', 'Bekwarra', 'Biase', 'Boki', 'Calabar Municipal', 'Calabar South', 'Etung', 'Ikom', 'Obanliku', 'Obubra', 'Obudu', 'Odukpani', 'Ogoja', 'Yakuur', 'Yala'];
var Delta = ['Select item...', 'Aniocha North', 'Aniocha South', 'Bomadi', 'Burutu', 'Ethiope East', 'Ethiope West', 'Ika North East', 'Ika South', 'Isoko North', 'Isoko South', 'Ndokwa East', 'Ndokwa West', 'Okpe', 'Oshimili North', 'Oshimili South', 'Patani', 'Sapele', 'Udu', 'Ughelli North', 'Ughelli South', 'Ukwuani', 'Uvwie', 'Warri North', 'Warri South', 'Warri South West'];
var Ebonyi = ['Select item...', 'Abakaliki', 'Afikpo North', 'Afikpo South', 'Ebonyi', 'Ezza North', 'Ezza South', 'Ikwo', 'Ishielu', 'Ivo', 'Izzi', 'Ohaozara', 'Ohaukwu', 'Onicha'];
var Edo = ['Select item...', 'Akoko-Edo', 'Egor', 'Esan Central', 'Esan North-East', 'Esan South-East', 'Esan West', 'Etsako Central', 'Etsako East', 'Etsako West', 'Igueben', 'Ikpoba Okha', 'Orhionmwon', 'Oredo', 'Ovia North-East', 'Ovia South-West', 'Owan East', 'Owan West', 'Uhunmwonde'];
var Ekiti = ['Select item...', 'Ado Ekiti', 'Efon', 'Ekiti East', 'Ekiti South-West', 'Ekiti West', 'Emure', 'Gbonyin', 'Ido Osi', 'Ijero', 'Ikere', 'Ikole', 'Ilejemeje', 'Irepodun-Ifelodun', 'Ise-Orun', 'Moba', 'Oye'];
var Enugu = ['Select item...', 'Aninri', 'Awgu', 'Enugu East', 'Enugu North', 'Enugu South', 'Ezeagu', 'Igbo Etiti', 'Igbo Eze North', 'Igbo Eze South', 'Isi Uzo', 'Nkanu East', 'Nkanu West', 'Nsukka', 'Oji River', 'Udenu', 'Udi', 'Uzo Uwani'];
var FCT = ['Select item...', 'Abaji', 'Bwari', 'Gwagwalada', 'Kuje', 'Kwali', 'Municipal Area Council'];
var Gombe = ['Select item...', 'Akko', 'Balanga', 'Billiri', 'Dukku', 'Funakaye', 'Gombe', 'Kaltungo', 'Kwami', 'Nafada', 'Shongom', 'Yamaltu-Deba'];
var Imo = ['Select item...', 'Aboh Mbaise', 'Ahiazu Mbaise', 'Ehime Mbano', 'Ezinihitte', 'Ideato North', 'Ideato South', 'Ihitte-Uboma', 'Ikeduru', 'Isiala Mbano', 'Isu', 'Mbaitoli', 'Ngor Okpala', 'Njaba', 'Nkwerre', 'Nwangele', 'Obowo', 'Oguta', 'Ohaji-Egbema', 'Okigwe', 'Orlu', 'Orsu', 'Oru East', 'Oru West', 'Owerri Municipal', 'Owerri North', 'Owerri West', 'Unuimo'];
var Jigawa = ['Select item...', 'Auyo', 'Babura', 'Biriniwa', 'Birnin Kudu', 'Buji', 'Dutse', 'Gagarawa', 'Garki', 'Gumel', 'Guri', 'Gwaram', 'Gwiwa', 'Hadejia', 'Jahun', 'Kafin Hausa', 'Kazaure', 'Kiri Kasama', 'Kiyawa', 'Kaugama', 'Maigatari', 'Malam Madori', 'Miga', 'Ringim', 'Roni', 'Sule Tankarkar', 'Taura', 'Yankwashi'];
var Kaduna = ['Select item...', 'Birnin Gwari', 'Chikun', 'Giwa', 'Igabi', 'Ikara', 'Jaba', 'Jema a', 'Kachia', 'Kaduna North', 'Kaduna South', 'Kagarko', 'Kajuru', 'Kaura', 'Kauru', 'Kubau', 'Kudan', 'Lere', 'Makarfi', 'Sabon Gari', 'Sanga', 'Soba', 'Zangon Kataf', 'Zaria'];
var Kano = ['Select item...', 'Ajingi', 'Albasu', 'Bagwai', 'Bebeji', 'Bichi', 'Bunkure', 'Dala', 'Dambatta', 'Dawakin Kudu', 'Dawakin Tofa', 'Doguwa', 'Fagge', 'Gabasawa', 'Garko', 'Garun Mallam', 'Gaya', 'Gezawa', 'Gwale', 'Gwarzo', 'Kabo', 'Kano Municipal', 'Karaye', 'Kibiya', 'Kiru', 'Kumbotso', 'Kunchi', 'Kura', 'Madobi', 'Makoda', 'Minjibir', 'Nasarawa', 'Rano', 'Rimin Gado', 'Rogo', 'Shanono', 'Sumaila', 'Takai', 'Tarauni', 'Tofa', 'Tsanyawa', 'Tudun Wada', 'Ungogo', 'Warawa', 'Wudil'];
var Katsina = ['Select item...', 'Bakori', 'Batagarawa', 'Batsari', 'Baure', 'Bindawa', 'Charanchi', 'Dandume', 'Danja', 'Dan Musa', 'Daura', 'Dutsi', 'Dutsin Ma', 'Faskari', 'Funtua', 'Ingawa', 'Jibia', 'Kafur', 'Kaita', 'Kankara', 'Kankia', 'Katsina', 'Kurfi', 'Kusada', 'Mai Adua', 'Malumfashi', 'Mani', 'Mashi', 'Matazu', 'Musawa', 'Rimi', 'Sabuwa', 'Safana', 'Sandamu', 'Zango'];
var Kebbi = ['Select item...', 'Aleiro', 'Arewa Dandi', 'Argungu', 'Augie', 'Bagudo', 'Birnin Kebbi', 'Bunza', 'Dandi', 'Fakai', 'Gwandu', 'Jega', 'Kalgo', 'Koko Besse', 'Maiyama', 'Ngaski', 'Sakaba', 'Shanga', 'Suru', 'Wasagu Danko', 'Yauri', 'Zuru'];
var Kogi = ['Select item...', 'Adavi', 'Ajaokuta', 'Ankpa', 'Bassa', 'Dekina', 'Ibaji', 'Idah', 'Igalamela Odolu', 'Ijumu', 'Kabba Bunu', 'Kogi', 'Lokoja', 'Mopa Muro', 'Ofu', 'Ogori Magongo', 'Okehi', 'Okene', 'Olamaboro', 'Omala', 'Yagba East', 'Yagba West'];
var Kwara = ['Select item...', 'Asa', 'Baruten', 'Edu', 'Ekiti', 'Ifelodun', 'Ilorin East', 'Ilorin South', 'Ilorin West', 'Irepodun', 'Isin', 'Kaiama', 'Moro', 'Offa', 'Oke Ero', 'Oyun', 'Pategi'];
var Lagos = ['Select item...', 'Agege', 'Ajeromi-Ifelodun', 'Alimosho', 'Amuwo-Odofin', 'Apapa', 'Badagry', 'Epe', 'Eti Osa', 'Ibeju-Lekki', 'Ifako-Ijaiye', 'Ikeja', 'Ikorodu', 'Kosofe', 'Lagos Island', 'Lagos Mainland', 'Mushin', 'Ojo', 'Oshodi-Isolo', 'Shomolu', 'Surulere'];
var Nassarawa = ['Select item...', 'Akwanga', 'Awe', 'Doma', 'Karu', 'Keana', 'Keffi', 'Kokona', 'Lafia', 'Nasarawa', 'Nasarawa Egon', 'Obi', 'Toto', 'Wamba'];
var Niger = ['Select item...', 'Agaie', 'Agwara', 'Bida', 'Borgu', 'Bosso', 'Chanchaga', 'Edati', 'Gbako', 'Gurara', 'Katcha', 'Kontagora', 'Lapai', 'Lavun', 'Magama', 'Mariga', 'Mashegu', 'Mokwa', 'Moya', 'Paikoro', 'Rafi', 'Rijau', 'Shiroro', 'Suleja', 'Tafa', 'Wushishi'];
var Ogun = ['Select item...', 'Abeokuta North', 'Abeokuta South', 'Ado-Odo Ota', 'Egbado North', 'Egbado South', 'Ewekoro', 'Ifo', 'Ijebu East', 'Ijebu North', 'Ijebu North East', 'Ijebu Ode', 'Ikenne', 'Imeko Afon', 'Ipokia', 'Obafemi Owode', 'Odeda', 'Odogbolu', 'Ogun Waterside', 'Remo North', 'Shagamu'];
var Ondo = ['Select item...', 'Akoko North-East', 'Akoko North-West', 'Akoko South-West', 'Akoko South-East', 'Akure North', 'Akure South', 'Ese Odo', 'Idanre', 'Ifedore', 'Ilaje', 'Ile Oluji-Okeigbo', 'Irele', 'Odigbo', 'Okitipupa', 'Ondo East', 'Ondo West', 'Ose', 'Owo'];
var Osun = ['Select item...', 'Atakunmosa East', 'Atakunmosa West', 'Aiyedaade', 'Aiyedire', 'Boluwaduro', 'Boripe', 'Ede North', 'Ede South', 'Ife Central', 'Ife East', 'Ife North', 'Ife South', 'Egbedore', 'Ejigbo', 'Ifedayo', 'Ifelodun', 'Ila', 'Ilesa East', 'Ilesa West', 'Irepodun', 'Irewole', 'Isokan', 'Iwo', 'Obokun', 'Odo Otin', 'Ola Oluwa', 'Olorunda', 'Oriade', 'Orolu', 'Osogbo'];
var Oyo = ['Select item...', 'Afijio', 'Akinyele', 'Atiba', 'Atisbo', 'Egbeda', 'Ibadan North', 'Ibadan North-East', 'Ibadan North-West', 'Ibadan South-East', 'Ibadan South-West', 'Ibarapa Central', 'Ibarapa East', 'Ibarapa North', 'Ido', 'Irepo', 'Iseyin', 'Itesiwaju', 'Iwajowa', 'Kajola', 'Lagelu', 'Ogbomosho North', 'Ogbomosho South', 'Ogo Oluwa', 'Olorunsogo', 'Oluyole', 'Ona Ara', 'Orelope', 'Ori Ire', 'Oyo', 'Oyo East', 'Saki East', 'Saki West', 'Surulere'];
var Plateau = ['Select item...', 'Bokkos', 'Barkin Ladi', 'Bassa', 'Jos East', 'Jos North', 'Jos South', 'Kanam', 'Kanke', 'Langtang South', 'Langtang North', 'Mangu', 'Mikang', 'Pankshin', 'Qua an Pan', 'Riyom', 'Shendam', 'Wase'];
var Rivers = ['Select item...', 'Abua Odual', 'Ahoada East', 'Ahoada West', 'Akuku-Toru', 'Andoni', 'Asari-Toru', 'Bonny', 'Degema', 'Eleme', 'Emuoha', 'Etche', 'Gokana', 'Ikwerre', 'Khana', 'Obio Akpor', 'Ogba Egbema Ndoni', 'Ogu Bolo', 'Okrika', 'Omuma', 'Opobo Nkoro', 'Oyigbo', 'Port Harcourt', 'Tai'];
var Sokoto = ['Select item...', 'Binji', 'Bodinga', 'Dange Shuni', 'Gada', 'Goronyo', 'Gudu', 'Gwadabawa', 'Illela', 'Isa', 'Kebbe', 'Kware', 'Rabah', 'Sabon Birni', 'Shagari', 'Silame', 'Sokoto North', 'Sokoto South', 'Tambuwal', 'Tangaza', 'Tureta', 'Wamako', 'Wurno', 'Yabo'];
var Taraba = ['Select item...', 'Ardo Kola', 'Bali', 'Donga', 'Gashaka', 'Gassol', 'Ibi', 'Jalingo', 'Karim Lamido', 'Kumi', 'Lau', 'Sardauna', 'Takum', 'Ussa', 'Wukari', 'Yorro', 'Zing'];
var Yobe = ['Select item...', 'Bade', 'Bursari', 'Damaturu', 'Fika', 'Fune', 'Geidam', 'Gujba', 'Gulani', 'Jakusko', 'Karasuwa', 'Machina', 'Nangere', 'Nguru', 'Potiskum', 'Tarmuwa', 'Yunusari', 'Yusufari'];

var Zamfara = ['Select item...', 'Anka', 'Bakura', 'Birnin Magaji Kiyaw', 'Bukkuyum', 'Bungudu', 'Gummi', 'Gusau', 'Kaura Namoda', 'Maradun', 'Maru', 'Shinkafi', 'Talata Mafara', 'Chafe', 'Zurmi'];


//populating resident lga
     $("#resident").change(function(){

           if($("#resident").val() == 'Ondo'){
          $("#residentlga").html('');
     for  (var i = 0; i < Ondo.length; i++) {
$("#residentlga").append('<option value='+Ondo[i]+'>'+Ondo[i]+'</option>');
       }
    }

       if($("#resident").val() == 'Osun'){
          $("#residentlga").html('');
     for  (var i = 0; i < Osun.length; i++) {
$("#residentlga").append('<option value='+Osun[i]+'>'+Osun[i]+'</option>');
       }
    }

       if($("#resident").val() == 'Oyo'){
          $("#residentlga").html('');
     for  (var i = 0; i < Oyo.length; i++) {
$("#residentlga").append('<option value='+Oyo[i]+'>'+Oyo[i]+'</option>');
       }
    }

       if($("#resident").val() == 'Plateau'){
          $("#residentlga").html('');
     for  (var i = 0; i < Plateau.length; i++) {
$("#residentlga").append('<option value='+Plateau[i]+'>'+Plateau[i]+'</option>');
       }
    }

       if($("#resident").val() == 'Rivers'){
          $("#residentlga").html('');
     for  (var i = 0; i < Rivers.length; i++) {
$("#residentlga").append('<option value='+Rivers[i]+'>'+Rivers[i]+'</option>');
       }
    }

       if($("#resident").val() == 'Sokoto'){
          $("#residentlga").html('');
     for  (var i = 0; i < Sokoto.length; i++) {
$("#residentlga").append('<option value='+Sokoto[i]+'>'+Sokoto[i]+'</option>');
       }
    }

       if($("#resident").val() == 'Taraba'){
          $("#residentlga").html('');
     for  (var i = 0; i < Taraba.length; i++) {
$("#residentlga").append('<option value='+Taraba[i]+'>'+Taraba[i]+'</option>');
       }
    }

       if($("#resident").val() == 'Yobe'){
          $("#residentlga").html('');
     for  (var i = 0; i < Yobe.length; i++) {
$("#residentlga").append('<option value='+Yobe[i]+'>'+Yobe[i]+'</option>');
       }
    }


          if($("#resident").val() == 'Kebbi'){
          $("#residentlga").html('');
     for  (var i = 0; i < Kebbi.length; i++) {
$("#residentlga").append('<option value='+Kebbi[i]+'>'+Kebbi[i]+'</option>');
       }
    }

      if($("#resident").val() == 'Kwara'){
          $("#residentlga").html('');
     for  (var i = 0; i < Kwara.length; i++) {
$("#residentlga").append('<option value='+Kwara[i]+'>'+Kwara[i]+'</option>');
       }
    }

      if($("#resident").val() == 'Nassarawa'){
          $("#residentlga").html('');
     for  (var i = 0; i < Nassarawa.length; i++) {
$("#residentlga").append('<option value='+Nassarawa[i]+'>'+Nassarawa[i]+'</option>');
       }
    }

      if($("#resident").val() == 'Niger'){
          $("#residentlga").html('');
     for  (var i = 0; i < Niger.length; i++) {
$("#residentlga").append('<option value='+Niger[i]+'>'+Niger[i]+'</option>');
       }
    }

      if($("#resident").val() == 'Ogun'){
          $("#residentlga").html('');
     for  (var i = 0; i < Ogun.length; i++) {
$("#residentlga").append('<option value='+Ogun[i]+'>'+Ogun[i]+'</option>');
       }
    }


         if($("#resident").val() == 'Imo'){
          $("#residentlga").html('');
     for  (var i = 0; i < Imo.length; i++) {
$("#residentlga").append('<option value='+Imo[i]+'>'+Imo[i]+'</option>');
       }
    }

     if($("#resident").val() == 'Jigawa'){
          $("#residentlga").html('');
     for  (var i = 0; i < Jigawa.length; i++) {
$("#residentlga").append('<option value='+Jigawa[i]+'>'+Jigawa[i]+'</option>');
       }
    }

     if($("#resident").val() == 'Kaduna'){
          $("#residentlga").html('');
     for  (var i = 0; i < Kaduna.length; i++) {
$("#residentlga").append('<option value='+Kaduna[i]+'>'+Kaduna[i]+'</option>');
       }
    }

     if($("#resident").val() == 'Kano'){
          $("#residentlga").html('');
     for  (var i = 0; i < Kano.length; i++) {
$("#residentlga").append('<option value='+Kano[i]+'>'+Kano[i]+'</option>');
       }
    }


     if($("#resident").val() == 'Katsina'){
          $("#residentlga").html('');
     for  (var i = 0; i < Katsina.length; i++) {
$("#residentlga").append('<option value='+Katsina[i]+'>'+Katsina[i]+'</option>');
       }
    }

  if($("#resident").val() == 'Ebonyi'){
          $("#residentlga").html('');
     for  (var i = 0; i < Ebonyi.length; i++) {
$("#residentlga").append('<option value='+Ebonyi[i]+'>'+Ebonyi[i]+'</option>');
       }
    }

      if($("#resident").val() == 'Edo'){
          $("#residentlga").html('');
     for  (var i = 0; i < Edo.length; i++) {
$("#residentlga").append('<option value='+Edo[i]+'>'+Edo[i]+'</option>');
       }
    }

      if($("#resident").val() == 'Ekiti'){
          $("#residentlga").html('');
     for  (var i = 0; i < Ekiti.length; i++) {
$("#residentlga").append('<option value='+Ekiti[i]+'>'+Ekiti[i]+'</option>');
       }
    }

      if($("#resident").val() == 'FCT'){
          $("#residentlga").html('');
     for  (var i = 0; i < FCT.length; i++) {
$("#residentlga").append('<option value='+FCT[i]+'>'+FCT[i]+'</option>');
       }
    }

      if($("#resident").val() == 'Gombe'){
          $("#residentlga").html('');
     for  (var i = 0; i < Gombe.length; i++) {
$("#residentlga").append('<option value='+Gombe[i]+'>'+Gombe[i]+'</option>');
       }
    }


        if($("#resident").val() == 'Bayelsa'){
          $("#residentlga").html('');
     for  (var i = 0; i < Bayelsa.length; i++) {
$("#residentlga").append('<option value='+Bayelsa[i]+'>'+Bayelsa[i]+'</option>');
       }
    }

    if($("#resident").val() == 'Benue'){
          $("#residentlga").html('');
     for  (var i = 0; i < Benue.length; i++) {
$("#residentlga").append('<option value='+Benue[i]+'>'+Benue[i]+'</option>');
       }
    }

    if($("#resident").val() == 'Borno'){
          $("#residentlga").html('');
     for  (var i = 0; i < Borno.length; i++) {
$("#residentlga").append('<option value='+Borno[i]+'>'+Borno[i]+'</option>');
       }
    }

    if($("#resident").val() == 'CrossRiver'){
          $("#residentlga").html('');
     for  (var i = 0; i < CrossRiver.length; i++) {
$("#residentlga").append('<option value='+CrossRiver[i]+'>'+CrossRiver[i]+'</option>');
       }
    }

    if($("#resident").val() == 'Delta'){
          $("#residentlga").html('');
     for  (var i = 0; i < Delta.length; i++) {
$("#residentlga").append('<option value='+Delta[i]+'>'+Delta[i]+'</option>');
       }
    }
       
 if($("#resident").val() == 'Abia'){
          $("#residentlga").html('');
     for  (var i = 0; i < Abia.length; i++) {
$("#residentlga").append('<option value='+Abia[i]+'>'+Abia[i]+'</option>');
       }
    }

     if($("#resident").val() == 'Adamawa'){
          $("#residentlga").html('');
     for  (var i = 0; i < Adamawa.length; i++) {
$("#residentlga").append('<option value='+Adamawa[i]+'>'+Adamawa[i]+'</option>');
       }
    }

     if($("#resident").val() == 'AkwaIbom'){
          $("#residentlga").html('');
     for  (var i = 0; i < AkwaIbom.length; i++) {
$("#residentlga").append('<option value='+AkwaIbom[i]+'>'+AkwaIbom[i]+'</option>');
       }
    }

     if($("#resident").val() == 'Anambra'){
          $("#residentlga").html('');
     for  (var i = 0; i < Anambra.length; i++) {
$("#residentlga").append('<option value='+Anambra[i]+'>'+Anambra[i]+'</option>');
       }
    }

     if($("#resident").val() == 'Bauchi'){
          $("#residentlga").html('');
     for  (var i = 0; i < Bauchi.length; i++) {
$("#residentlga").append('<option value='+Bauchi[i]+'>'+Bauchi[i]+'</option>');
       }
    }


        if($("#resident").val() == 'Zamfara'){
            $("#residentlga").html('');
     for  (var i = 0; i < Zamfara.length; i++) {
$("#residentlga").append('<option value='+Zamfara[i]+'>'+Zamfara[i]+'</option>');
       }
    }

     if($("#resident").val() == 'Lagos'){
          $("#residentlga").html('');
     for  (var i = 0; i < Lagos.length; i++) {
$("#residentlga").append('<option value='+Lagos[i]+'>'+Lagos[i]+'</option>');
       }
    }

     if($("#resident").val() == 'Enugu'){
          $("#residentlga").html('');
     for  (var i = 0; i < Enugu.length; i++) {
$("#residentlga").append('<option value='+Enugu[i]+'>'+Enugu[i]+'</option>');
       }
    }

     if($("#resident").val() == 'Kogi'){
          $("#residentlga").html('');
     for  (var i = 0; i < Kogi.length; i++) {
$("#residentlga").append('<option value='+Kogi[i]+'>'+Kogi[i]+'</option>');
       }
    }
})
     //populating resident lga ends

     //populating origin lga
  $("#origin").change(function(){


           if($("#origin").val() == 'Ondo'){
          $("#originlga").html('');
     for  (var i = 0; i < Ondo.length; i++) {
$("#originlga").append('<option value='+Ondo[i]+'>'+Ondo[i]+'</option>');
       }
    }

       if($("#origin").val() == 'Osun'){
          $("#originlga").html('');
     for  (var i = 0; i < Osun.length; i++) {
$("#originlga").append('<option value='+Osun[i]+'>'+Osun[i]+'</option>');
       }
    }

       if($("#origin").val() == 'Oyo'){
          $("#originlga").html('');
     for  (var i = 0; i < Oyo.length; i++) {
$("#originlga").append('<option value='+Oyo[i]+'>'+Oyo[i]+'</option>');
       }
    }

       if($("#origin").val() == 'Plateau'){
          $("#originlga").html('');
     for  (var i = 0; i < Plateau.length; i++) {
$("#originlga").append('<option value='+Plateau[i]+'>'+Plateau[i]+'</option>');
       }
    }

       if($("#origin").val() == 'Rivers'){
          $("#originlga").html('');
     for  (var i = 0; i < Rivers.length; i++) {
$("#originlga").append('<option value='+Rivers[i]+'>'+Rivers[i]+'</option>');
       }
    }

       if($("#origin").val() == 'Sokoto'){
          $("#originlga").html('');
     for  (var i = 0; i < Sokoto.length; i++) {
$("#originlga").append('<option value='+Sokoto[i]+'>'+Sokoto[i]+'</option>');
       }
    }

       if($("#origin").val() == 'Taraba'){
          $("#originlga").html('');
     for  (var i = 0; i < Taraba.length; i++) {
$("#originlga").append('<option value='+Taraba[i]+'>'+Taraba[i]+'</option>');
       }
    }

       if($("#origin").val() == 'Yobe'){
          $("#originlga").html('');
     for  (var i = 0; i < Yobe.length; i++) {
$("#originlga").append('<option value='+Yobe[i]+'>'+Yobe[i]+'</option>');
       }
    }


          if($("#origin").val() == 'Kebbi'){
          $("#originlga").html('');
     for  (var i = 0; i < Kebbi.length; i++) {
$("#originlga").append('<option value='+Kebbi[i]+'>'+Kebbi[i]+'</option>');
       }
    }

      if($("#origin").val() == 'Kwara'){
          $("#originlga").html('');
     for  (var i = 0; i < Kwara.length; i++) {
$("#originlga").append('<option value='+Kwara[i]+'>'+Kwara[i]+'</option>');
       }
    }

      if($("#origin").val() == 'Nassarawa'){
          $("#originlga").html('');
     for  (var i = 0; i < Nassarawa.length; i++) {
$("#originlga").append('<option value='+Nassarawa[i]+'>'+Nassarawa[i]+'</option>');
       }
    }

      if($("#origin").val() == 'Niger'){
          $("#originlga").html('');
     for  (var i = 0; i < Niger.length; i++) {
$("#originlga").append('<option value='+Niger[i]+'>'+Niger[i]+'</option>');
       }
    }

      if($("#origin").val() == 'Ogun'){
          $("#originlga").html('');
     for  (var i = 0; i < Ogun.length; i++) {
$("#originlga").append('<option value='+Ogun[i]+'>'+Ogun[i]+'</option>');
       }
    }


         if($("#origin").val() == 'Imo'){
          $("#originlga").html('');
     for  (var i = 0; i < Imo.length; i++) {
$("#originlga").append('<option value='+Imo[i]+'>'+Imo[i]+'</option>');
       }
    }

     if($("#origin").val() == 'Jigawa'){
          $("#originlga").html('');
     for  (var i = 0; i < Jigawa.length; i++) {
$("#originlga").append('<option value='+Jigawa[i]+'>'+Jigawa[i]+'</option>');
       }
    }

     if($("#origin").val() == 'Kaduna'){
          $("##originlga").html('');
     for  (var i = 0; i < Kaduna.length; i++) {
$("##originlga").append('<option value='+Kaduna[i]+'>'+Kaduna[i]+'</option>');
       }
    }

     if($("#origin").val() == 'Kano'){
          $("#originlga").html('');
     for  (var i = 0; i < Kano.length; i++) {
$("#originlga").append('<option value='+Kano[i]+'>'+Kano[i]+'</option>');
       }
    }


     if($("#origin").val() == 'Katsina'){
          $("#originlga").html('');
     for  (var i = 0; i < Katsina.length; i++) {
$("#originlga").append('<option value='+Katsina[i]+'>'+Katsina[i]+'</option>');
       }
    }

  if($("#origin").val() == 'Ebonyi'){
          $("#originlga").html('');
     for  (var i = 0; i < Ebonyi.length; i++) {
$("#originlga").append('<option value='+Ebonyi[i]+'>'+Ebonyi[i]+'</option>');
       }
    }

      if($("#origin").val() == 'Edo'){
          $("#originlga").html('');
     for  (var i = 0; i < Edo.length; i++) {
$("#originlga").append('<option value='+Edo[i]+'>'+Edo[i]+'</option>');
       }
    }

      if($("#origin").val() == 'Ekiti'){
          $("#originlga").html('');
     for  (var i = 0; i < Ekiti.length; i++) {
$("#originlga").append('<option value='+Ekiti[i]+'>'+Ekiti[i]+'</option>');
       }
    }

      if($("#origin").val() == 'FCT'){
          $("#originlga").html('');
     for  (var i = 0; i < FCT.length; i++) {
$("#originlga").append('<option value='+FCT[i]+'>'+FCT[i]+'</option>');
       }
    }

      if($("#origin").val() == 'Gombe'){
          $("#originlga").html('');
     for  (var i = 0; i < Gombe.length; i++) {
$("#originlga").append('<option value='+Gombe[i]+'>'+Gombe[i]+'</option>');
       }
    }


        if($("#origin").val() == 'Bayelsa'){
          $("#originlga").html('');
     for  (var i = 0; i < Bayelsa.length; i++) {
$("#originlga").append('<option value='+Bayelsa[i]+'>'+Bayelsa[i]+'</option>');
       }
    }

    if($("#origin").val() == 'Benue'){
          $("#originlga").html('');
     for  (var i = 0; i < Benue.length; i++) {
$("#originlga").append('<option value='+Benue[i]+'>'+Benue[i]+'</option>');
       }
    }

    if($("#origin").val() == 'Borno'){
          $("#originlga").html('');
     for  (var i = 0; i < Borno.length; i++) {
$("#originlga").append('<option value='+Borno[i]+'>'+Borno[i]+'</option>');
       }
    }

    if($("#origin").val() == 'CrossRiver'){
          $("#originlga").html('');
     for  (var i = 0; i < CrossRiver.length; i++) {
$("#originlga").append('<option value='+CrossRiver[i]+'>'+CrossRiver[i]+'</option>');
       }
    }

    if($("#origin").val() == 'Delta'){
          $("#originlga").html('');
     for  (var i = 0; i < Delta.length; i++) {
$("#originlga").append('<option value='+Delta[i]+'>'+Delta[i]+'</option>');
       }
    }
       
 if($("#origin").val() == 'Abia'){
          $("#originlga").html('');
     for  (var i = 0; i < Abia.length; i++) {
$("#originlga").append('<option value='+Abia[i]+'>'+Abia[i]+'</option>');
       }
    }

     if($("#origin").val() == 'Adamawa'){
          $("#originlga").html('');
     for  (var i = 0; i < Adamawa.length; i++) {
$("#originlga").append('<option value='+Adamawa[i]+'>'+Adamawa[i]+'</option>');
       }
    }

     if($("#origin").val() == 'AkwaIbom'){
          $("#originlga").html('');
     for  (var i = 0; i < AkwaIbom.length; i++) {
$("#originlga").append('<option value='+AkwaIbom[i]+'>'+AkwaIbom[i]+'</option>');
       }
    }

     if($("#origin").val() == 'Anambra'){
          $("#originlga").html('');
     for  (var i = 0; i < Anambra.length; i++) {
$("#originlga").append('<option value='+Anambra[i]+'>'+Anambra[i]+'</option>');
       }
    }

     if($("#origin").val() == 'Bauchi'){
          $("#originlga").html('');
     for  (var i = 0; i < Bauchi.length; i++) {
$("#originlga").append('<option value='+Bauchi[i]+'>'+Bauchi[i]+'</option>');
       }
    }
       
        if($("#origin").val() == 'Zamfara'){
            $("#originlga").html('');
     for  (var i = 0; i < Zamfara.length; i++) {
$("#originlga").append('<option value='+Zamfara[i]+'>'+Zamfara[i]+'</option>');
       }
    }

     if($("#origin").val() == 'Lagos'){
          $("#originlga").html('');
     for  (var i = 0; i < Lagos.length; i++) {
$("#originlga").append('<option value='+Lagos[i]+'>'+Lagos[i]+'</option>');
       }
    }

     if($("#origin").val() == 'Enugu'){
          $("#originlga").html('');
     for  (var i = 0; i < Enugu.length; i++) {
$("#originlga").append('<option value='+Enugu[i]+'>'+Enugu[i]+'</option>');
       }
    }

     if($("#origin").val() == 'Kogi'){
          $("#originlga").html('');
     for  (var i = 0; i < Kogi.length; i++) {
$("#originlga").append('<option value='+Kogi[i]+'>'+Kogi[i]+'</option>');
       }
    }
})



     //populating origin lga ends
 })
 </script>



</head>
<body>
 <button id="btn" class="btn btn-primary">
                                   click
                                </button>

<form>

                                <select id="sel" name="sel">
                                    <option value="a">AAAA</option>
                                    <option value="b">bbbb</option>
                                    <option value="c">cccc</option>
                                </select>

                                <select id="sel2" name="sel">


                                    
                                </select>
                                <div id="check"><p>uuuuu</p></div>
</form>
                               
<div id="app">

        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">UserName</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>


                          <div class="form-group{{ $errors->has('dod') ? ' has-error' : '' }}">
                            <label for="dod" class="col-md-4 control-label">Date of Birth</label>

                            <div class="col-md-6">
                                <input id="dod" type="date" class="form-control" name="dod" required>

                                @if ($errors->has('dod'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dod') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                          <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6">
                               <select id="gender" name="gender">
                                <option value="" selected="selected">Select Gender</option>   
                                 <option value="FEMALE">FEMALE</option>
                                 <option value="MALE">MALE</option>
                               </select>

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('occupation') ? ' has-error' : '' }}">
                            <label for="occupation" class="col-md-4 control-label">Occupation</label>

                            <div class="col-md-6">
                               <select id="occupation" name="occupation">
                                <option value="" selected="selected">Select Occupation</option>   
                                 <option value="Student">Student</option>
                                 <option value="Farmer">Farmer</option>
                                 <option value="Civil Servant">Civil Servant</option>
                                 <option value="Public Servant">Public Servant</option>
                                 <option value="Politician">Politician</option>
                                 <option value="Business">Business Man</option>
                                 <option value="Skilled">Skilled/Tradesman</option>
                                 <option value="Self Employed">Self Employed</option>
                                 <option value="Trader">Trader</option>
                                 <option value="Teacher">Teacher/Lecturer</option>

                               </select>

                                @if ($errors->has('occupation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('occupation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('favparty') ? ' has-error' : '' }}">
                            <label for="favparty" class="col-md-4 control-label">Favourite Party</label>

                            <div class="col-md-6">
                                <select id="favparty" name="favparty">
                                    
     <option value="" selected="selected">- Select Favorite Party</option>

     <option value="PDP">Peoples Democratic Party</option>
     <option value="APC">All Progressive Congress</option>
     <option value="APGA">All Progressive Grand Alliance</option>
     <option value="ACD">Advanced Congress of Democrats</option>
     <option value="A">Accord</option>
     <option value="ID">Independent Democrats</option>
     <option value="ACPN">Alliance Congress Party of Nigeria</option>
     <option value="APA">African Peoples Alliance</option>
     <option value="CPP">Citizens Popular Party</option>
     <option value="AA">Action Alliance</option>
     <option value="DPP">Democratic Peoples Party</option>
     <option value="DPC">Democratic Peoples Congress</option>
     <option value="AD">Alliance for Democracy</option>
     <option value="KP">Kowa Party</option>
     <option value="LP">Labour Party</option>
     <option value="UPN">Unity Party of Nigeria</option>
     <option value="MPPP">Mega Progressive Peoples Party</option>
     <option value="NCP">National Conscience Party</option>
     <option value="NNPP">New Nigeria Peoples Party</option>
     <option value="PPA">progressive Peoples Alliance</option>
     <option value="PDM">Peoples Democratic Movement</option>
     <option value="FRESH">Fresh Democractic Party</option>
     <option value="HDP">Hope Democratic Party</option>
     <option value="PPN">Peoples Party of Nigeria</option>
     <option value="UPP">United Progressive Party</option>
     <option value="PDC">People For Democratic Change</option>
     <option value="ADC">African Democractic Congress</option>
     <option value="YDP">Youth Democratic Party</option>
     <option value="SDP">Social Democratic Party</option>
     <option value="UDP">United Democratic Party</option>

     <option value="ADP">Action Democratic Party</option>
     <option value="YPP">Youth Progressive Party</option>
     <option value="PRP">Peoples Redemption Party</option>
     <option value="YDP">Peoples Progressive Party</option>
     <option value="NUP">National Unity Party</option>
     <option value="NGP">New Generation Party of Nigeria</option>
     <option value="YDP">Youth Democratic Party</option>
     <option value="NEPP">Nigeria Elements Progressive Party</option>
     <option value="NDLP">Nigeria Democratic Liberty Party</option>
     <option value="NAC">National Action Council</option>
     <option value="MMN">Masses Movement of Nigeria</option>
     <option value="ID">Independent Democracts</option>
     <option value="GPN">Green Party of Nigeria</option>
     <option value="BNPP">Better Nigeria Progressive Party</option>
     <option value="APDA">Advanced Peoples Democratic Party</option>
     <option value="APA">Afriacan Peoples Alliance</option>
     <option value="ADPM">All Democratic Peoples Movement</option>


  </select>


                                

                                @if ($errors->has('favparty'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('favparty') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                         <div class="form-group{{ $errors->has('resident') ? ' has-error' : '' }}">
                            <label for="resident" class="col-md-4 control-label">State of Residence</label>

                            <div class="col-md-6">
                                <select id="resident" name="resident">
                                    
     <option value="" selected="selected" onchange="showLGA(this.value)">- Select State of Resident</option>
 
                  <option value='Abia'>Abia</option>
                  <option value='Adamawa'>Adamawa</option>
                  <option value='AkwaIbom'>AkwaIbom</option>
                  <option value='Anambra'>Anambra</option>
                  <option value='Bauchi'>Bauchi</option>
                  <option value='Bayelsa'>Bayelsa</option>
                  <option value='Benue'>Benue</option>
                  <option value='Borno'>Borno</option>
                  <option value='CrossRivers'>CrossRivers</option>
                  <option value='Delta'>Delta</option>
                  <option value='Ebonyi'>Ebonyi</option>
                  <option value='Edo'>Edo</option>
                  <option value='Ekiti'>Ekiti</option>
                  <option value='Enugu'>Enugu</option>
                  <option value="FCT">'FCT'</option>
                  <option value='Gombe'>Gombe</option>
                  <option value='Imo'>Imo</option>
                  <option value='Jigawa'>Jigawa</option>
                  <option value='Kaduna'>Kaduna</option>
                  <option value='Kano'>Kano</option>
                  <option value='Katsina'>Katsina</option>
                  <option value='Kebbi'>Kebbi</option>
                  <option value='Kogi'>Kogi</option>
                  <option value='Kwara'>Kwara</option>
                  <option value='Lagos'>Lagos</option>
                  <option value='Nasarawa'>Nasarawa</option>
                  <option value='Niger'>Niger</option>
                  <option value='Ogun'>Ogun</option>
                  <option value='Ondo'>Ondo</option>
                  <option value='Osun'>Osun</option>
                  <option value='Oyo'>Oyo</option>
                  <option value='Plateau'>Plateau</option>
                  <option value='Rivers'>Rivers</option>
                  <option value='Sokoto'>Sokoto</option>
                  <option value='Taraba'>Taraba</option>
                  <option value='Yobe'>Yobe</option>
                  <option value='Zamfara'>Zamafara</option>




                                </select>

                                @if ($errors->has('resident'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('resident') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        


  <div class="form-group{{ $errors->has('residentlga') ? ' has-error' : '' }}">
                            <label for="residentlga" class="col-md-4 control-label">Resident LGA</label>

                            <div class="col-md-6">
                                <select id="residentlga" name="residentlga" >
                              
                                <option value="">Select LGA of Resident</option>
                                </select>

                                @if ($errors->has('residentlga'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('residentlga') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group{{ $errors->has('origin') ? ' has-error' : '' }}">
                            <label for="origin" class="col-md-4 control-label">State of Origin</label>

                            <div class="col-md-6">
                                <select id="origin" name="origin">
                                    
     <option value="" selected="selected">- Select State of Origint</option>
 
                  <option value='Abia'>Abia</option>
                  <option value='Adamawa'>Adamawa</option>
                  <option value='AkwaIbom'>AkwaIbom</option>
                  <option value='Anambra'>Anambra</option>
                  <option value='Bauchi'>Bauchi</option>
                  <option value='Bayelsa'>Bayelsa</option>
                  <option value='Benue'>Benue</option>
                  <option value='Borno'>Borno</option>
                  <option value='CrossRivers'>CrossRivers</option>
                  <option value='Delta'>Delta</option>
                  <option value='Ebonyi'>Ebonyi</option>
                  <option value='Edo'>Edo</option>
                  <option value='Ekiti'>Ekiti</option>
                  <option value='Enugu'>Enugu</option>
                  <option value='FCT'>FCT</option>
                  <option value='Gombe'>Gombe</option>
                  <option value='Imo'>Imo</option>
                  <option value='Jigawa'>Jigawa</option>
                  <option value='Kaduna'>Kaduna</option>
                  <option value='Kano'>Kano</option>
                  <option value='Katsina'>Katsina</option>
                  <option value='Kebbi'>Kebbi</option>
                  <option value='Kogi'>Kogi</option>
                  <option value='Kwara'>Kwara</option>
                  <option value='Lagos'>Lagos</option>
                  <option value='Nasarawa'>Nasarawa</option>
                  <option value='Niger'>Niger</option>
                  <option value='Ogun'>Ogun</option>
                  <option value='Ondo'>Ondo</option>
                  <option value='Osun'>Osun</option>
                  <option value='Oyo'>Oyo</option>
                  <option value='Plateau'>Plateau</option>
                  <option value='Rivers'>Rivers</option>
                  <option value='Sokoto'>Sokoto</option>
                  <option value='Taraba'>Taraba</option>
                  <option value='Yobe'>Yobe</option>
                  <option value='Zamfara'>Zamafara</option>




                                </select>

                                @if ($errors->has('origin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('origin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        


  <div class="form-group{{ $errors->has('originlga') ? ' has-error' : '' }}">
                            <label for="originlga" class="col-md-4 control-label">Origin LGA</label>

                            <div class="col-md-6">
                                <select id="originlga" name="originlga" >
                              
                                <option value="">Select LGA of Origin</option>
                                </select>

                                @if ($errors->has('originlga'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('originlga') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                               
                            


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




</body>
</html>





