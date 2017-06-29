<!DOCTYPE html>
	<html>
	<head>
		  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
<title>iVoteiCheck - Voting Board</title>
    <!-- Styles -->
    
    <!-- Scripts -->
    <script src="{{ asset('css/mdl/material.min.js') }}"></script>
    <script src="{{ asset('css/mdl/material.min.css') }}"></script>
     <script src="/js/jquery-3.2.1.min.js"></script>

<!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/mdl/material.min.css"/>
<script src="/css/mdl/material.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/> 

   <style>


body {
  margin: 0;
}

/* Disable ugly boxes around images in IE10 */
a img{
  border: 0px;
}

::-moz-selection {
  background-color: #6ab344;
  color: #fff;
}

::selection {
  background-color: #6ab344;
  color: #fff;
}

.android-search-box .mdl-textfield__input {
  color: rgba(0, 0, 0, 0.87);
}

.android-header .mdl-menu__container {
  z-index: 50;
  margin: 0 !important;
}


.mdl-textfield--expandable {
  width: auto;
}

.android-fab {
  position: absolute;
  right: 20%;
  bottom: -26px;
  z-index: 3;
  background: #64ffda !important;
  color: black !important;
}

.android-mobile-title {
  display: none !important;
}


.android-logo-image {
  height: 28px;
  width: 140px;
}


.android-header {
  overflow: visible;
  background-color: white;
}

  .android-header .material-icons {
    color: #767777 !important;
  }

  .android-header .mdl-layout__drawer-button {
    background: transparent;
    color: #767777;
  }

  .android-header .mdl-navigation__link {
    color: #757575;
    font-weight: 700;
    font-size: 14px;
  }

  .android-navigation-container {
    /* Simple hack to make the overflow happen to the left instead... */
    direction: rtl;
    -webkit-order: 1;
        -ms-flex-order: 1;
            order: 1;
    width: 500px;
    transition: opacity 0.2s cubic-bezier(0.4, 0, 0.2, 1),
        width 0.2s cubic-bezier(0.4, 0, 0.2, 1);
  }

  .android-navigation {
    /* ... and now make sure the content is actually LTR */
    direction: ltr;
    -webkit-justify-content: flex-end;
        -ms-flex-pack: end;
            justify-content: flex-end;
    width: 800px;
  }

  .android-search-box.is-focused + .android-navigation-container {
    opacity: 0;
    width: 100px;
  }


  .android-navigation .mdl-navigation__link {
    display: inline-block;
    height: 60px;
    line-height: 68px;
    background-color: transparent !important;
    border-bottom: 4px solid transparent;
  }

    .android-navigation .mdl-navigation__link:hover {
      border-bottom: 4px solid #8bc34a;
    }

  .android-search-box {
    -webkit-order: 2;
        -ms-flex-order: 2;
            order: 2;
    margin-left: 16px;
    margin-right: 16px;
  }

  .android-more-button {
    -webkit-order: 3;
        -ms-flex-order: 3;
            order: 3;
  }


.android-drawer {
  border-right: none;
}

  .android-drawer-separator {
    height: 1px;
    background-color: #dcdcdc;
    margin: 8px 0;
  }

  .android-drawer .mdl-navigation__link.mdl-navigation__link {
    font-size: 14px;
    color: #757575;
  }

  .android-drawer span.mdl-navigation__link.mdl-navigation__link {
    color: #8bc34a;
  }

  .android-drawer .mdl-layout-title {
    position: relative;
    background: #6ab344;
    height: 160px;
  }

    .android-drawer .android-logo-image {
      position: absolute;
      bottom: 16px;
    }

.android-be-together-section {
  position: relative;
  height: 800px;
  width: auto;
  background-color: lightgreen;
  background-size: cover;
}

.logo-font {
  font-family: 'Roboto', 'Helvetica', 'Arial', sans-serif;
  line-height: 1;
  color: #767777;
  font-weight: 500;
}




.android-auto {
  display: inline-block;
  width: 300px;
  overflow: hidden;
}

  



.android-link {
  text-decoration: none;
  color: #8bc34a !important;
}

  .android-link:hover {
    color: #7cb342 !important;
  }

  .android-link .material-icons {
    position: relative;
    top: -1px;
    vertical-align: middle;
  }

.android-alt-link {
  text-decoration: none;
  color: #64ffda !important;
  font-size: 16px;
}

  .android-alt-link:hover {
    color: #00bfa5 !important;
  }

  .android-alt-link .material-icons {
    position: relative;
    top: 6px;
  }



.android-more-section {
  padding: 80px 0;
  max-width: 1044px;
  margin-left: auto;
  margin-right: auto;
}

  .android-more-section .android-section-title {
    margin-left: 12px;
    padding-bottom: 24px;
  }

