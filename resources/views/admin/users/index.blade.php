@extends('layouts.admin')

@section('content')
    <h1>Users</h1>

    <table class="table table-hover table-dark">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Photo</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Status</th>
            <th scope="col">Created</th>
            <th scope="col">Updated</th>
          </tr>
        </thead>
        <tbody>

            @if($users)

                @foreach ($users as $user)

                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <th><img src="{{$user->photo ? $user->photo->file : 'No Image'}}" style="width:75px; border-radius:10%"></th>
                        <td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role_id == NULL ? 'No Role' : $user->role->name}}</td>
                        <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                        <td>{{$user->created_at->diffForHumans()}}</td>
                        <td>{{$user->updated_at->diffForHumans()}}</td>
                    </tr>

                @endforeach

            @endif

        </tbody>
      </table>

@endsection
