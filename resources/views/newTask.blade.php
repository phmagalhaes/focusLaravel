@extends('layouts.main')

@section('title', 'O seu site de organização')

@section('content')
    <div class="createPage">
        <h1>crie uma tarefa</h1>
        <form action="{{ route('store') }}" method="POST">
            @csrf
            <label for="title">title</label>
            <input type="text" name='title' required autofocus><br>
            <label for="description">descrição</label>
            <textarea name="description" id="" required></textarea><br>
            <label for="deliveryDate">data e hora de entrega</label>
            <input type="date" name='date' required>
            <input type="time" name='time' required> <br>
            <button type="submit">criar</button>
        </form>
    </div>
@endsection