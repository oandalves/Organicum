@extends('dashboard.layouts.app')

@section('title', 'Feirante')

@section('content')
    @if ($marketer == '')
        <section class="container flex">
            <div class="item flex-item-1">
                <img src="{{ asset('assets/images/Farmer-cuate.png') }}" class="" alt="">
            </div>
            <div class="item flex-item-1">
                <p>Olá,<br>
                    Se você é um/uma <strong>produtor/produtora</strong> que praticam a 
                    <strong>agricultura familiar</strong>
                    cadastre seus <strong>produtos</strong>
                    agora mesmo e aumente suas vendas.</p>
                <a href="{{ route('dashboard.marketer.create') }}" class="link-organicum">Cadastrar</a>
            </div>
        </section>
    @else
        {{ $marketer->name }}
    @endif
@endsection
