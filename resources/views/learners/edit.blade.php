@extends('base')

@section('content')

@section('contentbg')
<div class="background-edit">
<br>
    <div class="container">
        <div class="float-right">
            <a href="{{url('/learners')}}" class="btn btn-primary btn-sm">
                Back
            </a>
        </div>
        <h2 style="color:black;">Edit Learner: [{{ $learners->id }}]</h2>

        <div class="row">
            <div class="col-md-5" style="color:black;">

                {!!  Form::model($learners, ['url'=>"/learners/$learners->id", 'method'=>'patch']) !!}

                @include('learners._form')

                <div class="form-group">
                    <button class="btn btn-primary float-right">Update Learner</button>
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