@extends('layouts.admin.master')
@include('layouts.admin.sidenav')
@section('content')

<main>
<div class="container">
    <div class="row">
       
             
                 @if (Session::has('msg'))
                <script>
                iziToast.success({
                title: 'Message',
                message: "{{Session::get('msg')}}",
                position: 'topLeft',
                  }); 
                </script>
                @endif
                <div class="col s4">
                <canvas id="pieChart" width="400" height="400"></canvas>
                </div>
                <div class="col s4"> <canvas id="pieChart2" width="400" height="400"></canvas></div>
                <div class="col s4"> <canvas id="pieChart3" width="400" height="400"></canvas></div>
                <div class="col s4"> <canvas id="pieChart4" width="400" height="400"></canvas></div>
                <div class="col s4"> <canvas id="pieChart5" width="400" height="400"></canvas></div>
                <div class="col s4"> <canvas id="pieChart6" width="400" height="400"></canvas></div>
                <div class="col s4"> <canvas id="pieChart7" width="400" height="400"></canvas></div>
                <div class="col s4"> <canvas id="pieChart8" width="400" height="400"></canvas></div>
                <div class="col s4"> <canvas id="pieChart9" width="400" height="400"></canvas></div>
                <div class="col s4"> <canvas id="pieChart10" width="400" height="400"></canvas></div>
                <div class="col s4"> <canvas id="pieChart11" width="400" height="400"></canvas></div>
                <div class="col s4"> <canvas id="pieChart12" width="400" height="400"></canvas></div>
                <div class="col s4"> <canvas id="pieChart13" width="400" height="400"></canvas></div>
                 @if($errors->has('error'))
                <p class="red-text">{!! $errors->first('error') !!}</p>
                @endif
          
   
  </div>
</div>
</main>
@endsection
@push('script')
<script type="text/javascript" src="{{asset('scripts/q1.js')}}"></script>
 <script>
 $(document).ready(function(){
  getq1();
  getq2();
  getq3();
  getq4();
  getq5();
  getq6();
  getq7();
  getq8();
  getq9();
  getq10();
  getq11();
  getq12();
  getq13();
 });
 </script>
@endpush