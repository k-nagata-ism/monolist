{"filter":false,"title":"show.blade.php","tooltip":"/message-board/resources/views/messages/show.blade.php","undoManager":{"mark":2,"position":1,"stack":[[{"start":{"row":0,"column":0},"end":{"row":10,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","","    <h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>","","    <p>{{ $message->content }}</p>","","    {!! link_to_route('messages.edit', 'このメッセージ編集', ['id' => $message->id]) !!}","","@endsection"],"id":4}],[{"start":{"row":0,"column":0},"end":{"row":14,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","","    <h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>","","    <p>{{ $message->content }}</p>","","    {!! link_to_route('messages.edit', 'このメッセージ編集', ['id' => $message->id]) !!}","","    {!! Form::model($message, ['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}","        {!! Form::submit('削除') !!}","    {!! Form::close() !!}","","@endsection"],"id":5}],[{"start":{"row":13,"column":0},"end":{"row":14,"column":11},"action":"remove","lines":["","@endsection"],"id":6}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":8,"column":42},"end":{"row":8,"column":42},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1524111185937,"hash":"d05661da280f7a6feaac750135bdf8cea16e893c"}