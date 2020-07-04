@extends('dashboard.layout.main')

@section('content')

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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td><label class="badge badge-danger">Pending</label></td>

                              </tr>
                            @endforeach
                          
                         
                        </tbody>
                      </table>
                      {{$users->links()}}
                </div>    
              </div>
            </div>
          </div>
      </div>
    <!-- main-panel ends -->
  </div>
@endsection