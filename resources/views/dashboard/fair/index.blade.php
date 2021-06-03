@extends('dashboard.layouts.app')

@section('title', 'Feira')

@section('content')
    @if ($fair == '')
        <section class="container flex">
            <div class="item flex-item-1">
                <img src="{{ asset('assets/images/Farmer-amico.png') }}" class="" alt="">
            </div>
            <div class="item flex-item-1">
                <p>Olá,<br>
                    Se você tem uma <strong>organização ou associação</strong> que promove <strong>feiras</strong>
                     com produtores da agricultura familiar com
                    venda de produtos orgânicos e agrocológicos <strong>cadastre</strong> 
                    agora mesmo e aumente a visibilidade da sua feira.</p>
                <a href="{{ route('dashboard.fair.create') }}" class="link-organicum">Cadastrar</a>
            </div>
        </section>
    @else
        {{ $fair->name }}
    @endif

@endsection
