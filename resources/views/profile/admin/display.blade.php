@extends('layouts.master')

@include('layouts.admin.sidenav')

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
        </tbody>
      </table>

       </div>
      </div> 
     
</main>      
@endsection
