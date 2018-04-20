@extends('layouts.admin.master')
@include('layouts.admin.navadmin')
@section('content')
<main>
<div id="line-chart" class="col s6">
	
</div>

@linechart('Stocks','line-chart')
</main>
@include('layouts.footer')
@endsection
