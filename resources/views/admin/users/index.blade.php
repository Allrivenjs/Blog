@extends('adminlte::page')

@section('title', 'Bloger')

@section('content_header')

    <h1> Users List</h1>
@stop

@section('content')

    @livewire('admin.users-index')

@stop


