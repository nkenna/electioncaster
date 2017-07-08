
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
<title>VoteStats- APC</title>
    <!-- Styles -->
    
    <!-- Scripts -->
    



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
    color: green;
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
    color: blue;
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
  background: url('img/slide3.jpg') center top no-repeat;
  background-color: lightgreen;
  background-size: cover;
  margin-top: 10px;
}

.logo-font {
  font-family: 'Roboto', 'Helvetica', 'Arial', sans-serif;
  line-height: 1;
  color: #767777;
  font-weight: 500;
}

.android-slogan {
  font-size: 60px;
  padding-top: 160px;
}

.android-sub-slogan {
  font-size: 21px;
  padding-top: 24px;
}

.android-create-character {
  font-size: 21px;
  padding-top: 400px;
}

  .android-create-character a {
    text-decoration: none;
    color: #767777;
    font-weight: 300;
  }

.android-screen-section {
  position: relative;
  padding-top: 60px;
  padding-bottom: 80px;
}

.android-screens {
  text-align: right;
  width: 100%;
  white-space: nowrap;
  overflow-x: auto;
}

.android-screen {
  text-align: center;
}

.android-screen .android-link {
  margin-top: 16px;
  display: block;
  z-index: 2;
}

.android-image-link {
  text-decoration: none;
}

.android-wear {
  display: inline-block;
  width: 160px;
  margin-right: 32px;
}

  .android-wear .android-screen-image {
    width: 40%;
    z-index: 1;
  }


.android-phone {
  display: inline-block;
  width: 64px;
  margin-right: 48px;
}

  .android-phone .android-screen-image {
    width: 100%;
    z-index: 1;
  }


.android-tablet {
  display: inline-block;
  width: 110px;
  margin-right: 64px;
}

  .android-tablet .android-screen-image {
    width: 100%;
    z-index: 1;
  }

  .android-tablet .android-link {
    display: block;
    z-index: 2;
  }


.android-tv {
  display: inline-block;
  width: 300px;
  margin-right: 80px;
}

 


.android-wear-section {
  position: relative;
  background: url('img/p3.jpg') center top no-repeat;
  background-size: cover;
  height: 600px;
}

.android-wear-band {
  position: absolute;
  bottom: 0;
  width: 100%;
  text-align: center;
  background-color: #37474f;
}

