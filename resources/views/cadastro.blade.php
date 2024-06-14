@extends('layouts.main')

@section('title', 'Faça o seu cadastro aqui')

@section('content')
<div class="cadastroPage">
        <!-- <img src="../assests/logo.svg" alt="Logo"> -->
        <form action="">
            <h1>Faça o seu cadastro</h1>
            <label for="nome">Nome completo</label>
            <input type="text" name="nome" required>
            <label for="email">Email</label>
            <input type="email" name="email" required>
            <label for="senha">Senha</label>
            <input type="password" name="senha" required>

            <div>
                <a href="/login">Já possui cadastro? Clique aqui</a>
                <button type="submit">Entrar</button>
            </div>
        </form>
    </div>
@endsection