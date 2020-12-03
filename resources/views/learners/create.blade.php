@extends('base')

@section('content')

@section('contentbg')

<div class="background">
<br> 
    <div class="container">
        <div class="float-right">
            <a href="{{url('/learners')}}" class="btn btn-primary btn-sm">
                Back
            </a>
        </div>

        <h2 style="color:black;">Create New Learner</h2>

        <div class="row">
            <div class="col-md-5" style="color:black;">
            
                {!!  Form::open(['url'=>'/learners', 'method'=>'post']) !!}

                    @include('learners._form')

                    <div class="form-group">
                        <button class="btn btn-primary float-right">Create Learner</button>
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