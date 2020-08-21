@extends('layouts.admin')

@section('content')

    <h1>Media</h1>

    @if($photos)
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Created</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

                @foreach($photos as $photo)

                    <tr>
                        <td>{{$photo->id}}</td>
                        <td><img src="{{$photo->file}}" style="height: 100px"></td>
                        <td>{{$photo->created_at ? $photo->created_at->diffForHumans() : 'no photo'}}</td>
                        <td>
                            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminMediasController@destroy', $photo->id]]) !!}
                                <div class="form-group">
                                    {!! Form::submit('Delete Image', ['class'=>'btn btn-danger']) !!}
                                </div>
                            {!! Form::close() !!}
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    @endif

@endsection
