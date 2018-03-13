@extends('layouts.admin')
@section('content')
    <h1> Edit Users</h1>
    <div class="row">
    <div class="col-sm-3">
        <img height="50" src="{{$user->photo ? $user->photo->file : 'http://via.placeholder.com/200x200'}}" alt="" class="img-responsive img-rounded">
    </div>
    <div class="col-sm-9">
    {!! Form::model($user,['method'=>'PATCH', 'action'=>['AdminUsersController@update',$user->id], 'files'=>true])!!}
    {{csrf_field()}}
    <div class="form-groupe">
        {!! Form::label('name' ,' Name : ', ['class' => 'awesome']) !!}
        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Votre nom'])  !!}
    </div><br>
    <div class="form-groupe">
        {!! Form::label('email' ,' Email : ', ['class' => 'awesome']) !!}
        {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Ecris ici svp ']) !!}
    </div><br>
    <div class="form-groupe">
        {!! Form::label('role_id' ,' Role : ', ['class' => 'awesome']) !!}
        {!! Form::select('role_id', [''=>'Choose Options'] + $roles , null, ['class'=>'form-control'])!!}
    </div><br>
    <div class="form-groupe">
        {!! Form::label('is_active' ,' Status: ', ['class' => 'awesome']) !!}
        {!! Form::select('is_active', array(1 => 'Active', 0=> 'Not Active'), 0 , ['class'=>'form-control'])!!}
    </div><br>
    <div class="form-groupe">
        {!! Form::label('password' ,' Votre password : ', ['class' => 'awesome']) !!}
        {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Votre mot de passe ici...']) !!}
    </div><br>
    <div class="form-groupe">
        {!! Form::label('photo_id' ,' Inséré votre foto ici SVP : ', ['class' => 'awesome']) !!}
        {!! Form::file('photo_id', null, ['class'=>'form-control', 'placeholder'=>'Your picture ']) !!}
    </div><br>
    <div class="form-groupe">
        {!! Form::submit(' Create User ', ['class'=>'btn btn-primary'], ['placeholder'=>'Entrer titre']) !!}
    </div>

    {!! Form::close() !!}
    </div>
    </div>
    <dic class="row">
    @include('includes.form_error')
    </dic>
@endsection