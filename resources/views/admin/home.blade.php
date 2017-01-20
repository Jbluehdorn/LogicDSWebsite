@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <h1>Welcome, {{Auth::user()->name}}!</h1>
    <div class="panel panel-default col-xs-12">
        <all-users-table></all-users-table>
    </div>
@endsection