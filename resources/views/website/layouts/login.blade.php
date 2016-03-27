<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <title>Login - Gig Alert</title>
        @include('website.templates.headers')
    </head>
    <body class="bg-gray">

        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!--  Header Start  -->

          @include('website.templates.navbar')

        <!--  Header end  -->

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-xs-12 mar-t-40">
                  <div class="bg-white padd-15">
                      <form name="login" id="login" method="POST" action="/user_login" class="form-signin">
                        {!! csrf_field() !!}
                        <h2 class="form-signin-heading mar-0 mar-b-15">Please sign in</h2>
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
                        <label for="login_id" class="sr-only">Email address</label>
                        <input type="text" name="login_id" id="login_id" class="form-control mar-b-15" placeholder="Email address" required="" autofocus="">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" name="password" id="password" class="form-control mar-b-15" placeholder="Password" required="">
                        <button class="btn btn-lg btn-primary btn-block btn-green" type="submit">Sign in</button>
                      </form>
                  </div>
                </div>
            </div>
        </div>
    </body>
</html>
