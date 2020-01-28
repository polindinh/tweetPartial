@extends ('master')
@include ('header')
<link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
@section ('content')

@foreach ($tweets as $tweet)
<p><strong>{{$tweet->author}}</strong></p>
<p>{{$tweet->content}}</p>

@endforeach
<form action="/updatePost" method="post">
    @csrf
    <input class="btn" type="text" name="author" value="author">
    <input class="btn" type="text" name="content" value="content">
    <button class="btn" type="submit" name="id" value ="{{$tweet->id}}">Update</button>
</form>
@endsection
