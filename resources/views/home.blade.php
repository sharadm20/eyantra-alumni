@extends('layouts.master')
@include('layouts.nav')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>
                 @if ($msg)
    <div class="alert alert-danger">
       
                <p class="red-text">{{ $msg }}</p>
           
    </div>
@endif
                @if(Auth::user()->role==1)
                <div class="panel-body">
                   <div class="row">
      <a class="btn waves-effect waves-light" href="{!!route('sendinit')!!}" style="color:white"> Send Initial Mails<i class="material-icons right">email</i></a>
    
  </button>
                </div>
                @else
                @include('feedback.form')
                @endif
                 @if($errors->has('error'))
            <p class="red-text">{!! $errors->first('error') !!}</p>
          @endif
            </div>
        </div>
    </div>
</div>
</div>
@include('layouts.footer')
@endsection

