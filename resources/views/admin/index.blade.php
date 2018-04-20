@extends('layouts.admin.master')
@include('layouts.admin.sidenav')
@section('content')

<main>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                 @if (Session::has('msg'))
                <script>
                iziToast.success({
                title: 'Message',
                message: "{{Session::get('msg')}}",
                position: 'topLeft',
                  }); 
                </script>
                @endif
              <div class="panel-body">
                @if(Auth::user()->role==1)
                    <div class="row">
                     <a class="btn waves-effect waves-light" href="{!!route('sendinit')!!}" style="color:white"> Why this working
                      <i class="material-icons right">email</i></a>
                      
                    </div>
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
@endsection
@push('script')
 <script type="text/javascript">
       $('.button-collapse').sideNav('show');
     </script>
@endpush