@extends ('master')

@section('title')
Tweet
@endsection
@include('header')

@section ('content')

<div class = "content">
<form class="newpost" action="/" method="post">
    @csrf
    <input class="btn" type="text" name="author" value="author">
    <input class="btn" type="text" name="content" value="content">
    <input class="btn" type="submit" name="submit" value="Submit">

</form>



<div class ="tweet">
@foreach ($tweets as $tweet)
    <div><p><strong>{{$tweet->author}}</strong></p></div>
    <div><p>{{$tweet->content}}</p></div>

    <div class="button">
        <form action="/singleTweet" method="post">
            @csrf
            <button class="btn" type="submit" name="id" value ="{{$tweet->id}}">View Post</button>
        </form>
    </div>
    <div class="button">
        <form action="/deletePost" method="post">
            @csrf
            <button class="btn" type="submit" name="id" value ="{{$tweet->id}}">Delete</button>
        </form>
    </div>
    <div class="button">
        <form action="/editPost" method="post">
            @csrf
            <button class="btn" type="submit" name="id" value ="{{$tweet->id}}">Edit</button>
        </form>
    </div>
@endforeach
</div>




@endsection
</div>
