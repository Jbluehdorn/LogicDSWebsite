@extends('layouts.admin')

@section('title', 'Admin')

@section('content')
    <h1>Welcome, {{Auth::user()->name}}!</h1>
    <div class="panel panel-default col-xs-12">
        <all-users-table></all-users-table>
    </div>

    <script>
        var users = {!! json_encode($users) !!};
    </script>
@endsection