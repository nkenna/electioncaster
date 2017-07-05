  <!DOCTYPE html>
	<html>
	<head>
		  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
<title>VoteStats - Voting Board</title>
    <!-- Styles -->
    
    <!-- Scripts -->
  
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

    </style>  

   <script type="text/javascript">
    $(document).ready(function(){
    	$("#abia").hide();
		$("#adamawa").hide();
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nasarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();

		$("#state").change(function(){
			if($("#state").val() == 'Abia'){
				$("#abia").show();
				$("#adamawa").hide();
				
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();
			}

			if($("#state").val() == 'Adamawa'){
				$("#abia").hide();
				$("#adamawa").show();
				
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();
			}


if($("#state").val() == 'AkwaIbom'){
				$("#abia").hide();
				$("#adamawa").hide();
				$("#akwaibom").show();
				
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();
			}


if($("#state").val() == 'Anambra'){
				$("#abia").hide();
				$("#adamawa").hide();
				$("#akwaibom").hide();
				
		
		$("#anambra").show();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();
			}


if($("#state").val() == 'Bauchi'){
				$("#abia").hide();
				$("#adamawa").hide();
				$("#akwaibom").hide();
				$("#adamawa").hide();
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").show();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();
			}


if($("#state").val() == 'Bayelsa'){
				$("#abia").hide();
				$("#adamawa").hide();
				$("#akwaibom").hide();
				$("#adamawa").hide();
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").show();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();
			}


if($("#state").val() == 'Benue'){
				$("#abia").hide();
				$("#adamawa").hide();
				$("#akwaibom").hide();
				$("#adamawa").hide();
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").show();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();
			}


if($("#state").val() == 'Borno'){
				$("#abia").hide();
				$("#adamawa").hide();
				$("#akwaibom").hide();
				$("#adamawa").hide();
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").show();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();
			}


if($("#state").val() == 'CrossRivers'){
				$("#abia").hide();
				$("#adamawa").hide();
				$("#akwaibom").hide();
				$("#adamawa").hide();
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").show();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();
			}


if($("#state").val() == 'Delta'){
				$("#abia").hide();
				$("#adamawa").hide();
				$("#akwaibom").hide();
				$("#adamawa").hide();
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").show();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();
			}


			if($("#state").val() == 'Ebonyi'){
				$("#abia").hide();
				$("#adamawa").hide();
				$("#akwaibom").hide();
				$("#adamawa").hide();
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").show();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();
			}

			if($("#state").val() == 'Edo'){
				$("#abia").hide();
				$("#adamawa").hide();
				$("#akwaibom").hide();
				$("#adamawa").hide();
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").show();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();
			}


if($("#state").val() == 'Ekiti'){
				$("#abia").hide();
				$("#adamawa").hide();
				$("#akwaibom").hide();
				$("#adamawa").hide();
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").show();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();
			}


if($("#state").val() == 'Enugu'){
				$("#abia").hide();
				$("#adamawa").hide();
				$("#akwaibom").hide();
				$("#adamawa").hide();
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").show();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();
			}


if($("#state").val() == 'FCT'){
				$("#abia").hide();
				$("#adamawa").hide();
				$("#akwaibom").hide();
				$("#adamawa").hide();
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").show();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();
			}


if($("#state").val() == 'Gombe'){
				$("#abia").hide();
				$("#adamawa").hide();
				$("#akwaibom").hide();
				$("#adamawa").hide();
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").show();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();
			}


if($("#state").val() == 'Imo'){
				$("#abia").hide();
				$("#adamawa").hide();
				$("#akwaibom").hide();
				$("#adamawa").hide();
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").show();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();
			}


if($("#state").val() == 'Jigawa'){
				$("#abia").hide();
				$("#adamawa").hide();
				$("#akwaibom").hide();
				$("#adamawa").hide();
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").show();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();
			}


if($("#state").val() == 'Kaduna'){
				$("#abia").hide();
				$("#adamawa").hide();
				$("#akwaibom").hide();
				$("#adamawa").hide();
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").show();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();
			}


if($("#state").val() == 'Kano'){
				$("#abia").hide();
				$("#adamawa").hide();
				$("#akwaibom").hide();
				$("#adamawa").hide();
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").show();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();
			}


			if($("#state").val() == 'Katsina'){
				$("#abia").hide();
				$("#adamawa").hide();
				$("#akwaibom").hide();
				$("#adamawa").hide();
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").show();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();
			}

			if($("#state").val() == 'Kebbi'){
				$("#abia").hide();
				$("#adamawa").hide();
				$("#akwaibom").hide();
				$("#adamawa").hide();
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").show();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();
			}


if($("#state").val() == 'Kogi'){
				$("#abia").hide();
				$("#adamawa").hide();
				$("#akwaibom").hide();
				$("#adamawa").hide();
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").show();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();
			}


if($("#state").val() == 'Kwara'){
				$("#abia").hide();
				$("#adamawa").hide();
				$("#akwaibom").hide();
				$("#adamawa").hide();
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").show();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();
			}


if($("#state").val() == 'Lagos'){
				$("#abia").hide();
				$("#adamawa").hide();
				$("#akwaibom").hide();
				$("#adamawa").hide();
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").show();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();
			}


if($("#state").val() == 'Nasarawa'){
				$("#abia").hide();
				$("#adamawa").hide();
				$("#akwaibom").hide();
				$("#adamawa").hide();
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nasarawa").show();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();
			}


if($("#state").val() == 'Niger'){
				$("#abia").hide();
				$("#adamawa").hide();
				$("#akwaibom").hide();
				$("#adamawa").hide();
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").show();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();
			}





if($("#state").val() == 'Ogun'){
				$("#abia").hide();
				$("#adamawa").hide();
				$("#akwaibom").hide();
				$("#adamawa").hide();
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").show();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();
			}


if($("#state").val() == 'Ondo'){
				$("#abia").hide();
				$("#adamawa").hide();
				$("#akwaibom").hide();
				$("#adamawa").hide();
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();
			}


if($("#state").val() == 'Ondo'){
				$("#abia").hide();
				$("#adamawa").hide();
				$("#akwaibom").hide();
				$("#adamawa").hide();
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").show();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();
			}


if($("#state").val() == 'Osun'){
				$("#abia").hide();
				$("#adamawa").hide();
				$("#akwaibom").hide();
				$("#adamawa").hide();
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").show();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();
			}


if($("#state").val() == 'Oyo'){
				$("#abia").hide();
				$("#adamawa").hide();
				$("#akwaibom").hide();
				$("#adamawa").hide();
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").show();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();
			}


if($("#state").val() == 'Plateau'){
				$("#abia").hide();
				$("#adamawa").hide();
				$("#akwaibom").hide();
				$("#adamawa").hide();
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").show();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();
			}


if($("#state").val() == 'Rivers'){
				$("#abia").hide();
				$("#adamawa").hide();
				$("#akwaibom").hide();
				$("#adamawa").hide();
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").show();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();
			}

if($("#state").val() == 'Sokoto'){
				$("#abia").hide();
				$("#adamawa").hide();
				$("#akwaibom").hide();
				$("#adamawa").hide();
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").show();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").hide();
			}

			if($("#state").val() == 'Taraba'){
				$("#abia").hide();
				$("#adamawa").hide();
				$("#akwaibom").hide();
				$("#adamawa").hide();
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").show();
		$("#yobe").hide();
		$("#zamfara").hide();
			}



			if($("#state").val() == 'Yobe'){
				$("#abia").hide();
				$("#adamawa").hide();
				$("#akwaibom").hide();
				$("#adamawa").hide();
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").show();
		$("#zamfara").hide();
			}

			if($("#state").val() == 'Zamfara'){
				$("#abia").hide();
				$("#adamawa").hide();
				
		$("#akwaibom").hide();
		$("#anambra").hide();
		$("#bauchi").hide();
		$("#bayelsa").hide();
		$("#benue").hide();
		$("#borno").hide();
		$("#crossriver").hide();
		$("#delta").hide();
		$("#ebonyi").hide();
		$("#edo").hide();
		$("#ekiti").hide();
		$("#enugu").hide();
		$("#fct").hide();
		$("#gombe").hide();
		$("#imo").hide();
		$("#jigawa").hide();
		$("#kaduna").hide();
		$("#kano").hide();
		$("#katsina").hide();
		$("#kebbi").hide();
		$("#kogi").hide();
		$("#kwara").hide();
		$("#lagos").hide();
		$("#nassarawa").hide();
		$("#niger").hide();
		$("#ogun").hide();
		$("#ondo").hide();
		$("#osun").hide();
		$("#oyo").hide();
		$("#plateau").hide();
		$("#rivers").hide();
		$("#sokoto").hide();
		$("#taraba").hide();
		$("#yobe").hide();
		$("#zamfara").show();
			}



		})

})





    </script>           

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
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="{{ url('/dataland') }}">Data-land</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="{{ url('/contactus') }}">Contact</a>
           
           
               
          @if (Route::has('home'))
                
                    @if (Auth::check())
                        <a class="mdl-navigation__link mdl-typography--text-uppercase" href="{{ url('/home') }}">Dashboard</a>
                   <a class="mdl-navigation__link mdl-typography--text-uppercase" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
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
           <a class="mdl-navigation__link" href="">Home</a>
          <a class="mdl-navigation__link" href="{{ url('/about') }}">About</a>
          <a class="mdl-navigation__link" href="{{ url('/dataland') }}">Data-Land</a>
          <a class="mdl-navigation__link" href="{{ url('/contactus') }}">Contact Us</a>
         
          <div class="android-drawer-separator"></div>
          <a class="mdl-navigation__link" href="{{ url('/supportus') }}">Support VoteStats</a>
          <a class="mdl-navigation__link" href="{{ url('/resolveissue') }}">Resolve an Issue</a>
            
          
          
          <div class="android-drawer-separator"></div>
          @if (Route::has('login'))
                
                    @if (Auth::check())
                       <a class="mdl-navigation__link " href="{{ url('/home') }}">Dashboard</a>
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

             <div style="height: auto; width: 100%;">

            
             	<select id="state" name="state">
             		<option value="" selected="selected">Select State</option>
 
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
                  <option value='FCT'>'FCT'</option>
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


             	<!-- abia state section -->
	<div class="mdl-typography--font-regular mdl-typography--font-thin" style="width: 100%; padding: 3px;" id="abia">
	
	
	<div class="mdl-typography--font-regular mdl-typography--font-thin">Total number of users in Abia State: {{ Auth::user()->getAllAbia()}} </div>
	<div class="mdl-typography--font-regular mdl-typography--font-thin">Total number of users using Abia State as Residence: {{ Auth::user()->getAllAbiaResident()}} </div>
	<div class="mdl-typography--font-regular mdl-typography--font-thin">Total number of users using Abia State as Origin: {{ Auth::user()->getAllAbiaOrigin()}} </div>
	<div class="mdl-typography--font-regular mdl-typography--font-thin">Total number of Gubernational Votes in Abia State: {{ Auth::user()->getAllAbiaGovVotes()}} </div>
	<div class="mdl-typography--font-regular mdl-typography--font-thin">  {!! Auth::user()->getAbiaGovChart()->get('abialgabar')->render() !!} </div>
	
	
	<div id="disqus_thread"></div>
 <script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = 'http://www.votestats.com.ng/user/govdataview';  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = 'govDataviewAnambra'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://votestats.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>

