@extends('...layouts.app')

<!-- copied from create listing -->

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">

                <div class="card-header">{{$photo->photo}}</div>

                <div class="card-body">

                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    <ul class="list-group-item"> Title: {{$photo->title}}</ul>
                    <ul class="list-group-item"> Size: {{$photo->size}}</ul>

                    <ul class="list-group-item"> Album ID:{{$photo->album_id}}</ul>


                    <hr>
                    Bio:
                    <div class="well">
                        {{$photo->description}}
                    </div>



                </div>
            </div>
        </div>
    </div>

@endsection