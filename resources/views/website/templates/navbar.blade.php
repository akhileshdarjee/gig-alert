<header class="navbar navbar-static-top bs-docs-nav bg-orange" id="top" role="banner"> 
    <div class="container"> 
        <div class="navbar-header"> 
          <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false"> 
            <span class="sr-only">Toggle navigation</span> 
            <span class="icon-bar"></span> 
            <span class="icon-bar"></span> 
            <span class="icon-bar"></span> 
          </button> 
          <a href="/" class="navbar-brand fnt-14 bold cl-white">Gig Alert</a> 
        </div> 
        <nav id="bs-navbar" class="collapse navbar-collapse"> 
          <ul class="nav navbar-nav"> 
            <li class="active"> 
                <a href="/gigs" class="fnt-14 bold cl-white">All Gigs <i class="fa fa-music"></i></a> 
            </li> 
            <li> 
                <a href="/discover" class="fnt-14 bold cl-white">Discover <i class="fa fa-heart"></i></a> 
            </li>
            @if (Auth::check())
                <li> 
                    <a href="/following" class="fnt-14 bold cl-white">Following<i class="fa fa-users"></i></a> 
                </li> 
                <li> 
                    <a href="/logout" class="fnt-14 bold cl-white">Logout <i class="fa fa-sign-out"></i></a> 
                </li>
            @endif
          </ul> 
        </nav> 
    </div>
</header>