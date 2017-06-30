
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
<title>VoteStats- About</title>
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
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="{{ url('/dataland') }}">Data-land</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="{{ url('/contactus') }}">Contact</a>
           
               
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
            <li class="mdl-menu__item"><a class="mdl-navigation__link mdl-typography--text-uppercase" href="{{ url('/supportus') }}">Support iVoteiCheck</a></li>
            <li class="mdl-menu__item"><a class="mdl-navigation__link mdl-typography--text-uppercase" href="{{ url('/resolveissue') }}">Resolve an Issue</a></li>
            
 
          </ul>
        </div>
      </div>


       <div class="android-drawer mdl-layout__drawer">
        <span class="mdl-layout-title">
        <img class="android-logo-image" src="/css/mdl/logo.png"> 
        </span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="{{ url('/') }}">Home</a>
          <a class="mdl-navigation__link" href="{{ url('/about') }}">About</a>
          <a class="mdl-navigation__link" href="{{ url('/dataland') }}">Data-Land</a>
          <a class="mdl-navigation__link" href="{{ url('/contactus') }}">Contact Us</a>
         
          <div class="android-drawer-separator"></div>
          <a class="mdl-navigation__link" href="{{ url('/supportus') }}">Support VoteStats</a>
          <a class="mdl-navigation__link" href="{{ url('/resolveissue') }}">Resolve an Issue</a>
            
          <a class="mdl-navigation__link" href="">Support this Project</a>
          <a class="mdl-navigation__link" href="">Resolve an Issue</a>
          
          <div class="android-drawer-separator"></div>
          @if (Route::has('login'))
                
                    @if (Auth::check())
                    <a class="mdl-navigation__link" href="{{ url('/home') }}">Dashboard</a>
                       <a class="mdl-navigation__link " href="{{ url('/logout') }}">Logout</a>
                        
                    @else
                        <a class="mdl-navigation__link " href="{{ url('/login') }}">Login</a>
                        <a class="mdl-navigation__link " href="{{ url('/register') }}">Register</a>
                    @endif
                
            @endif
          
         
          
          <div class="android-drawer-separator"></div>
          
        </nav>
      </div>


      <div class="android-content mdl-layout__content">
      

        <div style="text-align: left; margin: 1.5px; padding: 3px; font-family: 'Roboto', 'Helvetica', 'Arial', sans-serif;">
        <div class="mdl-typography--display-2 mdl-typography--font-thin">ABOUT</div>
          <div style="color: black;">
          <p>Votestats is an online platform that models Nigerian Voting System. it provides leads and insights for all politiclal/election stakeholders in Nigeria.</p>

          <p>Votestat motive is to involve all in the election process in Nigeria. The Data is collated, corellated and aggregated according to political parties, States, age, gender, occupation, etc. Although, the data and catergories are being updated rapidly to serve its purpose. 
          </p>

          <p style="color: black;" class="mdl-typography--headline mdl-typography--font-thin">Benefits to Political Parties</p>
          <p>VoteStats provides many benefits to political parties in Nigeria:
          <ul>
            <li>Plan and replan Campaign strageties.</li>
            <li>Study the performance of their deployed Strageties.</li>
            <li>Study the performance of their members (Aspirants and elected).</li>
             <li>Forecast, follow and predict elections and outcomes.</li>
            <li>Follow and study opposition parties' performance during the campaign trail.</li>
          </ul>
          </p>

          <p style="color: black;" class="mdl-typography--headline mdl-typography--font-thin">Benefits to Political Aspirants and Elected Leaders</p>
          <p>VoteStats provides many benefits to Political Aspirants and Elected Leaders in Nigeria:
          <ul>
            <li>Forecast, follow and predict elections and outcomes.</li>
            <li>Plan and replan Campaign strageties.</li>
            <li>Model and follow their performance during election and while in office.</li>
            <li>Follow and study their opponents performance during the campaign trail.</li>
            <li>Forecast/Predict the election outcomes.</li>
            
          </ul>
          </p>

          <p style="color: black;" class="mdl-typography--headline mdl-typography--font-thin">Benefits to Journalists/Statisticains/Political/Election writers/Analysts/Election Followers:</p>
          <p>VoteStats provides many benefits to these categories of people in Nigeria:
          <ul>
            <li>Forecast, follow and predict elections and outcomes.</li>
            <li>Correlate data from VoteStats mocked votes and the outcome from the real vote.</li>
            <li>Model and follow their performance during election and while in office.</li>
            <li>Follow and study their opponents performance during the campaign trail.</li>
           
            
          </ul>
          </p>

          <p style="color: black;" class="mdl-typography--headline mdl-typography--font-thin">Benefits to Voters/Populace:</p>
          <p>VoteStats provides many benefits to these categories of people in Nigeria:
          <ul>
            <li>VoteStats provides a platform to show elected leaders in office their performance and draw their attention to it. A Voter can change or review his/her vote after 7days.</li>
            <li>VoteStats also provides a platform to show Political aspirants how their Campaign is performing and an insight into what the electionoutcome will look like.</li>
            <li>Forecast, follow and predict elections and outcomes.</li>
            
          </ul>
          </p>

          <p>How to use:</p>
          <p>To create a new Profile, follow either of this steps:
          <ul>
            <li>Click on the Register link on the Main Navigation Bar</li>
            <li>Click on the Create Profile Link on the frontpage display</li>
            <li>Use this <a href="www.votestats.com.ng">LINK</a> to access the register page easily.</li>
          </ul>
          <p>After creating a new profile, you will be logged into your dashboard automatically.</p>
          </p>

          <p>How to vote:</p>
          <p>
            The data presented by Votestats is collected through an online voting process. To add your 
            own vote, follow these steps:
            <ul>
              <li><a href="www.votestats.com.ng/login"> Login </a> into your dashboard with your email and password.</li>
              <li>To enter the Presidential Voting boot, use the <a href="www.votestats.com.ng/user/update">LINK</a> in the Presidential Voting boot.</li>
               <li>To enter the Gubernatorial Voting boot, use the <a href="www.votestats.com.ng/user/updategov">LINK</a> in the Gubernatorial Voting boot.</li>
                <li>To enter the Senatorial Voting boot, use the <a href="">LINK</a> in the Senatorial Voting boot [<b style="color: red">Not yet available</b>].</li>

            </ul>

          </p>

          <p>How to Access the Collated Data:</p>
          <p>
            Votestats uses charts for data representation. They are catergorized into:
            <ul>
              <li>States</li>
              <li>Gender</li>
              <li>Local Government Areas</li>
              <li>Politicial Parties</li>
              <li>Age</li>
              <li>Occupation</li>
              <li>More will still be added.</li>
            </ul>

            <p>Follow any of these steps to access the data/charts:
