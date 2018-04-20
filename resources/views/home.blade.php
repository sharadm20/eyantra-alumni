@extends('layouts.master')
@if(Auth::user()->role==1)
@include('layouts.admin.navadmin')
@else
@include('layouts.sidenav')
@endif
@section('content')
<main>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                 @if ($msg)
                 
                <script>
                iziToast.success({
                title: 'Message',
                message: '{{$msg}}',
                position: 'topLeft',
                  }); 
                </script>
                
                @endif
              <div class="panel-body">
                @if(Auth::user()->role==1)
                  
                    <div class="row">
                     <div class=" col s6 offset-s6">
                      <a class="btn waves-effect waves-light" href="{!!route('sendinit')!!}" style="color:white"> Send Initial Mails
                      <i class="material-icons right">email</i></a>
                      </div>
                    </div>
                @else
                  @if(Auth::user()->reset==0&&Auth::user()->role==0)
                    @include('profile.reset')
                  @endif
                  @if(Auth::user()->profile==0)
                    @include('feedback.form')
                  @else
                    @if(Auth::user()->clg_f==0)
                      @include('feedback.clg-facility')
                    @elseif(Auth::user()->feedback==0)
                      @include('feedback.impact-form')
                    @else
                      <div class="row">
                        <div class="alert alert-info">
                        <p class="blue-text col s4 offset-s4">Your valuable feedback has been submittted successfully.</p>
                        </div>
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
</main>
@if(Auth::user()->role!=1)
@include('layouts.footer')
@endif
@endsection

