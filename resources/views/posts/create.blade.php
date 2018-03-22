@extends('main')
@yield('title')

    @section('content')
        <div class="row">
            @if($errors->any())
                {!! $errors !!}
                @endif
            <div class="col-md-8 col-md-offset-2">
                <h1>Create New Post</h1>
                <hr>
                <form class="form-horizontal" method="POST" action="{!!  route('post.store')!!}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>ID</label>
                        <input name="id" type="text" class="form-control">
                        <br>
                        <label>Name</label>
                        <input name="name" type="text" class="form-control">
                        <br>
                        <label>Title</label>
                        <input name="title" type="text" class="form-control">
                            <br>
                        <label>Post Body</label>
                        <textarea name="content" class="form-control"></textarea>
                        <br>
                        <input type="submit" class="btn btn-success btn-lg btn-block" value="Submit Post" >
                    </div>
                </form>
            </div>
        </div>





    @endsection