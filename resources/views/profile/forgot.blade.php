@extends('layouts.master')
@include('layouts.navbar')
@section('content')

@if($flag==0)
<form method="post" action="{!!route('forgot')!!}">
{!! csrf_field() !!}
	<div class="row">
        <div class="input-field col s6">
          <input name="email" id="email" type="email" class="validate" >
          <label for="email">Email</label>
        </div>
        
      </div>
     <div class="row">
 		<button class="btn waves-effect waves-light" type="submit" name="forgot" id="forgot">Send
    <i class="material-icons right">send</i>
  </button>

</form>
@endif
@if($flag==1)
<div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card-panel grey lighten-5 z-depth-1">
          <div class="row valign-wrapper">
            
            <div class="col s10">
              <span class="blue-text">
                A recovery mail has been sent. Please check your mailbox!
              </span>
            </div>
          </div>
        </div>
      </div>
@endif


@include('layouts.footer')
@endsection

