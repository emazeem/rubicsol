@extends('website.layouts.master')
@section('content')
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

                    

                            <input id="password" type="password" class="form-control form-control-lg  @error('password') is-invalid @enderror" name="password" placeholder="*****" required autocomplete="current-password">
                             
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
@endsection
