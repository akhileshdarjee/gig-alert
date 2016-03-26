<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <title>Follow - Gig Alert</title>
        @include('website.templates.headers')
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
                <div class="col-md-8 col-md-offset-2 col-xs-12">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#artists" aria-controls="artists" role="tab" data-toggle="tab">Artists</a></li>
                      <li role="presentation"><a href="#venues" aria-controls="venues" role="tab" data-toggle="tab">Venues</a></li>
                      <li role="presentation"><a href="#genres" aria-controls="genres" role="tab" data-toggle="tab">Genres</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active bg-white" id="artists">
                                <form class="row padd-t-20 padd-15 mar-0">
                                  <div class="col-md-10 col-xs-9 padd-l-0">
                                    <input type="text" class="form-control input-lg" id="search" placeholder="Search Artists">
                                  </div>
                                  <div class="col-md-2 col-xs-3 pull-right text-right padd-0">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block btn-blue">Search</button>
                                  </div>
                                  </form>
                                  <hr class="mar-0" />
                                <!-- List   -->
                                <div class="list">
                                  <div class="col-xs-2 padd-0 artist-img">
                                    <a href="#">
                                      <img src="img/artist.jpg" class="img-responsive" />
                                    </a>
                                  </div>
                                  <div class="col-md-8 col-xs-7 mar-t-5">
                                    <h3 class="mar-0 title"><a href="#">Nucleya</a></h3>
                                    <p class="mar-b-2">
                                      Loren ipsum
                                    </p>
                                    <p>
                                        <span class="label label-default">Default</span>
                                        <span class="label label-warning">2 Gigs</span>
                                        
                                    </p>
                                  </div>
                                  <div class="col-md-2 col-xs-3 pull-right padd-0 mar-t-3per">
                                    <a href="#" class="btn btn-lg btn-success btn-block btn-green">Follow</a>
                                  </div>
                                </div>
                               <!--  List  -->

                               <!-- List   -->
                                <div class="list">
                                  <div class="col-xs-2 padd-0 artist-img">
                                    <a href="#">
                                      <img src="img/artist.jpg" class="img-responsive" />
                                    </a>
                                  </div>
                                  <div class="col-md-8 col-xs-7 mar-t-5">
                                    <h3 class="mar-0 title"><a href="#">Nucleya</a></h3>
                                    <p class="mar-b-2">
                                      Loren ipsum
                                    </p>
                                    <p>
                                        <span class="label label-default">Default</span>
                                        <span class="label label-warning">2 Gigs</span>
                                        
                                    </p>
                                  </div>
                                  <div class="col-md-2 col-xs-3 pull-right padd-0 mar-t-3per">
                                    <a href="#" class="btn btn-lg btn-success btn-block btn-green">Follow</a>
                                  </div>
                                </div>
                               <!--  List  -->
                      </div>
                      <div role="tabpanel" class="tab-pane bg-white" id="venues">
                          <form class="row padd-t-20 padd-15 mar-0">
                                  <div class="col-md-10 col-xs-9 padd-l-0">
                                    <input type="text" class="form-control input-lg" id="search" placeholder="Search Artists">
                                  </div>
                                  <div class="col-md-2 col-xs-3 pull-right text-right padd-0">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block btn-blue">Search</button>
                                  </div>
                                  </form>
                                  <hr class="mar-0" />
                                <!-- List   -->
                                <div class="list">
                                  <div class="col-xs-2 padd-0 artist-img">
                                    <a href="#">
                                      <img src="img/artist.jpg" class="img-responsive" />
                                    </a>
                                  </div>
                                  <div class="col-md-8 col-xs-7 mar-t-5">
                                    <h3 class="mar-0 title"><a href="#">Nucleya</a></h3>
                                    <p class="mar-b-2">
                                      Loren ipsum
                                    </p>
                                    <p>
                                        <span class="label label-default">Default</span>
                                        <span class="label label-warning">2 Gigs</span>
                                        
                                    </p>
                                  </div>
                                  <div class="col-md-2 col-xs-3 pull-right padd-0 mar-t-3per">
                                    <a href="#" class="btn btn-lg btn-success btn-block btn-green">Follow</a>
                                  </div>
                                </div>
                               <!--  List  -->

                               <!-- List   -->
                                <div class="list">
                                  <div class="col-xs-2 padd-0 artist-img">
                                    <a href="#">
                                      <img src="img/artist.jpg" class="img-responsive" />
                                    </a>
                                  </div>
                                  <div class="col-md-8 col-xs-7 mar-t-5">
                                    <h3 class="mar-0 title"><a href="#">Nucleya</a></h3>
                                    <p class="mar-b-2">
                                      Loren ipsum
                                    </p>
                                    <p>
                                        <span class="label label-default">Default</span>
                                        <span class="label label-warning">2 Gigs</span>
                                        
                                    </p>
                                  </div>
                                  <div class="col-md-2 col-xs-3 pull-right padd-0 mar-t-3per">
                                    <a href="#" class="btn btn-lg btn-success btn-block btn-green">Follow</a>
                                  </div>
                                </div>
                               <!--  List  -->
                      </div>
                      <div role="tabpanel" class="tab-pane bg-white" id="genres">
                          
                          <form class="row padd-t-20 padd-15 mar-0">
                                  <div class="col-md-10 col-xs-9 padd-l-0">
                                    <input type="text" class="form-control input-lg" id="search" placeholder="Search Artists">
                                  </div>
                                  <div class="col-md-2 col-xs-3 pull-right text-right padd-0">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block btn-blue">Search</button>
                                  </div>
                                  </form>
                                  <hr class="mar-0" />
                                <!-- List   -->
                                <div class="list">
                                  <div class="col-xs-2 padd-0 artist-img">
                                    <a href="#">
                                      <img src="img/artist.jpg" class="img-responsive" />
                                    </a>
                                  </div>
                                  <div class="col-md-8 col-xs-7 mar-t-5">
                                    <h3 class="mar-0 title"><a href="#">Nucleya</a></h3>
                                    <p class="mar-b-2">
                                      Loren ipsum
                                    </p>
                                    <p>
                                        <span class="label label-default">Default</span>
                                        <span class="label label-warning">2 Gigs</span>
                                        
                                    </p>
                                  </div>
                                  <div class="col-md-2 col-xs-3 pull-right padd-0 mar-t-3per">
                                    <a href="#" class="btn btn-lg btn-success btn-block btn-green">Follow</a>
                                  </div>
                                </div>
                               <!--  List  -->

                               <!-- List   -->
                                <div class="list">
                                  <div class="col-xs-2 padd-0 artist-img">
                                    <a href="#">
                                      <img src="img/artist.jpg" class="img-responsive" />
                                    </a>
                                  </div>
                                  <div class="col-md-8 col-xs-7 mar-t-5">
                                    <h3 class="mar-0 title"><a href="#">Nucleya</a></h3>
                                    <p class="mar-b-2">
                                      Loren ipsum
                                    </p>
                                    <p>
                                        <span class="label label-default">Default</span>
                                        <span class="label label-warning">2 Gigs</span>
                                        
                                    </p>
                                  </div>
                                  <div class="col-md-2 col-xs-3 pull-right padd-0 mar-t-3per">
                                    <a href="#" class="btn btn-lg btn-success btn-block btn-green">Follow</a>
                                  </div>
                                </div>
                               <!--  List  -->
                      </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
