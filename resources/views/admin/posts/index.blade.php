@extends('adminlte::page')

@section('title', 'Bloger')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right " href="{{route('admin.posts.create')}}">New Post</a>
    <h1>Post List </h1>
@stop

@section('content')

    @livewire('admin.posts-index')

@stop

