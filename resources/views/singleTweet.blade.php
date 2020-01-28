@extends ('master')
@include('header')

@section ('content')


@foreach ($tweets as $tweet)
<p><strong>{{$tweet->author}}</strong></p>
<p>{{$tweet->content}}</p>
@endforeach


@endsection
