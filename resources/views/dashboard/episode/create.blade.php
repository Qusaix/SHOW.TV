@extends('dashboard.layout.main')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Create New Episode </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard.users')}}">dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Episode</li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>

          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-lg-12 grid-margin">
          <div class="card">
            <div class="col-sm">
              </div>
          

            <div class="card-body">
                <div class="card-block">
                    <form class="form-horizontal m-t-sm" action="{{ route('dashboard.episodes.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                           
                            {{-- <div class="col-sm-5">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <label for="mega-lastname">Product</label>
                                        <select name="product" class="form-control" id="sel1">
                                            @foreach($products as $product)
                                            <option value='{{$product->id}}' > {{$product->Title}}:${{$product->price}} </option>
                                            @endforeach
                                          </select>
                                    </div>
                                </div>
                            </div> --}}


                            <div class="col-sm-5">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <label for="mega-lastname">Series</label>

                                        <select name="series" class="form-control" id="sel1">
                                            @foreach($series as $ser)
                                            <option value="{{$ser->id}}" >{{$ser->title}}</option>
                                            @endforeach
                                            


                                          </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <label for="mega-lastname">Episode Title</label>
                                        <input value="{{old('title')}}" class="form-control input-lg" type="text" id="mega-username" name="title" placeholder="Enter The Title"  />
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-5">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <label for="mega-lastname">Description</label>
                                        {{-- <input value="{{(old('description'))}}" class="form-control input-lg" type="text" id="mega-username"    /> --}}
                                        <textarea value="{{(old('description'))}}" name="description" placeholder="Enter The Description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-5">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <label for="mega-lastname">Duration</label>
                                        <input value="{{(old('duration'))}}" class="form-control input-lg" type="number" id="mega-username" name="duration" placeholder="Enter The Duration min"  />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <label for="mega-lastname">Time</label>
                                          <input name="time" class="form-control" type="datetime-local"  id="example-datetime-local-input">
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-5">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <label for="mega-lastname">Thumbnail</label>

                                        <div class="form-group">
                                            <div class="col-sm-10">
                                                <label class="file-upload btn btn-primary">
                                                   Add The Thumbnail Image ... <input name="thumbnail" type="file" />
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-5">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <label for="mega-lastname">Video</label>

                                        <div class="form-group">
                                            <div class="col-sm-10">
                                                <label class="file-upload btn btn-primary">
                                                   Add The Thumbnail Image ... <input name="video" type="file" />
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                        
                    </div>
                        
                        <div class="form-group m-b-0">
                            <div class="col-xs-12">
                                <button class="btn btn-success" type="submit"><i class="ion-checkmark m-r-xs"></i>Create</button>
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