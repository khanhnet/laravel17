@extends('layouts.auth')

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