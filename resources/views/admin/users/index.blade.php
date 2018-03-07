@extends('layouts.admin')




@section('content')


    <h1>Users</h1>

    <table class="table table-hover">
        <thead>
          <tr class="font-weight-bold">
            <th class="font-weight-bold">Id</th>
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
                                <td>{{$user->name}}</td>
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