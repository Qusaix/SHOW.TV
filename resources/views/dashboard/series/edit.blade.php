@extends('dashboard.layout.main')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Edit {{ $series->title }} Series </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard.users')}}">dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Series</li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>

          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-lg-12 grid-margin">
          <div class="card">
            <div class="col-sm">
              </div>
          

            <div class="card-body">
                @if($errors->any())
                <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
               </div>
                @endif
                <div class="card-block">
                    <form class="form-horizontal m-t-sm" action="{{ route('dashboard.series.update',$series->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-sm-5">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <label for="mega-lastname">Series Title</label>
                                        <input value="{{ old('title') ? old('title') : $series->title }}" class="form-control input-lg" type="text" id="mega-username" name="title" placeholder="Enter The Title"  />
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-5">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <label for="mega-lastname">Description</label>
                                        <textarea name="description" placeholder="Enter The Description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ old('description') ? old('description') : $series->description  }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-5">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <label for="mega-lastname">From</label>
                                        <select name="from" class="form-control">
                                            <option value="Monday" >Monday</option>
                                            <option value="Tuesday" >Tuesday</option>
                                            <option value="Wednesday" >Wednesday</option>
                                            <option value="Thursday" >Thursday</option>
                                            <option value="Friday" >Friday</option>
                                            <option value="Saturday" >Saturday</option>
                                            <option value="Sunday" >Sunday</option>
                                          </select>
                                          
                                  
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <label for="mega-lastname">To</label>
                                        <select name="to" class="form-control">
                                            <option value="Monday" >Monday</option>
                                            <option value="Tuesday" >Tuesday</option>
                                            <option value="Wednesday" >Wednesday</option>
                                            <option value="Thursday" >Thursday</option>
                                            <option value="Friday" >Friday</option>
                                            <option value="Saturday" >Saturday</option>
                                            <option value="Sunday" >Sunday</option>
                                          </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-5">
                                <div class="form-check form-check-inline">
                                    <label for="mega-lastname">Update Airing Time</label>
                                    <input name="updateTime" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1">
                                  </div>
                            </div>
                            
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <label for="mega-lastname">At</label>
                                        <input name="at" class="form-control" id="input-time" type="time" value="00:00:00">
                                    </div>
                                </div>
                            </div>


                           
                          
                        
                    </div>
                        
                        <div class="form-group m-b-0">
                            <div class="col-xs-12">
                                <button class="btn btn-success" type="submit"><i class="ion-checkmark m-r-xs"></i>Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>    
          </div>
        </div>
      </div>
    </div>
   
  </div>
@endsection