@extends('main')
@section('title','| Contact')
@section('content')
    <hr>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Contact Me</h1>
            <hr>
            <form method="post">
            <div class="form-group" >
                <label name="email">Email</label>
                <input id="email" type="email" class="form-control">
            </div>

                <div class="form-group">
                <label name="email">Contact Number</label>
                <input id="number" type="text" class="form-control">

            </div>

                <div class="form-group">
                <label name="email">Message</label>
                    <textarea id="message" type="text" class="form-control">Type your message here.</textarea>
            </div>
                <div class="form-group">
                <input type="submit" class="btn btn-success" value="Send message" >
                </div>
            </form>
            </div>
        </div>
    </div>

    @endsection