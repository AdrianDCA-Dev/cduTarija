@extends('adminlte::page')

@section('title', 'Blog Tarija')

@section('content_header')
    <h1>Crear Nueva Portada</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.welcomes.store', 'autocomplete' => 'off', 'files' => true]) !!}

            @include('admin.welcomes.partials.form')

            {!! Form::submit('Crear portada', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <style>
        .image-wrapper{
            position: relative;
            padding-bottom: 56.25%;
        }

        .image-wrapper img{
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
@stop
