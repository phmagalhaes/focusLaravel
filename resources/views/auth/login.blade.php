@extends('layouts.main')

@section('title', 'Faça o seu login aqui')

@section('content')
<div class="loginPage">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1>Faça o seu login</h1>
            <label for="email">Email</label>
            <input type="email" name="email" required autofocus>
            <label for="senha">Senha</label>
            <input type="password" name="password" required>

            <div>
                <a href="{{ route('register') }}">Não possui cadastro? Clique aqui</a>
                <button type="submit">Entrar</button>
            </div>
        </form>
</div>
@endsection