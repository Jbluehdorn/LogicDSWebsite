@extends('layouts.admin')

@section('title', 'My Account')

@section('content')
<h1>{{Auth::User()->name}}</h1>
@endsection