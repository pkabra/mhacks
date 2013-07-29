<?/*


$$\      $$\ $$\   $$\  $$$$$$\   $$$$$$\  $$\   $$\  $$$$$$\  
$$$\    $$$ |$$ |  $$ |$$  __$$\ $$  __$$\ $$ | $$  |$$  __$$\ 
$$$$\  $$$$ |$$ |  $$ |$$ /  $$ |$$ /  \__|$$ |$$  / $$ /  \__|
$$\$$\$$ $$ |$$$$$$$$ |$$$$$$$$ |$$ |      $$$$$  /  \$$$$$$\  
$$ \$$$  $$ |$$  __$$ |$$  __$$ |$$ |      $$  $$<    \____$$\ 
$$ |\$  /$$ |$$ |  $$ |$$ |  $$ |$$ |  $$\ $$ |\$$\  $$\   $$ |
$$ | \_/ $$ |$$ |  $$ |$$ |  $$ |\$$$$$$  |$$ | \$$\ \$$$$$$  |
\__|     \__|\__|  \__|\__|  \__| \______/ \__|  \__| \______/ 
                                                               
                                                               
*/?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>MHacks 2014</title>
        <meta name="description" content="MHacks 2014">
        <meta name="viewport" content="width=device-width">
        <link href='http://fonts.googleapis.com/css?family=Cabin:400,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css?v=<?php print time(); ?>">
        <link rel="stylesheet" href="css/960.css">
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <!-- Shortcut Icon -->
        <link rel="shortcut icon" type="text/css" href="img/logo-black.png">
    </head>
    <body>    
        <!--[if lt IE 9]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
		<div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=265693566885388";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <div id="loading">
        	<h1><img src="img/logo-black.png" style="width:200px"></h1>
            <h1><img src="img/loading.gif" id="gif"></h1>
            <h1 id="load-percentage" style="font-family: 'Source Code Pro', sans-serif;">0%</h1>
            <noscript>
            	<h1 style="margin:0; margin-top:-30px;">Javascript Not Enabled</h1>
                <p align="center" style="margin:0">Our website depends on Javascript to function. Please enable Javascript or <a style="color:blue;" href="http://google.com/chrome" target="_blank">download a browser</a> that supports Javascript</p>
            </noscript>
        </div>
        <div id="mute-button" onclick="switchAudio();" style="background-size:cover; background-position:center;"></div>
		<div id="main-content">
    		<div id="head" style="background:url('img/MichiganStadium.jpg') no-repeat; background-size:cover;">
                <video id="background-video" loop preload="auto" controls>
                <?php
                    //Firefox doesn't support mp4
        			if(strpos($_SERVER['HTTP_USER_AGENT'], "Firefox")){
                        echo '<source src="video/mhacks.ogg" type="video/ogg">';
        			}
        			else{
                        echo '<source src="video/mhacks.mp4" type="video/mp4">';
        			}
    			?>
                </video>
                <div class="title">
                	<div id="logo">
                        <a href="#"><img src="img/logo-white.png"></a>
                    </div>
                    <div id="info">
                        <a class="button-blue" href="javascript:void(0);">Sign Up Now</a>
                        <a class="button-clear venue-button" onClick="hideVideo();" style="margin-left:20px;" href="javascript:void(0);">What's the Venue?</a>
                    </div>
                    <div id="facepile">
                        <div class="fb-facepile" data-href="http://facebook.com/MHacksHackathon" data-max-rows="1" data-size="large" data-width="300" data-colorscheme="dark"></div>
                    </div>
                    <div id="location">
                        <h1>Yes, We're not kidding...</h1>
                        <h1>MHacks 2014 @ <span style="color:#ffff00;">The Big House</span></h1>
                        <h1>Its going to be EPIC</h1>
                    </div>
                </div>    
            </div>

            <nav id="navbar">
                <div class="wrapper">
                    <a href="#head" class="logo"><img src="img/logo-black.png"></a>
                    <ul class="nav" id="mainnav">
                        <li><a href="#what">Where!</a></li>
                        <li><a href="#included">What's free!</a></li>                        
                        <li><a href="#sponsors">Who's Invited?</a></li>
                        <li><a href="#">Sponsor Us!</a></li>
                        <li><a href="#" id="sign-up">Sign Up</a></li>
                    </ul>
                </div>
            </nav>


            <div id="content">
            	<div class="container">
                	<div class="row clearfix">
                    	<h1 style="margin-bottom:40px;">This is as big as it gets.</h1>
                     	<div id="what" class="row_12 clearfix">
                            <div class="grid_12">
                                <h2>
                                    <span class="mega" style="margin-left:0;">36</span> hours
                                    <span class="mega">500+</span> hackers
                                    <span class="mega">$20000+</span> in prizes
                                </h2>
                            </div>
                        </div>
                        <div class="row_12 clearfix">
                            <div class="grid_12">
                                <h2>February 2014 @ <span style="color:#ffcb05;">The Big House</span></h2> 
                            </div>
                        </div>
                        <div id="included" class="row_12 clearfix">
                            <h1>What's included?</h1>
                            <div class="grid_5 alpha" style="padding:20px; border:1px solid #ccc;">
                                <h2>loads to eat. breakfast, lunch, dinner and a never ending supply of snacks...</h2>
                                <img src="img/food.jpg" style="width:100%;">
                            </div>
                            <div class="grid_5 omega" style="padding:20px; border:1px solid #ccc; min-height:424px;">
                                <h2>...free transport reinbursement</h2>
                                <img src="img/transport.jpg" style="width:100%; margin-top: 65px;">
                            </div>
                            <!-- Start next row -->
                            <div class="grid_1 alpha">&nbsp;</div>
                            <div class="grid_9" style="padding:20px; margin-left:60px; border:1px solid #ccc; margin-top:50px;">
                                <h2>and sooo much caffeine...</h2>
                                <img src="img/redbull.jpg" style="width:45%; float:left;">
                                <img src="img/brownies.jpg" style="width:45%; float:right;">
                            </div>
                            <div class="grid_1 omega">&nbsp;</div>
                        </div>
                        <div id="sponsors" class="row_12 clearfix">
                            <h1>Whose Invited?</h1>
                            <div class="grid_12">
                                <img src="img/companies/facebook.png" class="company-logo" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    		<div id="footer">
            	<div class="container">
                	<p>&copy; <a href="#" onClick="mixpanel.track('MPowered Clicked');">MHacks 2013</a> | | Website by <a href="http://kabra.com" target="_blank" onClick="mixpanel.track('Pratik Designer Clicked');">Pratik Kabra</a> and <a href="http://www.thedanyaal.com" target="_blank">Danyaal Rangwala</a></p>
                </div>
            </div>
		</div>

		<!-- Le Scripts -->
		<script src="js/vendor/jquery-1.9.0.min.js"></script>
        <!--[if lt IE 9]>
            <script src="js/jquery.backgroundSize.js"></script>
        <![endif]-->
        <script src="js/jquery.sticky.js" type="text/javascript"></script>
        <script src="js/main.js?v=<?php print time(); ?>"></script>

		<!-- Say hello to Alex Lee and his amazing hips -->
    </body>
</html>
