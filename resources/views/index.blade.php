@extends('app')
@section('content')
    @foreach ($posts as $post)
        <div>
            <li>Id：{{ $post->id }}</li>
            <li>Content：{!! $post->content !!}</li>
        </div>
    @endforeach
    <a href="/create">作成</a>
@endsection
