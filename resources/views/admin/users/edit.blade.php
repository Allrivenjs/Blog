@extends('adminlte::page')

@section('title', 'Bloger')

@section('content_header')
    <h1> Role Edit</h1>
@stop

@section('content')
    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
        <div class="card">
            <div class="card-body">
                <p class="h5">Name:</p>
                <p class="form-control mb-2">{{$user->name}}</p>

                <h2 class="h5 mb-3"> Role List:</h2>
                {!! Form::model($user, ['route' =>[ 'admin.users.update' , $user], 'method' => 'PUT', 'autocomplete' => 'off',]) !!}

                @include('admin.users.partials.form')

                <div class="px-4 py-1 text-right sm:px-6 ">
                {!! Form::submit('Assign Rol',['class' => 'inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500']) !!}
                </div>
                {!! Form::close() !!}

            </div>
        </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{asset('css/PostsStyle.css')}}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
@stop
@section('js')
    <script src="{{asset('js/PostsScript.js')}}"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    @livewireScripts

@endsection
