<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<section class="testimonial py-5" id="testimonial">
 
    <div class="container">
        <div class="row ">
            <div class="col-md-4 py-5  text-white text-center " style="background:#ff8d1b">
                <div class=" ">
                    <div class="card-body">
                        <img src="http://www.ansonika.com/mavia/img/registration_bg.svg" style="width:30%">
                        <h2 class="py-3">Registration</h2>
                        <p>Please Enter Your Information</p>
                        @if($errors->any())
                            <div class="alert alert-danger" role="alert">
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            
                            @endforeach
                            </div>
                           
                        @endif
                        
                          
                    </div>
                </div>
            </div>
            <div class="col-md-8 py-5 border">
                <h4 class="pb-4">Please fill with your details</h4>
                <form method="POST" action="{{ route('frontend.storeUser') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <input id="Full Name" value="{{(old('name'))}}" name="name" placeholder="Full Name" class="form-control" type="text">
                        </div>
                        <div class="form-group col-md-6">
                          <input name="email" value="{{(old('email'))}}" type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                      </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input id="Mobile No." name="password" placeholder="Password" class="form-control"  type="password">
                        </div>
                        <div class="form-group col-md-6">
                                  
                            <input id="Mobile No." name="password_confirmation" placeholder="re-password" class="form-control"  type="password">
                        </div>
                        <div class="form-group col-md-12">
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="customFile" name="image">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                              </div>
                          

                        </div>
                    </div>
                  
                    
                    <div class="form-row">
                        <button type="submit" class="btn btn-danger" >Submit</button>
                        <button type="button" class="btn btn ml-3" >Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
          var fileName = $(this).val().split("\\").pop();
          $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
        </script>
        
</section>
