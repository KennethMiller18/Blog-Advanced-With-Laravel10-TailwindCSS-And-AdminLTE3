@extends('adminlte::page')

@section('title', 'User List')

@section('content_header')
    <a href="{{route('admin.users.create')}}" class="btn btn-secondary float-right">ADD USER</a>
    <h1>User List</h1>
@stop

@section('content')
    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    @livewire('admin.users-index')    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop