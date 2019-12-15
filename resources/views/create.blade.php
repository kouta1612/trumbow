@extends('app')
@section('content')
    <form action="/store" method="get">
        <textarea name="content" id="trumbow"></textarea>
        <button type="submit">送信</button>
    </form>    
@endsection

@section('script')
    <script src="/js/trumbow.js"></script>
@endsection
