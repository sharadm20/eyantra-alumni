@extends('layouts.master')
@section('content')
@include('layouts.navbar')
<div class="row">
    <form name="alumni" class="col s8" method="POST" action="/signupland">
     {!! csrf_field() !!}
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input name="name" id="icon_prefix" type="text" class="validate" value="{!!old('name')!!}">
          <label for="name">Full Name</label>
        </div>
        @if($errors->has('name'))
            <p class="red-text">{!! $errors->first('name') !!}</p>
          @endif
        <!-- </div>
        <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input name="phone_no" id="phone_no" type="tel" class="validate" value="{!!old('phone_no')!!}">
          <label for="phone_no">Telephone/Mobile No.</label>
        </div>
        @if($errors->has('phone_no'))
            <p class="red-text">{!! $errors->first('phone_no') !!}</p>
          @endif
        </div> -->
      <!--  <div class="row">
        <div class="input-field col s6">
          <input name="email" id="email" type="email" class="validate" value="{!!old('email')!!}">
          <label for="email">Email</label>
        </div>
        @if($errors->has('email'))
            <p class="red-text">{!! $errors->first('email') !!}</p>
          @endif
      </div> -->
      <!-- <div class="row">
        <div class="input-field col s6">
          <input name="username" id="username" type="text" class="validate" value="{!!old('username')!!}">
          <label for="username">Username</label>
        </div>
        @if($errors->has('username'))
            <p class="red-text">{!! $errors->first('username') !!}</p>
          @endif
      </div> -->
       <div class="row">
        <div class="input-field col s6">
          <input name="password" id="password" type="password" class="validate" value="{!!old('password')!!}">
          <label for="password">New Password</label>
        </div>
        @if($errors->has('password'))
            <p class="red-text">{!! $errors->first('password') !!}</p>
          @endif
      </div> 
       <div class="row">
        <div class="input-field col s6">
          <input name="repassword" id="repassword" type="password" class="validate" value="{!!old('repassword')!!}">
          <label for="password">Re Enter New Password</label>
        </div>
        @if($errors->has('repassword'))
            <p class="red-text">{!! $errors->first('repassword') !!}</p>
          @endif
      </div> 
      <!-- <label>Please Select How you were part of e-Yantra </label>
      <div class="row">

      <div class="input-field col s6">
    <select name="category[]" id="category" multiple value="{!!old('category[]')!!}">
      <option value="" disabled selected>Options</option>
      <option value="eyrc">eYRC</option>
      <option value="eyic">eYIC</option>
      <option value="eysip">eYSIP</option>
      <option value="tbt">TBT</option>
      </select>
    </div>
          @if($errors->has('category'))
            <p class="red-text">{!! $errors->first('category') !!}</p>
          @endif
     
    </div> -->
  
  <div class="row">
 		<button for="alumni" class="btn waves-effect waves-light" type="submit" name="signup" id="signup">Save
    <i class="material-icons right">send</i>
  </button>

  </div>
    </form>
  </div>
        
@include('layouts.footer')
@endsection