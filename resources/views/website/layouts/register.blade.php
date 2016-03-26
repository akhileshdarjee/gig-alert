<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <title>Register - Gig Alert</title>
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
                <div class="col-md-4 col-md-offset-4 col-xs-12 mar-t-40">
                  <div class="bg-white padd-15">
                      <form name="register" id="register" method="POST" action="/register" class="form-signin">
                        <h2 class="form-signin-heading mar-0 mar-b-15">Please register</h2>
                        @if (Session::has('success') && Session::get('success') == "true")
                            <div class="block">
                                <div class="alert alert-success alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                    <strong>
                                        <i class="fa fa-check fa-lg"></i> {{ Session::get('msg') }}
                                    </strong>
                                </div>
                            </div>
                        @elseif (Session::has('success') && Session::get('success') == "false")
                            <div class="block">
                                <div class="alert alert-danger alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                    <strong>
                                        <i class="fa fa-exclamation-triangle fa-lg"></i> {{ Session::get('msg') }}
                                    </strong>
                                </div>
                            </div>
                        @endif
                        {!! csrf_field() !!}
                        <label for="login_id" class="sr-only">Email address</label>
                        <input type="text" name="login_id" id="login_id" class="form-control mar-b-15" placeholder="Email address" required="" autofocus="">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" name="password" id="password" class="form-control mar-b-15" placeholder="Password" required="">
                        <button class="btn btn-lg btn-primary btn-block btn-green" type="submit">Register</button>
                      </form>
                  </div>
                </div>
            </div>
        </div>
    </body>
</html>