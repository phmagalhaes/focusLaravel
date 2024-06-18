@extends('layouts.main')

@section('title', 'Faça o seu cadastro aqui')

@section('content')
<div class="cadastroPage">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1>Faça o seu cadastro</h1>
            <label for="name">Nome completo</label>
            <input type="text" name="name" required autofocus>
            <label for="email">Email</label>
            <input type="email" name="email" required>
            <label for="password">Senha</label>
            <input type="password" name="password" required>
            <label for="password-confirmation">Condirme a senha</label>
            <input type="password" name="password-confirmation" required>

            <div>
                <a href="{{ route('login') }}">Já possui cadastro? Clique aqui</a>
                <button type="submit">Entrar</button>
            </div>
        </form>
    </div>
@endsection