.android-wear-band-text {
  max-width: 800px;
  margin-left: 25%;
  padding: 24px;
  text-align: left;
  color: white;
}

  .android-wear-band-text p {
    padding-top: 8px;
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

.android-customized-section {
  text-align: center;
}

.android-customized-section-text {
  max-width: 500px;
  margin-left: auto;
  margin-right: auto;
  padding: 80px 16px 0 16px;
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

.glow {
  background-color: #004A7F;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  border: none;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: Arial;
  font-size: 20px;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
}
@-webkit-keyframes glowing {
  0% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; -webkit-box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
}

@-moz-keyframes glowing {
  0% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; -moz-box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
}

@-o-keyframes glowing {
  0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
}

@keyframes glowing {
  0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
}

.glow {
  -webkit-animation: glowing 1500ms infinite;
  -moz-animation: glowing 1500ms infinite;
  -o-animation: glowing 1500ms infinite;
  animation: glowing 1500ms infinite;
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
    color: white;
  }

  .android-slogan {
    font-size: 26px;
    margin: 0 16px;
    padding-top: 24px;
    color: white;
  }

  .android-sub-slogan {
    font-size: 16px;
    margin: 0 16px;
    padding-top: 8px;
    color: white;
  }

  .android-create-character {
    padding-top: 200px;
    font-size: 16px;
  }

  .android-create-character img {
    height: 12px;
  }

  .android-fab {
    display: none;
  }

  .android-wear-band-text {
    margin-left: 0;
    padding: 16px;
  }

  .android-footer .mdl-mega-footer--bottom-section {
    display: none;
  }

  
}

  </style>

  {!! Charts::assets() !!}
  {!! Analytics::render() !!}
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
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="{{ url('/') }}">Home</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="{{ url('/about') }}">About</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Data-land</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Contact</a>
           
               
          @if (Route::has('login'))
                
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
            <li class="mdl-menu__item">Support this Project</li>
            <li class="mdl-menu__item">Resolve an Issue</li>
            
 
          </ul>
        </div>
      </div>


       <div class="android-drawer mdl-layout__drawer">
        <span class="mdl-layout-title">
         <img class="android-logo-image" src="/css/mdl/logo.png">
        </span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="">Home</a>
          <a class="mdl-navigation__link" href="{{ url('/about') }}">About</a>
          <a class="mdl-navigation__link" href="">Data-Land</a>
          <a class="mdl-navigation__link" href="">Contact Us</a>
         
          <div class="android-drawer-separator"></div>
          
          <a class="mdl-navigation__link" href="">Support this Project</a>
          <a class="mdl-navigation__link" href="">Resolve an Issue</a>
          
          <div class="android-drawer-separator"></div>

            @if (Route::has('login'))
                
                    @if (Auth::check())
                    <a class="mdl-navigation__link" href="{{ url('/home') }}">Dashboard</a>
                         <a class="mdl-navigation__link mdl-typography--text-uppercase" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                    @else
                        <a class="mdl-navigation__link " href="{{ url('/login') }}">Login</a>
                        <a class="mdl-navigation__link " href="{{ url('/register') }}">Register</a>
                    @endif
                
            @endif
          
         
          <div class="android-drawer-separator"></div>
          
        </nav>
      </div>


      <div class="android-content mdl-layout__content">
      
      <div style="width: 100%; text-align: left; padding: 5px; ">
      <div>
   <center>  <p class="mdl-typography--display-2">Biblograghy about APC</p></center> 
        <p>
          All Progressives Congress (APC) is a political party in Nigeria, formed on 6th of February 2013 in anticipation of the 2015 elections. Muhammadu Buhari, APC presidential candidate won the presidential election by almost 2.6 million votes. President Goodluck Jonathan, the incumbent Presient conceded defeat on 31 March. This was the first time in Nigeria's political history that an opposition political party unseated a governing party in a general election and one in which power transferred peacefully from one political party to another. In addition, the APC won the majority of seats in the Senate and the House of Representatives in the 2015 elections, though it fell shy of winning a super-majority to override the ability of the opposition People's Democratic Party to block legislation.</p>

         
<p>Formed in February 2013, the party is the result of an alliance of Nigeria's three biggest opposition parties – the Action Congress of Nigeria (ACN), the Congress for Progressive Change (CPC), the All Nigeria Peoples Party (ANPP) – and a faction of the All Progressives Grand Alliance (APGA) – merged to take on the People's Democratic Party. The resolution was signed by Tom Ikimi, the who represented the ACN; Senator Annie Okonkwo on behalf of the APGA; former governor of Kano State, Mallam Ibrahim Shekarau, the Chairman of ANPP's Merger Committee; and Garba Shehu, the Chairman of CPC's Merger Committee. Ironically, less than 2 years before the party's historic victory in the 2015 elections, Messrs Annie Okonkwo, Tom Ikimi and Ibrahim Shekarau resigned from the party and joined the PDP.</p>

<p>The party received approval from <a>Independent National Electoral Commission (INEC)</a> on 31 July 2013 to become a political party and subsequently withdrew the operating licenses of the three predecessor parties (the ACN, CPC and ANPP). In March 2013, it was reported that two other associations – African Peoples Congress and All Patriotic Citizens – also applied for INEC registration, adopting APC as an acronym as well, reportedly "a development interpreted to be a move to thwart the successful coalition of the opposition parties, ahead of the 2015 general elections."It was reported in April 2013 that the party was considering changing their name to the All Progressive Congress of Nigeria (APCN) to avoid further complications.</p>

<p>In November 2013, five serving Governors from the governing PDP defected to the APC, as well as 49 legislators who will now join the ranks of 137 legislators in the APC as a result of the prior merger of the smaller opposition parties. This initially gave the APC a slim majority of 186 legislators in the Lower House out of a total of 360 legislators; however, subsequent political wrangling and pressure from political factions and interests outside the National Assembly of Nigeria, gave the party only 37 additional legislators thus giving the APC a nominal majority of 172 out of 360 Legislators, as opposed to the PDP's 171 (though some smaller PDP-allied parties hold the balance of the other seats. This was further confirmed when the party seated 179 members on January 15, 2015 when the House resumed after a long recess to finally affirm its majority. The governors who defected to the APC were Rotimi Amaechi of Rivers State, Abdulfatah Ahmed of Kwara State, Rabiu Kwankwaso of Kano State, Murtala Nyako of Adamawa State and Aliyu Wamakko of Sokoto State. It had been previously reported that Governors Mu'azu Babangida Aliyu of Niger State and Sule Lamido of Jigawa State were to set to defect from the People's Democratic Party to the APC; however, both ended up remaining with the People's Democratic Party. In the 2015 elections, Mu'azu Babangida Aliyu ran as a senatorial nominee of the People's Democratic Party for the Niger State east senatorial district, losing in a landslide to the APC's David Umaru.

On 12–13 December 2014, the APC was admitted as a consultative member into the Socialist International.</p>

<p>The APC is generally considered to be a center-left political party that favors controlled market or regulated market economic policies, and a strong and active role for government regulation. A substantial number of its political leaders are followers of or politicians who subscribe to the social democratic political philosophy of Obafemi Awolowo and the socialist and anti-class views of Aminu Kano. Moreover, the majority of the APC's base of political support is in southwestern Nigeria and the Northern Nigeria, which are dominated by the country's largest ethnic groups, the Yoruba and the Hausa-Fulani, respectively.</p>

<p>Most political parties in Nigeria are socially conservative as a reflection of the views of the populace. However, compared to Nigeria's other major party, the People's Democratic Party, the APC is considered a more socially conservative party. This is in part due to the party being dominated by an older generation of Nigerian politicians and the fact that a substantial base of its voters live in the predominantly Muslim Hausa-Fulani parts of Nigeria. Like the PDP, the APC is against same-sex relations, and strongly favors social conservatism on moral, religious and cultural grounds.

The APC is more supportive of state-autonomy, advancing state police as part of its manifesto. Its social policy is a combination of social nationalism. Despite the parties' domination by pro-devolution politicians like Atiku Abubakar, Bola Tinubu and Chief Bisi Akande, the party's presidential bearer and the CPC wing is less inclined to federalism and this basic tension creates sorts of ideological strange bed fellows, accommodated in context of a desire to win and combine forces in the 2015 election cycle.


        </p>
        <p>Culled from <a href="https://en.wikipedia.org/wiki/All_Progressives_Congress" class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase android-link">wikipedia</a>. To provide more information about this article, please contact us: votestatsng@gmail.com</p>
      </div>
        
      </div>





 <footer class="android-footer mdl-mega-footer">
          <div class="mdl-mega-footer--top-section">
          <div class="mdl-mega-footer--left-section">
                <button style="background: url('img/facebook.png');" class="mdl-mega-footer--social-btn" ></button>
                &nbsp;
              <button style="background: url('img/twitter.png');" class="mdl-mega-footer--social-btn"></button>
              &nbsp;
              <button class="mdl-mega-footer--social-btn"></button>
            </div>
            <div class="mdl-mega-footer--right-section">
              <a class="mdl-typography--font-light" href="#top">
                Back to Top
                <i class="material-icons">expand_less</i>
              </a>
            </div>
          </div>

          <div class="mdl-mega-footer--middle-section">
            <p class="mdl-typography--font-light">Copyright © 2017 VoteStats</p>
            <p class="mdl-typography--font-light">Created and Designed by Steinacoz Creations</p>
          </div>

          <div class="mdl-mega-footer--bottom-section">
            
            <a class="android-link mdl-typography--font-light" href="">SiteMap</a>
            <a class="android-link mdl-typography--font-light" href="">Disclaimer</a>
            <a class="android-link mdl-typography--font-light" href="">Privacy Policy</a>
          </div>

        </footer>

 

            

            
          </div>
        </div>

       







      </div>


</div>


</body>
</html>
