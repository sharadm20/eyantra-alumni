@extends('layouts.admin.master')
@include('layouts.admin.sidenav')
@section('content')

<main>
<div class="container">
    <div class="row">
        <div class="col s12">
                 @if (Session::has('msg'))
                <script>
                iziToast.success({
                title: 'Message',
                message: "{{Session::get('msg')}}",
                position: 'topLeft',
                  }); 
                </script>
                @endif
              <div class="card orange darken-1">
              <div class="card-content white-text center-align">
              <span class="card-title">e-Yantra Alumni</span>
              </div>
              </div>      
    </div>
      <div class="col">
      <table class="striped highlight" id="data-table">
      <thead><tr><th>State</th>
      <th>College</th>
      <th>Name</th>
      <th>Email</th>
      <th>Contact</th>
      <th>Discipline</th>
      <th>Department</th>
      <th>Gender</th>
      <th>eyic</th>
      <th>eyrc</th>
      </tr></thead>
      <tbody>
        @foreach($all as $user)
        <tr>
        <td>{{$user->state}}</td>
        <td>{{$user->college_name}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->phone}}</td>
        <td>{{$user->discipline}}</td>
        <td>{{$user->department}}</td>
        <td>{{$user->gender}}</td>
        <td>{{$user->eyic}}</td>
        <td>{{$user->eyrc}}</td>
        </tr>
        @endforeach
      </tbody>
      </table>
      </div>
  </div>
</div>
</main>
@endsection
@push('script')
 <script type="text/javascript">
      $(document).ready( function () {
    $('#data-table').DataTable();
} );
     </script>
@endpush