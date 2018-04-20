@extends('layouts.admin.master')
@include('layouts.admin.navadmin')
@section('content')

  <div class="row">
    <div class="col s11 offset-s1">
      <ul class="tabs">
        <li class="tab col s3"><a href="#tab1">College Facilitation</a></li>
        <li class="tab col s3"><a class="active" href="#tab2">Feedback</a></li>
      </ul>
    </div>
    <div id="tab1" class="col s12">
    <table class="table table-bordered" id="userdetail-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>College</th>
            </tr>
        </thead>
    </table>
    </div>
    <div id="tab2" class="col s12">
    <table class="table table-bordered" id="feedback-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>q14</th>
                <th>q15</th>
                <th>q16</th>
                <th>q17</th>
            </tr>
        </thead>
    </table>
    </div>
  </div>

@stop
@push('script')
<script>
/*$(document).ready(function(){
    $('#user').DataTable();
});*/
$(function() {
    $('#userdetail-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('viewresponse') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'phone', name: 'phone' },
            { data: 'college_name', name: 'college_name' }
        ]
    });
    $('#feedback-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('viewfeedback') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'q14', name: 'q14' },
            { data: 'q15', name: 'q15' },
            { data: 'q16', name: 'q16' },
            { data: 'q17', name: 'q17' }
        ]
    });
});
</script>
@endpush
