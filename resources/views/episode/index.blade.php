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
                                <li class="list-group-item"><i class="fa fa-film" aria-hidden="true" style="font-size: 20px;"></i> From: <a href="{{route('series',$episode->series->id)}}">{{ $episode->series->title }}</a></li>
                              </ul>
                              
                            <div class="share">
                                <h5>Did you like the Episode</h5>
                                <div class="single-agile-shar-buttons">
                              

                                    

                                    @if($ep_check_reaction->like == 1)
                                    
                                        <button id="like" type="submit" class="btn btn-success"><b>You liked The Episode</b></button>

                                        @else

                                        <button id="like" type="submit" class="btn btn-success"><i class="fa fa-thumbs-up" aria-hidden="true"></i></button>


                                    
                                    @endif

                                    @if($ep_check_reaction->like == 0)

                                    <button id="dislike" type="submit" class="btn btn-danger">You Disliked The Episode</i></button>

                                    @else
                                    <button id="dislike" type="submit" class="btn btn-danger"><i class="fa fa-thumbs-down" aria-hidden="true"></i></button>


                                    @endif
                                   
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
                                    <p class="author"><a href="{{ route('series',$episode->series->id) }}" class="author">{{ $episode->series->title }}</a></p>
                                    <p class="views">{{ $ep->duration }}min</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            @endforeach
    
                           
                            
                            
                            
    
                        </div>
                    </div>
                    
    
                    
                    <div class="clearfix"> </div>
                </div>
                
                
                <script>





                $("#like").click(function(e){

                    e.preventDefault();

                    $.ajax({
                            type:'POST',
                                headers:{
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    },
                                url:'{{route('reaction')}}',
                                data:{
                                    reaction:1,
                                    episode:{!! json_encode($episode->id) !!}
                                    },
                                success:function(data){
                                    console.log('success');
                                },
                                error:function(error){
                                    console.log(error);
                                }
                        
                        })

                        $("#like").html("<b>You liked The Episode</b>");
                        $("#dislike").html("<i class='fa fa-thumbs-down' aria-hidden='true'>"); 


                });


                $("#dislike").click(function(e){
                    e.preventDefault();

                    $.ajax({
                            type:'POST',
                                headers:{
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    },
                                url:'{{route('reaction')}}',
                                data:{
                                    reaction:0,
                                    episode:{!! json_encode($episode->id) !!}
                                    },
                                success:function(data){
                                    console.log('success');
                                },
                                error:function(error){
                                    console.log(error);
                                }
                        
                        })

                        $("#dislike").html("<b>You Disliked The Episode</b>");
                        $("#like").html("<i class='fa fa-thumbs-up' aria-hidden='true'>");     



                });

                


                </script>
                            
                                 
            </div>

           

	
@endsection