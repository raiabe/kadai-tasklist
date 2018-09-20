@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} のタスク編集ページ</h1>

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
    
        {!! Form::label('status', '状態:') !!}
        {!! Form::select('status', ["未" => "これから", "現" => "進行中","済" => "完了済"]) !!}




        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}


        {!! Form::submit('更新') !!}

    {!! Form::close() !!}
@endsection