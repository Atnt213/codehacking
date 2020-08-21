@extends('layouts.admin')

@section('content')

    Edit Category

    <div class="col-sm-6">

        {!! Form::model($category, ['method'=>'PUT', 'action'=>['AdminCategoriesController@update', $category->id]]) !!}

        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>

        <div class="d-flex justify-content-between">

            <div class="form-group">
                {!! Form::submit('Update Category', ['class'=>'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}

            <div>

                {!! Form::model($category, ['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy', $category->id]]) !!}

                <div class="form-group">
                    {!! Form::submit('Delete Category', ['class'=>'btn btn-danger']) !!}
                </div>

                {!! Form::close() !!}

            </div>

        </div>
    </div>




@endsection
