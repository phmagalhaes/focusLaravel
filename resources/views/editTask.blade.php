@extends('layouts.main')

@section('title', 'O seu site de organização')

@section('content')
    <div class="formPage">
        <header class="taskPage_header">
            <div>
                <img src="{{ asset('assets/logo.svg') }}" alt="logo">
                <p>Bem vindo(a), {{ auth()->user()->name }}!</p>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </header>
        <div class="formPage_content">
            <h1>Edite a tarefa: {{ $task->title }}</h1>
            @php
                $time = date('H:i', strtotime($task->deliveryDate));
                $date = date('Y-m-d', strtotime($task->deliveryDate));
            @endphp
            <form action="/task/{{ $task->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="inputs">
                    <div>
                        <label for="title">Título</label>
                        <input type="text" name='title' required value="{{ $task->title }}">
                        <label for="deliveryDate" class="labelDate">Data e Hora de entrega</label>
                        <div class="dateTimeInput">
                            <input type="date" name='date' value="{{ $date }}">
                            <input type="time" name='time' value="{{ $time }}">
                        </div>
                    </div>
                    <div>
                        <label for="description">Descrição</label>
                        <textarea name="description" id="" required>{{ $task->description }}</textarea>
                    </div>
                </div>
                <div class="buttons">
                    <button type="submit">editar</button>
                </div>
            </form>
        </div>
    </div>
@endsection