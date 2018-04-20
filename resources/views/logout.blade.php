@extends('layouts.master')

@section('content')
@include('layouts.navbar')
<main>
<p>{!!$success!!}</p>
<a href='/'>Click here for Login</a>
</main>
@include('layouts.footer')
@endsection
