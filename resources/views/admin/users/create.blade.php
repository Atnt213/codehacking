@extends('layouts.admin')

@section('content')
    <h1>Create User</h1>

    {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store', 'files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="mt-n3">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, ['class'=>'form-control']) !!}
    </div>

    <div>
        {!! Form::label('role_id', 'Role:') !!}
        {!! Form::select('role_id', ['' => 'Choose Role'] + $finalRoles , null, ['class'=>'form-control']) !!}
    </div>

    <div>
        {!! Form::label('is_active', 'Status:') !!}
        {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), 0, ['class'=>'form-control']) !!}
    </div>

    <div class="mt-2">
        {!! Form::label('photo_id', 'Photo:') !!}
        {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
    </div>

    <div>
        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password', ['class'=>'form-control']) !!}
    </div>

    <div class="mb-3">
        {!! Form::submit('Create User', ['class'=>'btn btn-success mt-3']) !!}
    </div>

    {!! Form::close() !!}

    @include('includes.form_errors')

@endsection
