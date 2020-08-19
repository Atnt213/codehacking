@extends('layouts.admin')

@section('content')
    <h1>Edit {{$user->name}}</h1>

    <div class="row mb-3">

        <div class="col-sm-3">
            <img src="{{$user->photo ? $user->photo->file : 'No Image'}}" style="width:220px; border-radius:10%">
        </div>

        <div class="col-sm-9">

            {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}

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
                {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), null, ['class'=>'form-control']) !!}
            </div>

            <div class="mt-2">
                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
            </div>

            <div>
                {!! Form::label('password', 'Password:') !!}
                {!! Form::password('password', ['class'=>'form-control']) !!}
            </div>

            <div>
                {!! Form::submit('Edit User', ['class'=>'btn btn-success mt-3']) !!}
            </div>

            {!! Form::close() !!}


            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]]) !!}

            <div class="mt-3">
                {!! Form::submit('Delete User', ['class'=>'btn btn-danger']) !!}
            </div>

            {!! Form::close() !!}


        </div>

    </div>

    @include('includes.form_errors')

@endsection