.android-card-container {
}

  .android-card-container .mdl-card__media {
    overflow: hidden;
    background: transparent;
  }

    .android-card-container .mdl-card__media img {
      width: 100%;
    }

  .android-card-container .mdl-card__title {
    background: transparent;
    height: auto;
  }

  .android-card-container .mdl-card__title-text {
    color: black;
    height: auto;
  }

  .android-card-container .mdl-card__supporting-text {
    height: auto;
    color: black;
    padding-bottom: 56px;
  }

  .android-card-container .mdl-card__actions {
    position: absolute;
    bottom: 0;
  }

  .android-card-container .mdl-card__actions a {
    border-top: none;
    font-size: 16px;
  }

.android-footer {
  background-color: #fafafa;
  position: relative;
}

  .android-footer a:hover {
    color: #8bc34a;
  }

  .android-footer .mdl-mega-footer--top-section::after {
    border-bottom: none;
  }

  .android-footer .mdl-mega-footer--middle-section::after {
    border-bottom: none;
  }

  .android-footer .mdl-mega-footer--bottom-section {
    position: relative;
  }

  .android-footer .mdl-mega-footer--bottom-section a {
    margin-right: 2em;
  }

  .android-footer .mdl-mega-footer--right-section a .material-icons {
    position: relative;
    top: 6px;
  }


.android-link-menu:hover {
  cursor: pointer;
}


/**** Mobile layout ****/
@media (max-width: 900px) {
  .android-navigation-container {
    display: none;
  }

  .android-title {
    display: none !important;
  }

  .android-mobile-title {
    display: block !important;
    position: absolute;
    left: calc(50% - 70px);
    top: 12px;
    transition: opacity 0.2s cubic-bezier(0.4, 0, 0.2, 1);
  }

  /* WebViews in iOS 9 break the "~" operator, and WebViews in OS X 10.10 break
     consecutive "+" operators in some cases. Therefore, we need to use both
     here to cover all the bases. */
  .android.android-search-box.is-focused ~ .android-mobile-title,
  .android-search-box.is-focused + .android-navigation-container + .android-mobile-title {
    opacity: 0;
  }

  .android-more-button {
    display: none;
  }

  .android-search-box.is-focused {
    width: calc(100% - 48px);
  }

  .android-search-box .mdl-textfield__expandable-holder {
    width: 100%;
  }

  .android-be-together-section {
    height: 350px;
  }

 

  .android-fab {
    display: none;
  }

  

  .android-footer .mdl-mega-footer--bottom-section {
    display: none;
  }
}

    </style>



		<script>
    $(document).ready(function(){


//list the lga
var Abia = ['Select item...', 'Aba North', 'Aba South', 'Arochukwu', 'Bende', 'Ikwuano', 'Isiala Ngwa North', 'Isiala Ngwa South', 'Isuikwuato', 'Obi Ngwa', 'Ohafia', 'Osisioma', 'Ugwunagbo', 'Ukwa East', 'Ukwa West', 'Umuahia North', 'Umuahia South', 'Umu Nneochi'];
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
     $("#chooseState").change(function(){
       
        if($("#sta").val() == 'Zamfara'){
            $("#votelga").html('');
     for  (var i = 0; i < Zamfara.length; i++) {
$("#votelga").append('<option value='+Zamfara[i]+'>'+Zamfara[i]+'</option>');
       }
    }

     if($("#sta").val() == 'Lagos'){
          $("#votelga").html('');
     for  (var i = 0; i < Lagos.length; i++) {
$("#votelga").append('<option value='+Lagos[i]+'>'+Lagos[i]+'</option>');
       }
    }

     if($("#sta").val() == 'Enugu'){
          $("#votelga").html('');
     for  (var i = 0; i < Enugu.length; i++) {
$("#votelga").append('<option value='+Enugu[i]+'>'+Enugu[i]+'</option>');
       }
    }

     if($("#sta").val() == 'Kogi'){
          $("#votelga").html('');
     for  (var i = 0; i < Kogi.length; i++) {
$("#votelga").append('<option value='+Kogi[i]+'>'+Kogi[i]+'</option>');
       }
    }

     if($("#sta").val() == 'Imo'){
      
          $("#votelga").html('');
     for  (var i = 0; i < Imo.length; i++) {
$("#votelga").append('<option value='+Imo[i]+'>'+Imo[i]+'</option>');
       }
    }


    if($("#sta").val() == 'Anambra'){
      
          $("#votelga").html('');
     for  (var i = 0; i < Anambra.length; i++) {
$("#votelga").append('<option value='+Anambra[i]+'>'+Anambra[i]+'</option>');
       }
    }



})


//populating origin lga
   
     

$("#chooseOrigin").change(function(){
		 if($('input[name=chooseOrigin]').is(':checked') == false){
           $("#takeOrigin").hide();
           $("#takeState").hide();
	}else{

           $('input[name=chooseState]').prop('checked', false); 
           $("#takeState").hide();
           $("#takeOrigin").show();
       }

       if($("#ori").val() == 'Anambra'){
      
          $("#votelga").html('');
     for  (var i = 0; i < Anambra.length; i++) {
$("#votelga").append('<option value='+Anambra[i]+'>'+Anambra[i]+'</option>');
       }
    }


 if($("#ori").val() == 'Zamfara'){
        
            $("#votelga").html('');
     for  (var i = 0; i < Zamfara.length; i++) {
$("#votelga").append('<option value='+Zamfara[i]+'>'+Zamfara[i]+'</option>');
       }
    }

     if($("#ori").val() == 'Lagos'){
          $("#votelga").html('');
     for  (var i = 0; i < Lagos.length; i++) {
$("#votelga").append('<option value='+Lagos[i]+'>'+Lagos[i]+'</option>');
       }
    }

     if($("#ori").val() == 'Enugu'){
          $("#votelga").html('');
     for  (var i = 0; i < Enugu.length; i++) {
$("#votelga").append('<option value='+Enugu[i]+'>'+Enugu[i]+'</option>');
       }
    }

     if($("#ori").val() == 'Kogi'){
      
          $("#votelga").html('');
     for  (var i = 0; i < Kogi.length; i++) {
$("#votelga").append('<option value='+Kogi[i]+'>'+Kogi[i]+'</option>');
       }
    }

    if($("#ori").val() == 'Imo'){
      
          $("#votelga").html('');
     for  (var i = 0; i < Imo.length; i++) {
$("#votelga").append('<option value='+Imo[i]+'>'+Imo[i]+'</option>');
       }
    }



        })

$("#chooseState").change(function(){
	if($('input[name=chooseState]').is(':checked') == false){
           $("#takeOrigin").hide();
           $("#takeState").hide();
	}else{
           $('input[name=chooseOrigin]').prop('checked', false); 
           $("#takeOrigin").hide();
           $("#takeState").show();
       }
        })


    })
