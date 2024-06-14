@extends('layouts.main')

@section('title', 'Faça o seu login aqui')

@section('content')
<div class="loginPage">
        <form action="">
            <h1>Faça o seu login</h1>
            <label for="email">Email</label>
            <input type="email" name="email" required>
            <label for="senha">Senha</label>
            <input type="password" name="senha" required>

            <div>
                <a href="/cadastro">Não possui cadastro? Clique aqui</a>
                <button type="submit">Entrar</button>
            </div>
        </form>
</div>
@endsection