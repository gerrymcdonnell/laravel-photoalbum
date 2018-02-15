@extends('...layouts.app')

<!-- copied from create listing -->

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">

                <div class="card-header">{{$album->name}}</div>

                <div class="card-body">

                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    <ul class="list-group-item"> Name: {{$album->name}}</ul>
                    <ul class="list-group-item"> Description: {{$album->description}}</ul>

                    <ul class="list-group-item"> Cover image:{{$album->cover_image}}</ul>


                    <hr>
                    Bio:
                    <div class="well">
                        {{$album->created_at}}

                        {{$album->updated_at}}
                    </div>



                </div>
            </div>
        </div>
    </div>

@endsection