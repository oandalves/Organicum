@extends('dashboard.layouts.app')

@section('title', 'Feira')

@section('content')
    <h1>Produtos</h1>
    <strong>Abaixo uma lista dos produtos por categoria</strong>
    @forelse($products as $key => $value)
        <div class="formation-text">
            <strong>Produtor: {{ $value->marketer->user->name }}</strong>
            <p>Categoria: {{ $value->category->title }} - Produto: {{ $value->name }} - 
                Preço: R${{$value->amount}} - {{$value->number}}{{$value->unit}}</p>
        </div>
        <div class="linha"></div>
    @empty
        <p>Nenhum dado encontrado.</p>
    @endforelse
@endsection
