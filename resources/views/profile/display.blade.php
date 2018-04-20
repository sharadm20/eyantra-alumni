@extends('layouts.master')
@include('layouts.sidenav')
@section('content')
<main>
       
      <div class="row">    
      <div class="col s8 offset-s2">
      <table class="highlight ">
        <tbody>
          <tr>
            <td><i class="material-icons prefix">account_circle</i></td>
            <td>{{Auth::user()->name}}</td>
            </tr>
          <tr>
            <td><i class="material-icons prefix">email</i></td>
            <td>{{Auth::user()->email}}</td>
           
          </tr>
           <tr>
            <td><i class="material-icons prefix">school</i></td>
            <td>{{$user->college_name}}</td>
           
          </tr>
           <tr>
            <td><i class="material-icons prefix">contact_phone</i></td>
            <td>{{$user->phone}}</td>
           
          </tr>
          
        </tbody>
      </table>

       </div>
      </div> 
      <div class="row">
        <div class="col s4 offset-s4">
        <button href="#" type="button" class="btn btn-primary">Edit</button>
        </div>
      </div>
</main>

        @include('layouts.footer')
        
@endsection
