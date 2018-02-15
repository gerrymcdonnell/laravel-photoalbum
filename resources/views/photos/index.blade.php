@extends('...layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
            Latest listings

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>
                        Photos <a href="/photos/create">New Photo</a>
                        <hr>
                        <br>

                        @if(count($photos))
                            <ul class="list-group">

                            @foreach($photos as $photo)
                                <li class="list-group-item">

                                <!--will go to show function-->
                                <a href="/photos/{{$photo->id}}">
                                    {{$photo->photo}}
                                </a>
                                |

                                <!-- edit -->
                                <a href="/photos/{{$photo->id}}/edit">
                                    Edit
                                </a>
                                <!-- end edit -->

                                |
                                <!-- delete -->
                                <a href="/photos/{{$photo->id}}/delete">
                                    Delete
                                </a>
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