@extends('layouts.app')

@section('content')

<h1>タスク新規作成ページ</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('status', '状態:') !!}
        {!! Form::select('status', ["未" => "これから", "現" => "進行中","済" => "完了済"]) !!}
       

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        

            
        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}
@endsection