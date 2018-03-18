@extends('main')
@section('title')
@section('content')
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered table-responsive"><br>
            <thead>
            <a href="{!! route('post.create')!!}" class="btn btn-primary">Add New Post</a>
            <br></br>

            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Title</th>
                <th>Content</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->name}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->content}}</td>




                    {{--<td>--}}
                        {{--<form method="POST" action="{{route('post.delete',$post->id)}}">--}}
                            {{--{{method_field('DELETE')}}--}}
                            {{--{{csrf_field()}}--}}
                            {{--<a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">Edit</a>--}}
                            {{--<a href="{{ route('post.show', $post->id) }}" class="btn btn-success">Show</a>--}}
                            {{--<input type="submit" value="Delete" class="btn btn-danger"/>--}}

                        {{--</form>--}}
                    {{--</td>--}}
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>

<div class="col-md-12">
    <div class="text-center">
        {!! $posts->links() !!}
    </div>
</div>
    @endsection