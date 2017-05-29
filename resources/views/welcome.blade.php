 @extends('layouts.master')

@section('title', 'Alumni Login')
@section('content')  
      <!--Import jQuery before materialize.js-->
@include('layouts.navbar')
<div class="container">
   

    <form class="col s6" method="POST" action="{!!URL::action('Auth\LoginController@signin')!!}">
   
      <div class="row">
      {!! csrf_field() !!}
        <div class="input-field col s6">
          <input name="email" id="email" type="text" class="validate" value="{!!old('email')!!}">
          <label for="username">Email</label>
        </div>
        <div class="col s3">
        @if($errors->has('email'))
            <p class="red-text">{!! $errors->first('email') !!}</p>
          @endif
      </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input name="password" id="password" type="password" class="validate" value="{!!old('password')!!}">
          <label for="password">Password</label>
        </div>
        <div class="col s3">
      @if($errors->has('password'))
            <p class="red-text">{!! $errors->first('password') !!}</p>
          @endif
      </div>
      </div>
       
      <div class="row">
      <button class="btn waves-effect waves-light" type="submit" name="signin" id="signin">SignIn
    <i class="material-icons right">send</i>
  </button>
    
   
      
  <label><a href="{!!route('forgot')!!}">Forgot Password?</a></label>
    </div>
    @if($fail)
<p class="red-text">{!! $fail !!}</p>
@endif
      </form>
      @if($errors->has('error'))
            <p class="red-text">{!! $errors->first('error') !!}</p>
          @endif
    </div>
    <br><br><br><br><br><br>
   
    
    
    

@include('layouts.footer')
@endsection
  
  
 