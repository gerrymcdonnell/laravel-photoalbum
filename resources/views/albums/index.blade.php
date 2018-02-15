@extends('...layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>
                        Albums
                        <hr>
                        <br>

                        @if(count($albums))
                            <ul class="list-group">

                            @foreach($albums as $album)
                                <li class="list-group-item">

                                <!-- display image -->
                                <a href="/albums/{{$album->id}}">
                                    <img width="80" class="img-thumbnail rounded float-left" src="storage/album_covers/{{$album->cover_image}}">
                                </a>
                                <!--will go to show function-->
                                <a href="/albums/{{$album->id}}">
                                    {{$album->name}}
                                </a>

                                <p>
                                <!-- edit -->
                                <a href="/albums/{{$album->id}}/edit">
                                    Edit
                                </a>
                                <!-- end edit -->

                                |
                                <!-- delete -->
                                <a href="/albums/{{$album->id}}/delete">
                                    Delete
                                </a>
                                </p>
                                <!-- end delete -->

                                </li>
                            @endforeach
                            </ul>
                        @endif

                    </h3>


                </div>
            </div>
        </div>
    </div>

@endsection