<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


	</div>
	<!-- end of abia state section -->

<!--Adamawa state starts-->
	<div id="adamawa">
     @inject('allAdamawaRes', 'App\Http\Controllers\adamawaController')
     @inject('allAdamawaOri', 'App\Http\Controllers\adamawaController')
     @inject('allAdamawa', 'App\Http\Controllers\adamawaController')
     @inject('adamawaAge', 'App\Http\Controllers\adamawaController')
     @inject('adamawaLgaParty', 'App\Http\Controllers\adamawaController')
     @inject('adamawaOccupation', 'App\Http\Controllers\adamawaController')
     @inject('adamawaGender', 'App\Http\Controllers\adamawaController')
     @inject('allAdamawaCount', 'App\Http\Controllers\adamawaController')
     
     
     <div class="mdl-typography--font-regular mdl-typography--font-thin" style="width: 100%; padding: 3px;">Number of users registered under Adamawa State: {{ $allAdamawa->allRegisterAdamawa()}} </div>
	<div class="mdl-typography--font-regular mdl-typography--font-thin" style="width: 100%; padding: 3px;">Number of users using Adamawa State as Resident: {{ $allAdamawaRes->allAdamawaResident()}} </div>
	<div class="mdl-typography--font-regular mdl-typography--font-thin" style="width: 100%; padding: 3px;">Number of users using Adamawa State as Origin: {{ $allAdamawaOri->allAdamawaOrigin()}} </div>
	<div class="mdl-typography--font-regular mdl-typography--font-thin">Count of Gubernational Votes in Adamawa State: {{ $allAdamawaCount->getAllVoteCount()}} </div>

