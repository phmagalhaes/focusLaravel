@extends('layouts.main')

@section('title', 'O seu site de organização')

@section('content')
    <div class="homePage">
        <header class="homePage_header">
            <div>
                <img src="/assets/logo.svg" alt="logo">
                <p>Bem vindo(a), {{ auth()->user()->name }}!</p>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Sair</button>
            </form>
        </header>
        <main class="homePage_main">
            <div class="homePage_main_links">
                <form action="">
                    <div class="input">
                        <input type="text">
                        <i class="ph ph-magnifying-glass"></i>
                    </div>
                </form>
                <a href="{{ route('create') }}">Criar nova tarefa</a>
            </div>
            
            <div class="tarefas">
                <div class="tarefas_principais">
                    <div class="tarefasEmAndamento">
                        <h1>Tarefas em andamento</h1>
                        @foreach($tasks as $task)
                            @php
                                date_default_timezone_set('America/Sao_Paulo');
                            @endphp
                            @if ($task->deliveryDate > date('Y-m-d H:i:s') && $task->deliveryDate > date('Y-m-d H:i:s', strtotime('+1 day')) && $task->concluded == 0)
                                <div class="tarefa">
                                    <h1>{{ $task->title }}</h1>
                                    <p>{{ $task->description }}</p>
                                    <section class="tarefa_footer">
                                        <p>Até {{ date('d/m', strtotime($task->deliveryDate)) }}</p>
                                        <a href="/tasks/{{ $task->id }}">Ver mais ></a>
                                    </section>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="tarefasAtrasadas">
                        <h1>Tarefas atrasadas</h1>
                        @foreach($tasks as $task)
                            @if ($task->deliveryDate < date('Y-m-d H:i:s'))
                                <div class="tarefa">
                                    <h1>{{ $task->title }}</h1>
                                    <p>{{ $task->description }}</p>
                                    <section class="tarefa_footer">
                                        <p>Era para {{ date('d/m', strtotime($task->deliveryDate)) }} ás {{ date('H:i', strtotime($task->deliveryDate)) }}</p>
                                        <a href="/tasks/{{ $task->id }}">Ver mais ></a>
                                    </section>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="tarefas_secundarias">
                    <div class="tarefasConcluidas">
                        <h1>Tarefas concluidas</h1>
                        @foreach($tasks as $task)
                            @if ($task->concluded == 1)
                                <div class="tarefa">
                                    <h1>{{ $task->title }}</h1>
                                    <p>{{ $task->description }}</p>
                                    <section class="tarefa_footer">
                                        <p></p>
                                        <a href="/tasks/{{ $task->id }}">Ver mais ></a>
                                    </section>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="tarefasUrgentes">
                        <h1>Tarefas urgentes</h1>
                        @foreach($tasks as $task)
                            @if ($task->deliveryDate > date('Y-m-d H:i:s') && $task->deliveryDate < date('Y-m-d H:i:s', strtotime('+1 day')))
                                <div class="tarefa">
                                    <h1>{{ $task->title }}</h1>
                                    <p>{{ $task->description }}</p>
                                    <section class="tarefa_footer">
                                        <p></p>
                                        <a href="/tasks/{{ $task->id }}">Ver mais ></a>
                                    </section>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection