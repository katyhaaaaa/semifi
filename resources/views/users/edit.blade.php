@extends('base')

@section('content')

@section('contentbg')

<div class="background-edit">
<br>
    <div class="container">
        <div class="float-right">
            <a href="{{url('/users')}}" class="btn btn-primary btn-sm">
                Back
            </a>
        </div>
        <h2 style="color:yellow;">Edit User: {{ $users->lname }}, {{ $users->fname }}</h2>

        <div class="row">
            <div class="col-md-5" style="color:white;">

                {!!  Form::model($users, ['url'=>"/users/$users->id", 'method'=>'patch']) !!}

                @include('users._form')

                <div class="form-group">
                    <button class="btn btn-primary float-right">Update User</button>
                </div>

                {!!  Form::close() !!}

            </div>
            <div class="col-md-7">

                @include('errors')
            </div>
        </div>
    </div>
</div>

@endsection