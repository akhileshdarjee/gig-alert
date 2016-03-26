<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Gig Map</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="tile.png">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body class="bg-gray">

        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!--  Header Start  -->

          <header class="navbar navbar-static-top bs-docs-nav bg-orange" id="top" role="banner"> 
            <div class="container"> 
                <div class="navbar-header"> 
                  <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false"> 
                    <span class="sr-only">Toggle navigation</span> 
                    <span class="icon-bar"></span> 
                    <span class="icon-bar"></span> 
                    <span class="icon-bar"></span> 
                  </button> 
                  <a href="index.html" class="navbar-brand fnt-14 bold cl-white">Gig alert</a> 
                </div> 
                <nav id="bs-navbar" class="collapse navbar-collapse"> 
                  <ul class="nav navbar-nav"> 
                    <li class="active"> 
                        <a href="index.html" class="fnt-14 bold cl-white">Menu1 <i class="fa fa-th-large"></i></a> 
                    </li> 
                    <li> 
                        <a href="redeem.html" class="fnt-14 bold cl-white">Menu2 <i class="fa fa-users"></i></a> 
                    </li> 
                    <li> 
                        <a href="promos-list.html" class="fnt-14 bold cl-white">Menu3<i class="fa fa-users"></i></a> 
                    </li> 
                    <li> 
                        <a href="#" class="fnt-14 bold cl-white">Menu4 <i class="fa fa-cog"></i></a> 
                    </li> 
                    <li> 
                        <a href="#" class="fnt-14 bold cl-white" aria-expanded="true">Menu5<i class="fa fa-users"></i></a> 
                    </li> 
                  </ul> 
                </nav> 
            </div> 
          </header>

        <!--  Header end  -->

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-xs-12 mar-t-40">
                  <div class="bg-white padd-15">
                      <form class="form-signin">
                        <h2 class="form-signin-heading mar-0 mar-b-15">Please sign in</h2>
                        <label for="inputEmail" class="sr-only">Email address</label>
                        <input type="email" id="inputEmail" class="form-control mar-b-15" placeholder="Email address" required="" autofocus="">
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" class="form-control mar-b-15" placeholder="Password" required="">
                        <button class="btn btn-lg btn-primary btn-block btn-green" type="submit">Sign in</button>
                      </form>
                  </div>
                </div>
            </div>
        </div>

        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
        

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script> 
    </body>
</html>
