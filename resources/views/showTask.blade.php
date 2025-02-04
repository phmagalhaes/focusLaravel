@extends('layouts.main')

@section('title', 'O seu site de organização')

@section('content')
    <div class="taskPage">
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
        <main class="taskPage_main">
            @if ( auth()->user()->id == $task->userId)
                <div class="task">
                    <h1>{{ $task->title }}</h1>
                    <p>{{ $task->description }}</p>
                    <div class="dates">
                        <div>
                            <h3>Data de recebimento</h3>
                            <p>{{ date('d/m/Y H:i', strtotime($task->receiptDate)) }}</p>
                        </div>
                        <div>
                            <h3>Data de entrega</h3>
                            <p>{{ date('d/m/Y H:i', strtotime($task->deliveryDate)) }}</p>
                        </div>
                    </div>
                    <div class="buttons">
                        <div>
                            <form action="/task/concluded/{{ $task->id }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button class='button concluirButton' type="submit">Concluir tarefa</button>
                            </form>
                            <form action="/task/{{ $task->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class='button excluirButton' type="submit">Excluir</button>
                            </form>
                        </div>

                        <div class="edit">
                            <a href="/task/edit/{{ $task->id }}">Editar informações</a>
                        </div>
                    </div>
                </div>
            @else
                <h1>
                    Você não é o proprietário dessa tarefa
                </h1>
            @endif
        </main>
    </div>
@endsection