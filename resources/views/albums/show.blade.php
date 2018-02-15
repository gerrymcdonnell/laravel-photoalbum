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

                    <a class="btn btn-default" href="/photos/create/{{$album->id}}" >Upload Photo to album</a>

                    <ul class="list-group-item"> Name: {{$album->name}}</ul>
                    <ul class="list-group-item"> Description: {{$album->description}}</ul>

                    <ul class="list-group-item"> Cover image:{{$album->cover_image}}</ul>


                    <hr>
                    dates:
                    <div class="well">
                        {{$album->created_at}}

                        {{$album->updated_at}}
                    </div>


                    <ul class="list-group">
                        @foreach($album->photos as $photo)
                            <li class="list-group-item">
                            {{$photo}}
                            </li>
                        @endforeach
                    </ul>



                </div>
            </div>
        </div>
    </div>

@endsection