<!--

$$\      $$\ $$\   $$\  $$$$$$\   $$$$$$\  $$\   $$\  $$$$$$\  
$$$\    $$$ |$$ |  $$ |$$  __$$\ $$  __$$\ $$ | $$  |$$  __$$\ 
$$$$\  $$$$ |$$ |  $$ |$$ /  $$ |$$ /  \__|$$ |$$  / $$ /  \__|
$$\$$\$$ $$ |$$$$$$$$ |$$$$$$$$ |$$ |      $$$$$  /  \$$$$$$\  
$$ \$$$  $$ |$$  __$$ |$$  __$$ |$$ |      $$  $$<    \____$$\ 
$$ |\$  /$$ |$$ |  $$ |$$ |  $$ |$$ |  $$\ $$ |\$$\  $$\   $$ |
$$ | \_/ $$ |$$ |  $$ |$$ |  $$ |\$$$$$$  |$$ | \$$\ \$$$$$$  |
\__|     \__|\__|  \__|\__|  \__| \______/ \__|  \__| \______/ 
                                                                                                                            
-->

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
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400' rel='stylesheet' type='text/css'>
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
        <div id="mute-button" onclick="switchAudio();" style="background-size:cover; background-position:center;"></div>
		<div id="main-content">
    		<div id="head">
                <video id="background-video" loop preload="auto" controls autoplay>
                    <source src="video/mhacks.mp4" type="video/mp4">
                    <source src="video/mhacks.ogg" type="video/ogg">
                </video>
                <div class="title">
                	<div id="logo">
                        <a href="#"><img src="img/logo-white.png"></a>
                    </div>
                    <div id="info">
                        <a class="button-blue" onclick="ga('send', 'Links', 'Click', 'Signup Button');" href="javascript:void(0);">Sign Up Now</a>
                        <a class="button-clear venue-button" onClick="hideVideo();" onclick="ga('send', 'Links', 'Click', 'Venue Button');" style="margin-left:20px;" href="javascript:void(0);">What's the Venue?</a>
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

            <div id="content">
            	<div class="container">
                	<div class="row clearfix">
                    	<h1>MHacks 2014 at The Big House</h1>
                        <p>The best student hackathon meets<br>the biggest stadium in America</p>
                        <img src="img/stadium-fade.jpg" style="width:100%;">
                    </div>
                    <div id="about" class="row clearfix" style="padding-top:100px;">
                        <div class="left" style="padding-top:10px;">
                            <p>1500+ hackers</p>
                            <p>36 hours</p>
                            <p>$20000 in prizes</p>
                            <p>Travel Reimbursement</p>
                            <p>Endless Food</p>
                            <p>So Much Swag</p>
                        </div>
                        <div class="right">
                            <img src="img/endlessfood.jpg" style="">
                            <div class="smallphotos">
                                <img src="img/hack.jpg" style="width:48%;">
                                <img src="img/getupandgo.jpg" style="width:48%; float:right;">
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

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-42066722-1', 'kabra.com');
          ga('send', 'pageview');
        </script>
		<!-- Le Scripts -->
		<script src="js/vendor/jquery-1.9.0.min.js"></script>
        <!--[if lt IE 9]>
            <script src="js/jquery.backgroundSize.js"></script>
        <![endif]-->
        <script src="js/jquery.sticky.js" type="text/javascript"></script>
        <script src="js/main.js?v=<?php print time(); ?>"></script>
    </body>
</html>
