@extends('layouts.admin')



@section('content')

    <h1>Creating users</h1>

    {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store', 'files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('name', 'Name: ') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email: ') !!}
            {!! Form::text('email', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('role', 'Role: ') !!}
            {!! Form::select('role_id', [''=>'Choose role'] + $roles, null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('status', 'Status: ') !!}
            {!! Form::select('is_active', array(0 => 'Inactive', 1 => 'Active'), 0, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('file', 'Upload photo: ') !!}
            {!! Form::file('photo_path', ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Password: ') !!}
            {!! Form::password('password', ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create', ['class'=>'btn btn-success']) !!}
        </div>

    {!! Form::close() !!}

    @include('includes.validation_errors')

    @stop