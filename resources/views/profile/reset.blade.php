@extends('layouts.master')
@include('layouts.navbar')
@section('content')


<form method="POST" action="{!!route('activate')!!}">
{!! csrf_field() !!}
	<div class="row">
  <div class="input-field col s6">
          <input name="name" id="name" type="text" class="validate" >
          <label for="email">Name</label>
        </div>
        
         <div class="col s3">
        @if($errors->has('name'))
            <p class="red-text">{!! $errors->first('name') !!}</p>
          @endif
      </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input name="oldpassword" id="oldpassword" type="password" class="validate" >
          <label for="oldpassword"> Old Password</label>
        </div>
        <div class="col s3">
        @if($errors->has('oldpassword'))
            <p class="red-text">{!! $errors->first('oldpassword') !!}</p>
          @endif
      </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input name="password" id="password" type="password" class="validate" >
          <label for="password">Password</label>
        </div>

         <div class="col s3">
        @if($errors->has('password'))
            <p class="red-text">{!! $errors->first('password') !!}</p>
          @endif
      </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input name="repass" id="repass" type="password" class="validate" >
          <label for="repass">Re-Enter Password</label>
        </div>
         <div class="col s3">
        @if($errors->has('repass'))
            <p class="red-text">{!! $errors->first('repass') !!}</p>
          @endif
      </div>
      </div>

     <div class="row">
 		<button class="btn waves-effect waves-light" type="submit" name="activate" id="forgot">Activate
    <i class="material-icons right">send</i>
  </button>

</form>




@include('layouts.footer')
@endsection
