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
        <!-- partial:../../partials/_footer.html -->
        {{-- <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer> --}}
        <!-- partial -->
      </div>
    <!-- main-panel ends -->
@endsection