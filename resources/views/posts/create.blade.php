@extends('main')
@section('title')
    @section('content')
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Create New Post</h1>
                <hr>
                <form class="form-horizontal" method="get" action="{{route('post.index')}}">
                    <div class="form-group">
                        <label name="title">Title</label>
                        <input id="title" type="text" class="form-control">
                            <br>
                        <label name="post">Post Body</label>
                        <textarea id="body" type="text" class="form-control"></textarea>
                        <br>
                        <input type="submit" class="btn btn-success btn-lg btn-block" value="Submit Post" >
                    </div>
                </form>
            </div>
        </div>





    @endsection