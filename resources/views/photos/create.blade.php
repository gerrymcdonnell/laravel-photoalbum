@extends('...layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">create </div>

                <div class="card-body">

                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    {!! Form::open(['action' => 'PhotosController@store','method'=>'post']) !!}

                    {{Form::bsText('photo','',[])}}
                    {{Form::bsText('title','',[])}}
                    {{Form::bsText('size','',[])}}
                    {{Form::bsText('description','',[])}}



                    {{Form::bsSubmit('submit me',['class'=>'btn btn-primary'])}}

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>

@endsection