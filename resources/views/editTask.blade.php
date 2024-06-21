@extends('layouts.main')

@section('title', 'O seu site de organização')

@section('content')
    <div class="createPage">
        <h1>Edite a tarefa</h1>
        @php
            $time = date('H:i', strtotime($task->deliveryDate));
            $date = date('Y-m-d', strtotime($task->deliveryDate));
        @endphp
        <form action="/task/{{ $task->id }}" method="POST">
            @csrf
            @method('PUT')
            <label for="title">title</label>
            <input type="text" name='title' required value="{{ $task->title }}"><br>
            <label for="description">descrição</label>
            <textarea name="description" id="" required>{{ $task->description }}</textarea><br>
            <label for="deliveryDate">data e hora de entrega</label>
            <input type="date" name='date' value="{{ $date }}">
            <input type="time" name='time' value="{{ $time }}"> <br>
            <button type="submit">editar</button>
        </form>
    </div>
@endsection