@extends('layouts.master')
@section('title')
Dashboard
@endsection


@section('content')


<section class="row new-post">
    <div class="col-md-6 col-md-offset-3">
        <header>
            <h3>What do you have to say?</h3>
                <form action="{{route('post.create')}}" method="POST">
                <div class="form-group">
                    <textarea class="form-control" name="body" id="body"  rows="5" placeholder="Your Post">
                   
                    </textarea>
                </div>
                <button class="btn btn-primary"> Create Post</button>
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </form>

        </header>

    </div>
</section>
<section class="row posts">
    <div class="col-md-6 col-md-offset-3">
        <header>
            <h3>What other people say..</h3>
        </header>
        <article class="post">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, nisi veritatis quas magnam quo sit alias a accusamus molestiae velit. Quos, distinctio aliquid soluta atque voluptates velit reiciendis numquam dicta.</p>
            <div class="info">
                Posted by Manu on 12 Feb 2016 
            </div>
            <div class="interaction">
                <a href="#">Like</a>|
                <a href="#">Dislike</a>|
                <a href="#">Edit</a>|
                <a href="#">Delete</a>
            </div>
        </article>
        
        <article class="post">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, nisi veritatis quas magnam quo sit alias a accusamus molestiae velit. Quos, distinctio aliquid soluta atque voluptates velit reiciendis numquam dicta.</p>
            <div class="info">
                Posted by Manu on 12 Feb 2016 
            </div>
            <div class="interaction">
                <a href="#">Like</a>|
                <a href="#">Dislike</a>|
                <a href="#">Edit</a>|
                <a href="#">Delete</a>
            </div>
        </article>
    </div>
</section>
@endsection
