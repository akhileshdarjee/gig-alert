<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <title>Gig Alert</title>
        @include('website.templates.headers')
    </head>
    <body class="bg-home">

        <div id="large-header" class="large-header">
            <canvas id="demo-canvas" width="1440" height="325"></canvas>
        </div>

        <div class="container-fluid text-center">
          <div class="container">
             <div class="bg1">
                  <h1 class="logo">Gig alert</h1>
                  <div class="text-desc">
                    Never miss a Gig 
                  </div>
                  <h5>
                    of your favourite
                    <div class="slidingVertical">
                      <span>Genre</span>
                      <span>Artist</span>
                      <span>Venue</span>
                    </div>
                  </h5>
                  <p>
                    <a href="/user_login" class="btn btn-primary btn-lg">Login</a>
                    <a href="/register" class="btn btn-success btn-lg">Signup</a>
                  </p>
              </div>
          </div>
        </div>
        <footer class="navbar-fixed-bottom footer" role="contentinfo"> 
          <div class="container">
            <p class="text-center">
              Built at <a href="http://mumbaihackathon.in" target="_blank">Mumbai Hackathon</a>
            </a>
            </p> 
          </div> 
        </footer>
        <script src="/js/website/demo-4.js"></script>
    </body>
</html>