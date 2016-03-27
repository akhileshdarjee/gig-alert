<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <title>{{ $artist->name }} - Gig Alert</title>
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
                    <div class="list-detail mar-b-15">
                        <div class="list">
                          <div class="col-xs-2 padd-0 artist-img">
                            <a href="#">
                              <img src="{{ $artist->avatar_link }}" class="img-responsive" />
                            </a>
                          </div>
                          <div class="col-md-8 col-xs-7 mar-t-15">
                            <h3 class="mar-0 title"><a href="#">{{ $artist->name }}</a></h3>
                            <p class="mar-b-2">
                              {!! nl2br($artist->description) !!}
                            </p>
                          </div>
                          @if (Auth::check())
                            @if ($follows)
                              <div class="col-md-2 col-xs-3 pull-right padd-0 mar-t-3per">
                                <button data-href="/unfollow/artist/{{ $artist->id }}" class="btn btn-lg btn-default btn-block" data-loading-text="Processing..." id="follow-artist">Unfollow</a>
                              </div>
                            @else
                              <div class="col-md-2 col-xs-3 pull-right padd-0 mar-t-3per">
                                <button data-href="/follow/artist/{{ $artist->id }}" class="btn btn-lg btn-default btn-block" data-loading-text="Processing..." id="follow-artist">Follow</a>
                              </div>
                            @endif
                          @endif
                        </div>
                    </div>
                    <div class="bg-white">
                      @if ($artist_gigs)
                        @foreach($artist_gigs as $gig)
                          <div class="list">
                            <div class="col-xs-2 padd-0 artist-img">
                              <a href="#">
                                <img src="{{ $gig->avatar }}" class="img-responsive" />
                              </a>
                            </div>
                            <div class="col-md-8 col-xs-7 mar-t-5">
                              <h3 class="mar-0 title"><a href="#">{{ $gig->name }}</a></h3>
                              <p class="mar-b-2">
                                {!! nl2br($gig->description) !!}
                              </p>
                              @if (isset($gig_genres[$gig->id]) && $gig_genres[$gig->id])
                                <p>
                                  @foreach($gig_genres[$gig->id] as $genre)
                                    <span class="label label-warning">{{ $genre }}</span>
                                  @endforeach
                                  @if ($gig->price)
                                    <span class="label label-success">
                                      <i class="fa fa-inr"></i> {{ $gig->price }}
                                    </span>
                                  @else
                                    <span class="label label-success">FREE</span>
                                  @endif
                                </p>
                              @endif
                            </div>
                            <div class="col-md-2 col-xs-3 pull-right padd-0 mar-t-3per">
                              <a href="{{ $gig->ticket_link }}" target="_blank" class="btn btn-lg btn-success btn-block btn-green">Tickets</a>
                            </div>
                          </div>
                        @endforeach
                      @else
                        <div class="text-center">NO UPCOMING GIGS</div>
                      @endif
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="/js/website/artist.js"></script>
    </body>
</html>