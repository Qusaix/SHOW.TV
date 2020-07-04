@extends('dashboard.layout.main')

@section('content')
    <!-- partial:partials/_sidebar.html -->
   
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title"> Series </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard.users')}}">dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Series</li>
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="col-sm">
                  <a type="button" href="{{ route('dashboard.series.create') }}" class="btn btn-primary float-right mt-5" style="">Add New Series </a>

                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Time</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($series as $ser)
                            <tr>
                                <td> <a href="{{ route('series',$ser->id) }}" >{{ $ser->title }}</a></td>
                                <td>{{ $ser->description }}</td>
                                <td>{{ $ser->time }}</td>
                                <td><a href="{{ route('dashboard.series.edit',$ser->id) }}" ><i class="mdi mdi-table-edit" style="font-size: 20px"></i></a></td>

                              </tr>
                            @endforeach
                          
                         
                        </tbody>
                      </table>
                      {{$series->links()}}
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