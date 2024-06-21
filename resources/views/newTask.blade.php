@extends('layouts.main')

@section('title', 'O seu site de organização')

@section('content')
<div class="indexPage">
        <div class="indexPage_header">
            <img src="./assets/logo.svg" alt="logo">
            <a href="{{ route('login') }}">Entrar</a>
        </div>
        <div class="indexPage_content">
            <div class="indexPage_content_title">
                <div>
                    <p class="title">Gestão de <span>tarefas</span></p>
                    <p class="subtitle">todo o seu <span>planejamento</span> de forma rápida e prática</p>
                    <div class="indexPage_content_text">
                        <p>Organize e gerencie suas <span>atividades</span> com maestria com o <span>Focus</span>, uma
                            ferramenta gratuita de
                            gerenciamento de <span>tarefas</span> com mais recursos do que você imagina.</p>
                        <a href="{{ route('register') }}">Cadastre-se já</a>
                    </div>
                </div>
                <div>
                    <img src="./assets/images/gestaoDeTarefas.png" alt="Gestão de tarefas">
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="termos">
            <a href="">TERMOS</a>
            <a href="">PRIVACIDADE</a>
            <a href="">LGPD</a>
            <a href="">SEGURANÇA</a>
            <a href="">ABUSO</a>
        </div>
        <div class="contatos">
            <a href=""><i class="ph-fill ph-instagram-logo"></i></a>
            <a href=""><i class="ph-fill ph-whatsapp-logo"></i></a>
            <a href=""><i class="ph-fill ph-youtube-logo"></i></a>
            <a href=""><i class="ph-fill ph-x-logo"></i></a>
            <a href=""><i class="ph-fill ph-telegram-logo"></i></a>
            <a href=""><i class="ph-fill ph-linkedin-logo"></i></a>
        </div>
    </div>
@endsection