@extends('layouts.admin')

@section('title', 'Admin')

@section('content')
    <script>
        var users = {!! json_encode($users) !!};
    </script>
    <all-users-table></all-users-table>
@endsection