<ul>
  <li>Click on the <a href="www.votestats.com.ng/dataland">Data-land</a> link on the main navigation menu, choose the data category you want.</li>
  <li>Click on the <a href="www.votestats.com.ng/user/dataview"Presidential Vote Data</a> to access it [You have to be logged in]</li>
  <li>Click on the <a href="www.votestats.com.ng/user/govdataview"Gubernatorial Vote Data</a> to access it [You have to be logged in]</li>
</ul>
            </p>

          </p>

          <p style="color: black;" class="mdl-typography--headline mdl-typography--font-thin">NOTE:</p>
          <p style="color: black;">VoteStats provides modeled election voting data from mocked election voting process done by its online users. It is only meant for Nigerians and should not be used in place of any official voting process except otherwise.</p>
          <p style="color: black;">Election in Nigeria is still conducted and controlled by <b>INEC</b>.</p>
          <p style="color: black;">Go get your VOTER'S CARD. Both Votestats modelled data accuracy and positive growth of Nigeria depends on your positive activities with your Voter's card.</p>
          </div>
        </div> 

        <div style="width: 100%;">
        <center>
          
          <div style="width: 100%;"><a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="{{ url('/register') }}">Create your Profile now.</a></div>
          
        </center>
      </div>


 <footer class="android-footer mdl-mega-footer">
          <div class="mdl-mega-footer--top-section">
            <div class="mdl-mega-footer--left-section">
              <button class="mdl-mega-footer--social-btn"></button>
              &nbsp;
              <button class="mdl-mega-footer--social-btn"></button>
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