</script>
	</head>
	<body>

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

<div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title">
            <img class="android-logo-image" src="/css/mdl/logo.png">
          </span>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="android-header-spacer mdl-layout-spacer"></div>
          <div class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search-field">
            </div>
          </div>
          <!-- Navigation -->
          <div class="android-navigation-container">
            <nav class="android-navigation mdl-navigation">
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="#">Home</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">About</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Data-land</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Contact</a>
           
               
          @if (Route::has('home'))
                
                    @if (Auth::check())
                        <a class="mdl-navigation__link mdl-typography--text-uppercase" href="{{ url('/home') }}">Dashboard</a>
                    @else
                        <a class="mdl-navigation__link mdl-typography--text-uppercase" href="{{ url('/login') }}">Login</a>
                        <a class="mdl-navigation__link mdl-typography--text-uppercase" href="{{ url('/register') }}">Register</a>
                    @endif
                
            @endif
            </nav>
          </div>
          <span class="android-mobile-title mdl-layout-title">
            <img class="android-logo-image" src="/css/mdl/logo.png">
          </span>
          <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
            <li class="mdl-menu__item">5.0 Lollipop</li>
            <li class="mdl-menu__item">4.4 KitKat</li>
            <li disabled class="mdl-menu__item">4.3 Jelly Bean</li>
            <li class="mdl-menu__item">Android History</li>
 
          </ul>
        </div>
      </div>


       <div class="android-drawer mdl-layout__drawer">
        <span class="mdl-layout-title">
          <img class="android-logo-image" src="/css/mdl/logo.png">
        </span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="">Phones</a>
          <a class="mdl-navigation__link" href="">Tablets</a>
          <a class="mdl-navigation__link" href="">Wear</a>
          <a class="mdl-navigation__link" href="">TV</a>
          <a class="mdl-navigation__link" href="">Auto</a>
          <a class="mdl-navigation__link" href="">One</a>
          <a class="mdl-navigation__link" href="">Play</a>
          <div class="android-drawer-separator"></div>
          <span class="mdl-navigation__link" href="">Versions</span>
          <a class="mdl-navigation__link" href="">Lollipop 5.0</a>
          <a class="mdl-navigation__link" href="">KitKat 4.4</a>
          <a class="mdl-navigation__link" href="">Jelly Bean 4.3</a>
          <a class="mdl-navigation__link" href="">Android history</a>
          <div class="android-drawer-separator"></div>
          <span class="mdl-navigation__link" href="">Resources</span>
          <a class="mdl-navigation__link" href="">Official blog</a>
          <a class="mdl-navigation__link" href="">Android on Google+</a>
          <a class="mdl-navigation__link" href="">Android on Twitter</a>
          <div class="android-drawer-separator"></div>
          <span class="mdl-navigation__link" href="">For developers</span>
          <a class="mdl-navigation__link" href="">App developer resources</a>
          <a class="mdl-navigation__link" href="">Android Open Source Project</a>
          <a class="mdl-navigation__link" href="">Android SDK</a>
        </nav>
      </div>
            
             <div class="android-content mdl-layout__content">