<div style="width: 100%; padding: 3px;" >  {!! $adamawaAge->getVoteByAgeAdamawa()->render() !!} </div>

<div style="width: 100%; padding: 3px;" >  {!! $adamawaLgaParty->getVoteByLGAAdamawa()->render() !!} </div>

<div style="width: 100%; padding: 3px;" >  {!! $damawaOccupation->getVotesByOccupation()->render() !!} </div>

<div style="width: 100%; padding: 3px;" >  {!! $adamawaGender->getVotesBySex()->render() !!} </div>

<div style="width: 100%; padding: 3px;" >  {!! $adamawaAge->getVoteByAgeAdamawa()->render() !!} </div>
     
     
            	
	<div id="disqus_thread"></div>
 <script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = 'http://www.votestats.com.ng/user/govdataview';  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = 'govDataviewAnambra'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://votestats.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>

<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        
        </div>
	<!--Adamawa state ends-->
        
        
	<div id="akwaibom"><h2>Akwa Ibom State data is not yet ready</h2></div>

	<!-- anambra state section -->
	<!-- inject the controllers -->
	@inject('anambraChart', 'App\Http\Controllers\states\anambraController')
	@inject('allAnambra2', 'App\Http\Controllers\states\anambraController')
	@inject('allAnambra1', 'App\Http\Controllers\states\anambraController')
	@inject('allAnambraGov', 'App\Http\Controllers\states\anambraController')
	@inject('anambraLgaParty', 'App\Http\Controllers\states\anambraController')
	@inject('anambraAge', 'App\Http\Controllers\states\anambraController')

	<div class="mdl-typography--font-regular mdl-typography--font-thin" style="width: 100%; padding: 3px;" id="anambra"><h2>Anambra State data Voting Data</h2>
	<div class="mdl-typography--font-regular mdl-typography--font-thin" style="width: 100%; padding: 3px;">Number of users using Anambra State as Resident: {{ $allAnambra2->allAnambraResident()}} </div>
	<div class="mdl-typography--font-regular mdl-typography--font-thin" style="width: 100%; padding: 3px;">Number of users using Anambra State as Origin: {{ $allAnambra1->allAnambraOrigin()}} </div>
	<div class="mdl-typography--font-regular mdl-typography--font-thin">Count of Gubernational Votes in Anambra State: {{ $allAnambraGov->allAnambraVotes()}} </div>

