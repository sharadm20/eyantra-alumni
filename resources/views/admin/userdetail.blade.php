@extends('layouts.admin.master')
@include('layouts.admin.sidenav')
@section('content')

<main>
<div class="container-fluid">
@include('layouts.admin.navadmin')
<div class="col s9 offset-s3">
<table class="table table-bordered" id="table1">
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
</div>
</main>
@stop
@push('script')
<script>
$(document).ready(function(){
    $('#table1').DataTable({
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
});

</script>
@endpush