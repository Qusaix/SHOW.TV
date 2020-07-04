@extends('layout.main')
@section('content')
<div class="general">
	<h4 class="latest-text w3_latest_text">LATST EPISODES</h4>
	<div class="container">
		<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
		
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
							<div class="w3_agile_featured_movies">

								@foreach ($episodes as $ep)
								<div class="col-md-3 w3l-movie-gride-agile">
									<a href="{{ route('episode',$ep->id) }}" class="hvr-shutter-out-horizontal"><img src="{{ $ep->thumbnail }}" style="width:100%; height:50%;" title="album-name" class="img-responsive" alt="{{ $ep->title }}" />
										<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
									</a>
									<div class="mid-1 agileits_w3layouts_mid_1_home">
										<div class="w3l-movie-text">
											<h6><a href="{{ route('episode',$ep->id) }}">{{ $ep->title }}</a></h6>							
										</div>
										<div class="mid-2 agile_mid_2_home">
											
											<div class="clearfix"></div>
										</div>
									</div>
									
								</div>
								@endforeach

								
								
							
								{{-- <div class="clearfix"> </div> --}}
							</div>
						</div>
					
					</div>
							
						
				</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
	
@endsection