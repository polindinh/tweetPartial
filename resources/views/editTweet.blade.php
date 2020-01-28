@extends ('master')
@include ('header')

@section ('content')

@foreach ($tweets as $tweet)
<p><strong>{{$tweet->author}}</strong></p>
<p>{{$tweet->content}}</p>

@endforeach
<form action="/updatePost" method="post">
    @csrf
    <input type="text" name="author" value="author">
    <input type="text" name="content" value="content">
    {{-- <input type="hidden" name ="id" value="{{$tweet->id}}"> --}}
    <button type="submit" name="id" value ="{{$tweet->id}}">Update</button>
</form>
@endsection
