@extends('layouts.master')
@include('layouts.nav')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
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
                  @if(Auth::user()->profile==0)
                  @include('feedback.form')
                  @else
                    @if(Auth::user()->clg_f==0)
                      @include('feedback.clg-facility')
                    
                    @elseif(Auth::user()->feedback==0)
                      @include('feedback.impact-form')
                    
                    @else
                        <div class="alert alert-info">
                        <p class="blue-text">your valuable feedback has been submittted successfully.</p>
                        </div>

                    @endif

                  @endif
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

