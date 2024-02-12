@extends('website.layouts.master')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container py-5">
    <div class="row justify-content-center py-5 my-5">
        <div class="col-md-5 mt-5">
            <div class="card bg-c-primary">
                <div class="card-header border-bottom border-white">
                    <h1>{{ __('Login') }}</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group mt-4">
                            <label for="email" class="text-md-end">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        
                        
                        <div class="form-group mt-4">
                            <label for="password" class="text-md-end">{{ __('Password') }}</label>

                    
                            <div class="input-group mb-3">

                                <input id="password" type="password" class="form-control form-control-lg  @error('password') is-invalid @enderror" name="password" placeholder="*****" required autocomplete="current-password">
                                    
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-success btn-lg toggle-button"><i class="fa fa-eye-slash toggle-icon"></i></button>
                                    </div>
                                </div>
                             
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="row mb-0 mt-3">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-lg bg-c-secondary float-end">
                                    {{ __('Login') }}
                                </button>


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
