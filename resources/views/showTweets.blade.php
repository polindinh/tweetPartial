@extends ('master')

@section('title')
Tweet
@endsection

@section ('content')


@foreach ($tweets as $tweet)
    <p><strong>{{$tweet->author}}</strong></p>
    <p>{{$tweet->content}}</p>
    <form action="/deletePost" method="post">
        @csrf
        <button type="submit" name="id" value ="{{$tweet->id}}">DELETE POST</button>
    </form>
@endforeach


@include('header')
<form action="/" method="post">
    @csrf
    <input type="text" name="author" value="author">
    <input type="text" name="content" value="content">
    <input type="submit" name="submit" value="Submit">

</form>

@endsection
