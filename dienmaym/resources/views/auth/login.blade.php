{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}
@extends('layouts.app')

@section('content')
<div class="c-login">
  <div class="background-monkey">
    <div class="c-monkey">
      <div class="head">
        <div class="top">
          <div class="base"></div>
          <div class="half-circle left"></div>
          <div class="half-circle right"></div>
        </div>
        
        <div class="eye left"></div>
        <div class="eye right"></div>
        
        <div class="ear left"></div>
        <div class="face"></div>
        <div class="ear right"></div>
        <div class="mouth"></div>
      </div>

      <div class="key">
        <div class="side">
          <div class="square"></div>
          <div class="triangle first"></div>

          <div class="triangle"></div>
          <div class="triangle"></div>
          <div class="triangle"></div>
        </div>

        <div class="base"></div>
        <div class="bottom"></div>
      </div>
    </div>
  </div>
  
  <h1 class="title">
    Mon<b>Key</b>
  </h1>
  
  <form class="c-form">
    <input type="text" name="username" placeholder="Username" id="username" class="c-input" />
    
    <input type="password" name="password" id="password" class="c-input" placeholder="Password" />
    
    <a href="#" class="link"> Forgot your password? </a>
    
    <button class="c-button m-dark" type="submit">
      Sign In
    </button>
    
    <button class="c-button">
      Create Account
    </button>
  </form>
</div>
@endsection