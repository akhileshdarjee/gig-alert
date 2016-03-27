<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <title>Following - Gig Alert</title>
        @include('website.templates.headers')
    </head>
    <body class="bg-gray">

        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        @include('website.templates.navbar')

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-xs-12 mar-t-40 col-sm-10 col-sm-offset-1">
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
                                @foreach($artists as $artist)
                                  <div class="list">
                                    <div class="col-xs-2 padd-0 artist-img">
                                      <a href="#">
                                        <img src="{{ $artist->avatar_link }}" class="img-responsive" />
                                      </a>
                                    </div>
                                    <div class="col-md-8 col-xs-7 mar-t-5">
                                      <h3 class="mar-0 title"><a href="/artist/{{ $artist->slug }}">{{ $artist->name }}</a></h3>
                                      <p class="mar-b-2">
                                        {!! nl2br($artist->description) !!}
                                      </p>
                                      @if (isset($artist_genres[$artist->id]) && $artist_genres[$artist->id])
                                        <p>
                                          @foreach($artist_genres[$artist->id] as $genre)
                                            <span class="label label-warning">{{ $genre }}</span>
                                          @endforeach
                                        </p>
                                      @endif
                                    </div>
                                    @if (Auth::check())
                                      <div class="col-md-2 col-xs-3 pull-right padd-0 mar-t-3per">
                                        <button data-href="/unfollow/artist/{{ $artist->id }}" class="btn btn-lg btn-success btn-block btn-green follow" data-loading-text="Processing...">Unfollow</a>
                                      </div>
                                    @endif
                                  </div>
                                @endforeach
                      </div>
                      <div role="tabpanel" class="tab-pane bg-white" id="venues">
                          <form class="row padd-t-20 padd-15 mar-0">
                                  <div class="col-md-10 col-xs-9 padd-l-0">
                                    <input type="text" class="form-control input-lg" id="search" placeholder="Search Venues">
                                  </div>
                                  <div class="col-md-2 col-xs-3 pull-right text-right padd-0">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block btn-blue">Search</button>
                                  </div>
                                  </form>
                                  <hr class="mar-0" />
                                <!-- List   -->
                                @foreach($venues as $venue)
                                  <div class="list">
                                    <div class="col-xs-2 padd-0 artist-img">
                                      <a href="#">
                                        <img src="{{ $venue->avatar }}" class="img-responsive" />
                                      </a>
                                    </div>
                                    <div class="col-md-8 col-xs-7 mar-t-5">
                                      <h3 class="mar-0 title"><a href="#">{{ $venue->name }}</a></h3>
                                      <p class="mar-b-2">
                                         {!! nl2br($venue->description) !!}
                                      </p>
                                    </div>
                                    @if (Auth::check())
                                      <div class="col-md-2 col-xs-3 pull-right padd-0 mar-t-3per">
                                        <button data-href="/unfollow/venue/{{ $venue->id }}" class="btn btn-lg btn-success btn-block btn-green follow" data-loading-text="Processing...">Unfollow</a>
                                      </div>
                                    @endif
                                  </div>
                                @endforeach
                               <!--  List  -->

                              
                      </div>
                      <div role="tabpanel" class="tab-pane bg-white" id="genres">
                          
                          <form class="row padd-t-20 padd-15 mar-0">
                                  <div class="col-md-10 col-xs-9 padd-l-0">
                                    <input type="text" class="form-control input-lg" id="search" placeholder="Search Genres">
                                  </div>
                                  <div class="col-md-2 col-xs-3 pull-right text-right padd-0">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block btn-blue">Search</button>
                                  </div>
                                  </form>
                                  <hr class="mar-0" />
                                <!-- List   -->
                                @foreach($genres as $genre)
                                  <div class="list">
                                    <div class="col-xs-2 padd-0 artist-img">
                                      <a href="#">
                                        <img src="{{ $genre->avatar }}" class="img-responsive" />
                                      </a>
                                    </div>
                                    <div class="col-md-8 col-xs-7 mar-t-5">
                                      <h3 class="mar-0 title"><a href="#">{{ $genre->name }}</a></h3>
                                      <p class="mar-b-2">
                                        {!! nl2br($genre->description) !!}
                                      </p>
                                    </div>
                                    @if (Auth::check())
                                      <div class="col-md-2 col-xs-3 pull-right padd-0 mar-t-3per">
                                        <button data-href="/unfollow/genre/{{ $genre->id }}" class="btn btn-lg btn-success btn-block btn-green follow" data-loading-text="Processing...">Unfollow</a>
                                      </div>
                                    @endif
                                  </div>
                                @endforeach
                               <!--  List  -->
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="/js/website/discover.js"></script>
    </body>
</html>
