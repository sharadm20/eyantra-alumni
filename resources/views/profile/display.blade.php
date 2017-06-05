@extends('layouts.master')
@include('layouts.nav')
@section('content')
<div class="container">
       
          
          <p class="col s4"></p>
      <table class="highlight">
        <tbody>
          <tr>
            <td class="col s2"><i class="material-icons prefix">account_circle</i></td>
            <td class="col s4">{{Auth::user()->name}}</td>
            </tr>
          <tr>
            <td><i class="material-icons prefix">email</i></td>
            <td>{{Auth::user()->email}}</td>
           
          </tr>
          
        </tbody>
      </table>
       
</div>
        

        @include('layouts.footer')
        
@endsection
