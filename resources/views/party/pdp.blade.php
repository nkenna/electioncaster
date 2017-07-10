
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
<title>VoteStats- PDP</title>
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
   <center>  <p class="mdl-typography--display-2">Biblograghy about PDP</p></center> 

<p>
  People's Democratic Party (PDP) is a major contemporary political party in Nigeria. Its policies generally lie towards the centre-right of the political spectrum. It won every Presidential election between 1999 and 2011, and was until the 2015 elections, the governing party in the Fourth Republic although in some cases, amid a few controversial electoral circumstances. Currently, PDP controls only 12 states out of 36 states in Nigeria.
</p>

<p>
  In 1998 the PDP selected former military leader Olusegun Obasanjo as the presidential candidate in the elections of February 1999, with Atiku Abubakar (Governor-Elect of Adamawa State and a former leading member of the Social Democratic Party) as his running mate. The duo went on to win, being sworn-in in May 1999. The Minister of Finance in this government was Adamu Ciroma, a former secretary of the National Party of Nigeria (NPN).

In the legislative election held on 12 April 2003, the party won 54.5% of the popular vote and 223 out of 360 seats in the House of Representatives, and 76 out of 109 seats in the Senate. Its candidate in the presidential election of 19 April 2003, Olusegun Obasanjo, was re-elected with 61.9% of the vote.

In December 2006 Umaru Yar'Adua (formerly of the People's Redemption Party and the Social Democratic Party) was chosen as the presidential candidate of the ruling PDP for the April 2007 general election, receiving 3,024 votes from party delegates; his closest rival, Rochas Okorocha, received only 372 votes. Yar'Adua was eventually declared the winner of the 2007 general elections, held on April 21, and was sworn in on May 29, 2007, amid widespread allegations of electoral fraud. In the Nigerian National Assembly election, the party won 260 out of 360 seats in the House of Representatives and 85 out of 109 seats in the Senate.

At the PDP's 2008 National Convention, it chose Prince Vincent Ogbulafor as its National Chairman on March 8, 2008. Ogbulafor, who was the PDP's National Secretary from 2001 to 2005, was the party's consensus choice for the position of National Chairman, selected as an alternative to the rival leading candidates Sam Egwu (who was backed by Obasanjo) and Anyim Pius Anyim. All 26 other candidates, including Egwu and Anyim, withdrew in favor of Ogbulafor. Meanwhile, Alhaji Abubakar Kawu Baraje was elected as National Secretary.

In 2011, after the People's Democratic Party saw members defect for the Action Congress of Nigeria, some political commentators suspected that the PDP would lose the Presidency. Following PDP candidate Goodluck Jonathan's victory in the 2011 elections, it was reported that there were violent protests from northern youth.
</p>

<p>
  The longtime slogan of the People's Democratic Party has been "Power to the people". During the party's National Convention in Port Harcourt, Rivers State on 21 May 2016, David Mark, a former President of the Senate of Nigeria, introduced "Change the change" as the party's campaign slogan for the 2019 general elections.
</p>

<p>
  The party has a neoliberal stance in its economic policies and maintains a conservative stance on certain social issues, such as same-sex relations
</p>

<p>
  The PDP favors free-market policies which support economic liberalism, and limited government regulation. In 2003, President Olusegun Obasanjo and Finance Minister Ngozi Okonjo-Iweala embarked on a radical economic reform program, which reduced government spending through conservative fiscal policies, and saw the deregulation and privatization of numerous industries in Nigerian services sector — notably the Nigerian Telecommunications (NITEL) industry.

On the other hand, the PDP adopts a more leftist stance towards poverty and welfare. In 2005, President Obasanjo launched Nigeria's first National Health Insurance Scheme (NHIS) to ensure that every Nigerian has access to basic health care services.

The PDP strives to maintain the status quo on oil revenue distribution. Though the PDP government set up the Niger Delta Development Commission (NDDC) to address the needs of the oil-producing Niger Delta states, it has rebuffed repeated efforts to revert to the 50% to 50% federal-to-state government revenue allocation agreement established in 1966 during the First Republic.
</p>

<p>
  The PDP is against same-sex relations, and favors social conservatism on moral and religious grounds. In 2007, the PDP-dominated National Assembly sponsored a bill to outlaw homosexual relations, making it punishable by law for up to five years in prison.

The party is a moderate advocate of state-autonomy and religious freedom for the Nigerian provinces. In the year 2000 the introduction of Islamic law in some states in Northern Nigeria triggered sectarian violence in Kaduna and Abia states. The PDP-led federal government refused to bow to pressure from the southern, predominantly Christian states to repeal the law, and instead opted for a compromise where Islamic law would only apply to Muslims.
</p>

<p>
  In the 2015 elections, the incumbent president and PDP presidential nominee, Goodluck Jonathan, was defeated by General Muhammadu Buhari of the <a href="{{ url('/nigeria/political/party/hub/apc') }}">All Progressives Congress</a> by 55% to 45%, losing by 2.6 million votes, out of approximately 28.6 million valid votes cast. Out of Nigeria's 36 states and the Federal Capital Territory, General Muhammadu Buhari won 21 states while President Goodluck Jonathan won 15 states and the Federal Capital Territory.
</p>
        
        <p>Culled from <a href="https://en.wikipedia.org/wiki/People%27s_Democratic_Party_(Nigeria)" class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase android-link">wikipedia</a>. To provide more information about this article, please contact us: votestatsng@gmail.com or our <a href="www.facebook.com/votestatsng">facbook page</a></p>
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
