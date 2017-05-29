@extends('layouts.master')

@section('content')
@include('layouts.navbar')
<p>{!!$success!!}</p>
<a href='/'>Click here for Login</a>
@include('layouts.footer')
@endsection