<p> <h4> Hello {{ Auth::user()->username }}, feel free to Vote here.</h4> </p>

<!-- Presidential Voting Panel -->

    <!-- governor voting panel -->
<div>
<h3>Governor Voting Panel </h3>


<!-- resisent and state are the same -->
@if (Auth::user()->resident == Auth::user()->origin)
          <div> <p>Resident state and origin are the same.</p> </div>

<div>
	<div>
    	<form  role="form" method="post" action="/updategov" >
	 {{ csrf_field() }}
    

    <div>
     <input type="text" name="sta" id="sta" hidden value="{{ Auth::user()->resident }}">   
    </div>

<select id="votelga" name="votelga">
	<option value="">Select LGA</option>
  <option value="Aguata">Aguata</option>
  <option value="Anambra East">Anambra East</option>
  <option value="Anambra West">Anambra West</option>
  <option value="Anaocha">Anaocha</option>
  <option value="Awka North">Awka North</option>
  <option value="Awka South">Awka South</option>
  <option value="Ayamelum">Ayamelum</option>
  <option value="Dunukofia">Dunukofia</option>
  <option value="Ekwusigo">Ekwusigo</option>
  <option value="Idemili North">Idemili North</option>
  <option value="Idemili South">Idemili South</option>
  <option value="Ihiala">Ihiala</option>
  <option value="Njikoka">Njikoka</option>
  <option value="Nnewi North">Nnewi North</option>
  <option value="Nnewi South">Nnewi South</option>
  <option value="Ogbaru">Ogbaru</option>
  <option value="Onitsha North">Onitsha North</option>
  <option value="Onitsha South">Onitsha South</option>
  <option value="Orumba North">Orumba North</option>
  <option value="Orumba South">Orumba South</option>
  <option value="Oyi">Oyi</option>
  
</select>


    

    <div>
    <select id="govparty" name="govparty">
                                    
     <option value="" selected="selected">Select Favorite Party</option>

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


  </select>
    </div>

    <div>
        <button id="govvotebtn" type="Submit">Vote</button>
    </div>
    
</form>
</div>
</div>

<!-- resisent and state are not the same -->
@elseif (Auth::user()->resident != Auth::user()->origin)
	<div> <p>Resident state and origin are not the same.</p> </div>
	<div>
    <label for="chooseState">Choose to vote from {{ Auth::user()->resident }} </label>
     <input type="checkbox" name="chooseState" id="chooseState">   
    </div>

<div>
    <label for="chooseOrigin">Choose to vote from {{ Auth::user()->origin }}</label>
     <input type="checkbox" name="chooseOrigin" id="chooseOrigin">   
    </div>

    <!-- Vote from resident state -->
    <div id="takeState" style="display: none;"> <p>Resident state choosen.</p> 

    <div>
    	<form  role="form" method="POST" action="/updategov" >
	 {{ csrf_field() }}
    

    <div>
     <input type="text" name="sta" id="sta" hidden value="{{ Auth::user()->resident }}">   
    </div>

    <select id="votelga" name="votelga">
	<option value="">Select LGA</option>
</select>

    <div>
    <select id="govparty" name="govparty">
                                    
     <option value="" selected="selected">Select Favorite Party</option>

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


  </select>
    </div>

    <div>
        <button id="govvotebtn" type="Submit">Vote</button>
    </div>
    
</form>
</div>
    </div>

    <!-- Vote from state of origin -->
    <div id="takeOrigin" style="display: none;"> <p>origin state choosen.</p>
    	<div>
    	<form  role="form" method="post" action="/updategov" >
	 {{ csrf_field() }}
    

    <div>
     <input type="text" name="ori" id="ori" hidden value="{{ Auth::user()->origin }}"  
    </div>

    <select id="votelga" name="votelga">
	<option value="">Select LGA</option>
</select>

    <div>
    <select id="govparty" name="govparty">
                                    
     <option value="" selected="selected">Select Favorite Party</option>

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


  </select>
    </div>

    <div>
        <button id="govvotebtn" type="Submit">Vote</button>
    </div>
    
</form>
</div>
     </div>


 @endif



    
</div>
<!--end of governor Voting panel -->
                

                     <footer class="mdl-mega-footer">
             <h6 align="left">Copyright Â© SIMU-VOTER 2017 All Rights Reserved</h6> 
        </footer>



</div>
           



	</body>
	</html>
