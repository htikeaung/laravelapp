@extends('layouts.app')

@section('content')

    @if(session()->has('restricted_user'))

        <div class="text-center alert alert-danger">
            <p>{{session('restricted_user')}}</p>
        </div>

    @endif

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
