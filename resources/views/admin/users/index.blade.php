@extends('layouts.admin')




@section('content')

    @if(Session::has('deleted_user'))
        <p class="bg-danger"> {{session('deleted_user')}}</p>
    @endif

    <h1>Users</h1>

    <table class="table table-hover">
        <thead>
          <tr class="font-weight-bold">
            <th >Id</th>
            <th> Image</th>
            <th>Name</th>
            <th>Email</th>
            <th>Status</th>
            <th>Role</th>
            <th>Created</th>
            <th>Updated</th>



          </tr>
        </thead>
        <tbody>
            @if($users)

                    @foreach($users as $user)

                            <tr>
                                <td>{{$user->id}}</td>
                                <td><img height="50" src="{{$user->photo ? $user->photo->file : 'http://via.placeholder.com/250x200'}}" alt=""></td>
                                <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->is_active == 1 ? 'Active' : 'Not active'}}</td>
                                <td>{{$user->role->name}}</td>
                                <td>{{$user->created_at->diffForHumans()}}</td>
                                <td>{{$user->updated_at->diffForHumans()}}</td>

                            </tr>
                    @endforeach


            @endif

        </tbody>
    </table>



@stop