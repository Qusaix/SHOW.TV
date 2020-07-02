@extends('layout.main')

@section('content')

<div class="single-page-agile-main">
    <div class="container">
            <!-- /w3l-medile-movies-grids -->
                <div class="agileits-single-top">
                    <ol class="breadcrumb">
                      <li><a href="index.html">Home</a></li>
					  <li class="active">Episode</li>
					  <li class="active">{{ $episode->title }}</li>
                    </ol>
                </div>
                <div class="single-page-agile-info">
                       <!-- /movie-browse-agile -->
                               <div class="show-top-grids-w3lagile">
                    <div class="col-sm-8 single-left">
                        <div class="song">
                            <div class="song-info">
                                <h3>{{ $episode->title }}</h3>	
                        </div>
                            {{-- <div class="video-grid-single-page-agileits">
                                <div data-video="dLmKio67pVQ" id="video"> <img src="{{ $episode->thumbnail }}" alt="" class="img-responsive" /> </div>
                            </div> --}}
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="{{ $episode->video }}" allowfullscreen></iframe>
                        </div>
                        <div class="song-grid-right" style="margin-top: 5%;">
                            <ul class="list-group">
                                <li class="list-group-item"><i class="fa fa-clock-o" aria-hidden="true" style="font-size: 20px;"></i> Time: {{ $episode->duration }}min</li>
                                <li class="list-group-item"><i class="fa fa-television" aria-hidden="true" style="font-size: 20px;"></i> Airing Time: {{ $episode->time }}</li>
                                <li class="list-group-item"><i class="fa fa-film" aria-hidden="true" style="font-size: 20px;"></i> From: {{ $episode->series->title }}</li>
                              </ul>
                              
                            <div class="share">
                                <h5>Did you like the Episode</h5>
                                <div class="single-agile-shar-buttons">
                                {{-- <ul>
                                    <li>
                                        <div class="fb-like" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
                                        <script>(function(d, s, id) {
                                          var js, fjs = d.getElementsByTagName(s)[0];
                                          if (d.getElementById(id)) return;
                                          js = d.createElement(s); js.id = id;
                                          js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7";
                                          fjs.parentNode.insertBefore(js, fjs);
                                        }(document, 'script', 'facebook-jssdk'));</script>
                                    </li>
                                    <li>
                                        <div class="fb-share-button" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fw3layouts&amp;src=sdkpreparse">Share</a></div>
                                    </li>
                                    <li class="news-twitter">
                                        <a href="https://twitter.com/w3layouts" class="twitter-follow-button" data-show-count="false">Follow @w3layouts</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/intent/tweet?screen_name=w3layouts" class="twitter-mention-button" data-show-count="false">Tweet to @w3layouts</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                                    </li>
                                    <li>
                                        <!-- Place this tag where you want the +1 button to render. -->
                                        <div class="g-plusone" data-size="medium"></div>
    
                                        <!-- Place this tag after the last +1 button tag. -->
                                        <script type="text/javascript">
                                          (function() {
                                            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                            po.src = 'https://apis.google.com/js/platform.js';
                                            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                                          })();
                                        </script>
                                    </li>
                                </ul> --}}
                                <form action="{{ route('reaction') }}" method="POST">
                                    @csrf
                                    <h3>Like</h3>
                                    <input  name="reaction" type="hidden" value="1">
                                    <input  name="episode" type="hidden" value="{{ $episode->id }}">

                                    <button type="submit" class="btn btn-success"><i class="fa fa-thumbs-up" aria-hidden="true"></i></button>
                                </form>
                                <form action="{{ route('reaction') }}" method="POST">
                                    @csrf
                                    <input  name="reaction" type="hidden" value="0">
                                    <input  name="episode" type="hidden" value="{{ $episode->id }}">
                                    <h3>Deslike</h3>
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-thumbs-down" aria-hidden="true"></i></button>
                                </form>
                            </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
    
                    
                    </div>
                    <div class="col-md-4 single-right">
                        <h3>More Episodes </h3>
                        
                        <div class="single-grid-right">
    
    
                            @foreach ($show_episodes as $ep)
                            <div class="single-right-grids">
                                <div class="col-md-4 single-right-grid-left">
                                    <a href="{{ route('episode',$ep->id) }}"><img src="{{ $ep->thumbnail }}" alt="" /></a>
                                </div>
                                <div class="col-md-8 single-right-grid-right">
                                    <a href="{{ route('episode',$ep->id) }}" class="title"> {{ $ep->title }}</a>
                                    <p class="author"><a href="#" class="author">{{ $episode->series->title }}</a></p>
                                    <p class="views">{{ $ep->duration }}min</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            @endforeach
    
                           
                            
                            
                            
    
                        </div>
                    </div>
                    
    
                    
                    <div class="clearfix"> </div>
                </div>
                
                            
                                 
                    </div>
	
@endsection