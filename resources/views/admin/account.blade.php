@extends('layouts.admin')

@section('title', $user ? $user->name : 'Error')

@section('content')
@if(!$user)
<h1>User not found!</h1>
@else
<h1>{{$user->name}}</h1>

@endif
@endsection