@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <h1>Welcome, {{Auth::user()->name}}!</h1>
    <all-users-table></all-users-table>
@endsection