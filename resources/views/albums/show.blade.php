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
                    Album Dates:
                    <div class="well">
                        Created: {{ \Carbon\Carbon::parse($album->created_at)->format('d/m/Y h:m:s')}}
                        <br>
                        Updated: {{ \Carbon\Carbon::parse($album->updated_at)->format('d/m/Y h:m:s')}}
                    </div>

                    <hr>

                    <div class="well">
                        <ul class="list-group">
                        @if(count($album->photos)>0)
                            @foreach($album->photos as $photo)
                                <li class="list-group-item">
                                <img width="80" class="img-thumbnail rounded float-left" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}">
                                {{$photo->title}}
                                </li>
                            @endforeach
                        @else
                            <h3>No photos in this album!</h3>
                        @endif
                        </ul>
                    </div>



                </div>
            </div>
        </div>
    </div>

@endsection