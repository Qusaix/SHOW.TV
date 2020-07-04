@extends('dashboard.layout.main')

@section('content')
    <!-- partial:partials/_sidebar.html -->

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title"> Episodes </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard.users')}}">dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Episodes</li>
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="col-sm">
                    <a type="button" href="{{ route('dashboard.episodes.create') }}" class="btn btn-primary float-right mt-5" style="">Add New Episodes </a>

                  </div>
              

                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Title</th>
                            <th>Show</th>
                            <th>Description</th>
                            <th>Duration</th>
                            <th>Time</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($episodes as $ep)
                            <tr>
                                <td><a href="{{ route('episode',$ep->id) }}">{{ $ep->title }}</a></td>
                                <td>{{ $ep->series->title }}</td>
                                <td>{{ $ep->description }}</td>
                                <td>{{ $ep->duration }}min</td>
                                <td>{{ $ep->time }}</td>
                                <td><a href="{{ route('dashboard.episodes.edit',$ep->id) }}" ><i class="mdi mdi-table-edit" style="font-size: 20px"></i></a></td>

                              </tr>
                            @endforeach
                          
                         
                        </tbody>
                      </table>
                      {{$episodes->links()}}
                </div>    
              </div>
            </div>
          </div>
        </div>
       
      </div>
    <!-- main-panel ends -->
@endsection