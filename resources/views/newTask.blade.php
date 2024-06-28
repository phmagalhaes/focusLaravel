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
            <h1>Crie uma tarefa</h1>
            <form action="{{ route('store')}}" method="POST">
                @csrf
                <div class="inputs">
                    <div>
                        <label for="title">Título</label>
                        <input type="text" name='title' required>
                        <label for="deliveryDate" class="labelDate">Data e Hora de entrega</label>
                        <div class="dateTimeInput">
                            <input type="date" name='date'>
                            <input type="time" name='time'>
                        </div>
                    </div>
                    <div>
                        <label for="description">Descrição</label>
                        <textarea name="description" id="" required></textarea>
                    </div>
                </div>
                <div class="buttons">
                    <button type="submit">Criar</button>
                </div>
            </form>
        </div>
    </div>
@endsection