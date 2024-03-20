@extends('website.layouts.master')
@section('content')
<script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container py-5">
    
    <div class="row justify-content-center py-5 my-5 background-image">
        <!--Image side-->
        <div class="col-md-5">
        </div>
        <!--start of form-->
            <div class="col-md-4">
            <div class="card bg-transparent border-0">
                
                    <!-- <h1 class="text-heading text-center">Sign into your account</h1> -->
                
                <div class="card-body">
                <h1 class="text-heading text-center pt-5">Sign into your account</h1>
                <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!--Email Field-->
             <div class="form-group mt-4">
             <label for="email" class="text-md-end pb-1">{{ __('Email Address') }}</label>
             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
             @error('email')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror
            </div>
            
            <!--Password Field-->
            <div class="form-group mt-4">
            <label for="password" class="text-md-end pb-1">{{ __('Password') }}</label>
            <div class="password-section">
            <div class="input-group mb-3">
            <input id="password" type="password" class="form-control   @error('password') is-invalid @enderror" name="password" placeholder="*****" required autocomplete="current-password">

            <div class="input-group-append">
            <button type="button" class="btn-login  btn-lg toggle-button"><i class="fa fa-eye-slash toggle-icon"></i></button> 
         </div> 
        </div>
    </div>
            @error('password')      

            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
             </span>    
               
            @enderror
                
            </div>
            
            <!--Button-->
            <div class="row mb-0 ml-1 mr-0 mt-3">
            <div class="justify-center item-center">
            <button class="btn-signin  text-white">Login</button>     
                 </div>
              </div>
           </form>
        </div>
      </div>
    </div>
   </div>
  </div>
<script>
$(document).ready(function(){
  $(".toggle-button").click(function(){
    var type=$('#password').attr('type');
    
    if(type=='password'){
        $('#password').attr('type','text');
    }else{
        $('#password').attr('type','password');
    }

    $(".toggle-icon").toggleClass("fa-eye fa-eye-slash ");
    
  });
});
</script>
@endsection

<style>
.img-side{
    height: 483px;
    width:  500px;
    object-fit:cover;    
    border-radius: 12px;
}    
.text-heading{
    font-size: 25px;
}
.btn-signin{
    border-radius: 5px;
    background-color: #000;
    width: 310px;
    height: 45px;
    padding-top: 5px;
    margin-top:  5px;  
  
} 
.btn-login{
    border: 1px solid rgba(0, 0, 0, 0.04);
    border-radius:0px 5px 5px 0px!important;
    background-color: #fff!important;
    padding: 0px;
    margin: 0px;
}
#email{
    height: 45px;
}
#password{
    height: 45px;
}
.background-image {
  background-image: url('images/bgloginimg.jpg');
  background-size: cover;
  
}
</style>
