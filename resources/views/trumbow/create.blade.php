@extends('app')
@section('content')
    <form action="/trumbow/store" method="post">
        @csrf
        <div name="content" id="trumbow"></div>
        <button type="submit">送信</button>
        <input type="hidden" name="hidden" id="hidden">
    </form>
    <input type="file" name="image" id="image">
@endsection

@section('script')
    <script src="/js/trumbowyg.upload.js"></script>
    <script src="/js/trumbow.js"></script>
    <script src="/js/upload.js"></script>
    <script src="/js/validate.js"></script>
@endsection
