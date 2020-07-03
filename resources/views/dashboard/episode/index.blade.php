@extends('dashboard.layout.main')

@section('content')
    <!-- partial:partials/_sidebar.html -->

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title"> Users </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard.users')}}">dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Users</li>
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
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($episodes as $ep)
                            <tr>
                                <td>{{ $ep->title }}</td>
                                <td>{{ $ep->series->title }}</td>
                                <td>{{ $ep->description }}</td>
                                <td>{{ $ep->duration }}min</td>
                                <td>{{ $ep->time }}</td>
                                <td><label class="badge badge-danger">Pending</label></td>

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
    <!-- main-panel ends -->
@endsection