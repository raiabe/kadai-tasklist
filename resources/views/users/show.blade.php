@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->name }}</h3>
                </div>
                <div class="panel-body">
                <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->email, 500) }}" alt="">
                </div>
            </div>
        </aside>
        
    </div>
    <h1>タスク一覧</h1>
    
    @if (count($tasks) > 0)
        <table class="table">
            <thead>
            <tr>
                <td>id</td>
                <td>状態</td>
                <td>タスク</td>
            </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td><li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</li></td>
                        <td>{{$task->status}}</td>
                        <td>{{ $task->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {!! link_to_route('tasks.create', '新規タスクの投稿',null,['class'=>'btn btn-primary']) !!}
@endsection