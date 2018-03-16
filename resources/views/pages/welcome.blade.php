@extends('main')
@section('title','| Homepage')

@section('content')
    {{--First container--}}

        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1 class="display-4">This is Laravel</h1>
                    <p class="lead">Welcome to my page.</p>
                    <hr class="my-4">
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                    </p>
                </div>
            </div>
        </div>

{{--box for blogs--}}
        <div class="row">

            <div class="col-md-8" style="background-color: #e9ecef;">
               <div class="post">
                   <h3>Post Title</h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, cumque dolore dolores ea earum facilis ipsa libero natus nihil non nulla officiis, porro repellendus, sit soluta suscipit vero voluptates! Culpa.</p>
                   <a href="#" class="btn btn-primary">Read More</a><hr>
               </div>

                <div class="post">
                   <h3>Post Title</h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, cumque dolore dolores ea earum facilis ipsa libero natus nihil non nulla officiis, porro repellendus, sit soluta suscipit vero voluptates! Culpa.</p>
                   <a href="#" class="btn btn-primary">Read More</a><hr>
               </div>

                <div class="post">
                   <h3>Post Title</h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, cumque dolore dolores ea earum facilis ipsa libero natus nihil non nulla officiis, porro repellendus, sit soluta suscipit vero voluptates! Culpa.</p>
                   <a href="#" class="btn btn-primary">Read More</a><hr>
               </div>

                <div class="post">
                   <h3>Post Title</h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, cumque dolore dolores ea earum facilis ipsa libero natus nihil non nulla officiis, porro repellendus, sit soluta suscipit vero voluptates! Culpa.</p>
                   <a href="#" class="btn btn-primary">Read More</a>
               </div>
            </div>
            <div class="offset-1 col-md-3" style="background-color: #e9ecef;">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi beatae cumque neque. Doloremque eligendi eveniet expedita facere iure maiores nisi odit perferendis provident quasi sequi suscipit ut, veniam voluptatibus.
            </div>
        </div>
@endsection