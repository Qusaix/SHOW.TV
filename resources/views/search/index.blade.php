@extends('layout.main')

@section('content')
<div class="faq">
    <div class="container">
    	<div class="bs-example bs-example-tabs mt-5" role="tabpanel" data-example-id="togglable-tabs">
					
            <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                    <div class="agile-news-table">
                        <div class="w3ls-news-result">
                            <h4>Episodes : <span>{{ $data->count() }}</span></h4>
                        </div>
                        <table id="table-breakpoint">
                            <thead>
                              <tr>
                                <th>No.</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Time</th>
                                <th>Show</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $element)
                              <tr>
                                <td>{{ $element->id }}</td>
                                <td class="w3-list-img" style="width:50%;"><a href="{{ route('episode',$element->id) }}"><img src="{{ $element->thumbnail }}" alt="" /> <span>{{ $element->title }}</span></a></td>
                                <td>{{ $element->description }}</td>
                                <td class="w3-list-info"><a></a>{{ $element->time }}</td>
                                <td class="w3-list-info"><a href="{{ route('series',$element->id) }}"><i class="fa fa-eye" aria-hidden="true"></td></a></i>
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
@endsection