<div style="width: 100%; padding: 3px;" >  {!! $anambraChart->anambraVoteParty()->render() !!} </div>
<div style="width: 100%; padding: 3px;">  {!! $anambraAge->anambraVoteAge()->render() !!} </div>

<div style="width: 100%; padding: 3px;">  {!! $anambraLgaParty->anambraVoteLGA()->render() !!} </div>

 <div id="disqus_thread"></div>
 <script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = 'http://www.votestats.com.ng/user/govdataview';  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = 'govDataviewAnambra'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://votestats.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>

<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            


	</div>
	<!-- end of anambra state section -->
	<div id="bauchi"><h2>Bauchi State data is not yet ready</h2></div>
	<div id="bayelsa"><h2>Bayelsa State data is not yet ready</h2></div>
	<div id="benue"><h2>Benue State data is not yet ready</h2></div>
	<div id="borno"><h2>Borno State data is not yet ready</h2></div>
	<div id="crossriver"><h2>Cross River State data is not yet ready</h2></div>
	<div id="delta"><h2>Delta State data is not yet ready</h2></div>
	<div id="ebonyi"><h2>Ebonyi State data is not yet ready</h2></div>
	<div id="edo"><h2>Edo State data is not yet ready</h2></div>
	<div id="ekiti"><h2>Ekiti State data is not yet ready</h2></div>
	<div id="enugu"><h2>Enugu State data is not yet ready</h2></div>
	<div id="fct"><h2>Abuja data is not yet ready</h2></div>
	<div id="gombe"><h2>Gombe State data is not yet ready</h2></div>
	<div id="imo"><h2>Imo State data is not yet ready</h2></div>
	<div id="jigawa"><h2>Jigawa State data is not yet ready</h2></div>
	<div id="kaduna"><h2>Kaduna State data is not yet ready</h2></div>
	<div id="kano"><h2>Kano State data is not yet ready</h2></div>
	<div id="katsina"><h2>Katsina State data is not yet ready</h2></div>
	<div id="kebbi"><h2>Kebbi State data is not yet ready</h2></div>
	<div id="kogi"><h2>Kogi State data is not yet ready</h2></div>
	<div id="kwara"><h2>Kwara State data is not yet ready</h2></div>
	<div id="lagos"><h2>Lagos State data is not yet ready</h2></div>
	<div id="nasarawa"><h2>Nasarawa State data is not yet ready</h2></div>
	<div id="niger"><h2>Niger State data is not yet ready</h2></div>
	<div id="ogun"><h2>Ogun State data is not yet ready</h2></div>
	<div id="ondo"><h2>Ondo State data is not yet ready</h2></div>
	<div id="osun"><h2>Osun State data is not yet ready</h2></div>

	<div id="oyo"><h2>Oyo State data is not yet ready</h2></div>
	<div id="plateau"><h2>Plateau State data is not yet ready</h2></div>
	<div id="rivers"><h2>Rivers State data is not yet ready</h2></div>
	<div id="sokoto"><h2>Sokoto State data is not yet ready</h2></div>
	<div id="taraba"><h2>Taraba State data is not yet ready</h2></div>
	<div id="yobe"><h2>Yobe State data is not yet ready</h2></div>
	<div id="zamfara"><h2>Zamfara State data is not yet ready</h2></div>


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
           




	</body>
	</html>