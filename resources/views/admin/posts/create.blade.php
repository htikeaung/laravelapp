@extends('layouts.admin')


@section('content')

    <div class="row">
        @include('includes.validation_errors')
    </div>

    <h1>Create posts</h1>


    <div class="row">

        {!! Form::open(['method' => 'POST', 'action' => 'AdminPostsController@store', 'files' => true]) !!}

            <div class="form-group">
                {!! Form::label('title', 'Title: ') !!}
                {!! Form::text('title', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('category', 'Category: ') !!}
                {!! Form::select('category_id', array(''=>'options'), null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('photo', 'Image: ') !!}
                {!! Form::file('photo_id', ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('description', 'Description: ') !!}
                {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Create Post', ['class'=>'btn btn-success', 'row'=>3]) !!}
            </div>


        {!! Form::close() !!}

    </div>

    @stop