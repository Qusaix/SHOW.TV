@extends('layout.main')

@section('content')
	<!-- faq-banner -->
	
	<div class="faq">
		<h4 class="latest-text w3_faq_latest_text w3_latest_text">Series Episodes</h4>

		

			<div class="container">
<div class="card" style="margin-bottom:5%">
	<div class="card-body">
	  <h5 class="card-title h1">Title: {{ $series->title }}</h5>
	  <h5 class="card-text h1 ">Description: {{ $series->description }}</h5>
	  <h5 class="card-text h1 ">Time:{{ $series->time }}</h5>
	  
		@if($check_user_following == "1")

		<form method="POST" action="{{ route('follwo_button') }}">
			@csrf
			<button type="submit"  class="btn btn-primary">Follow</button>
		</form>

		@else

		<form method="POST" action="{{ route('follwo_button') }}">
			@csrf
			<button type="submit"  class="btn btn-primary">Unfollow</button>
		</form>

		@endif

	 
	 
	</div>
</div>

				  

				<div class="bs-example bs-example-tabs mt-5" role="tabpanel" data-example-id="togglable-tabs">
					
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Episodes : <span>{{ $episodes->count() }}</span></h4>
									</div>
									<table id="table-breakpoint">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Title</th>
											<th>Description</th>
											<th>Duration</th>
											<th>Time</th>
											<th>Show</th>
										  </tr>
										</thead>
										<tbody>
										@foreach ($episodes as $ep)
										  <tr>
											<td>{{ $ep->id }}</td>
											<td class="w3-list-img" style="width:50%;"><a href="{{ route('episode',$ep->id) }}"><img src="{{ $ep->thumbnail }}" alt="" /> <span>{{ $ep->title }}</span></a></td>
											<td>{{ $ep->description }}</td>
											<td>{{ $ep->duration }}</td>
											<td class="w3-list-info"><a></a>{{ $ep->time }}</td>
											<td class="w3-list-info"><a href="{{ route('episode',$ep->id) }}"><i class="fa fa-eye" aria-hidden="true"></td></a></i>
										  </tr>
										  @endforeach

										  
										</tbody>
									</table>
								</div>
							</div>
							
						</div>
				</div>
			</div>
	</div>
<!-- //faq-banner -->
@endsection