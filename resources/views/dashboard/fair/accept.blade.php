@extends('dashboard.layouts.app')

@section('title', 'Feira')

@section('content')
    <h1>Feirantes</h1>
    <strong>Todos os feirantes listados abaixo estão solicitando vinculo a sua feira</strong>
    @forelse($marketers as $key => $value)
        <div class="formation-text">
            <p>Eu sou {{ $value->user->name }}.</p>
            <p>Eu sou um(a) {{ $value->type }}.
                A forma de manejo praticada por mim é {{ $value->agriculture }}
                e minha certificação é {{ $value->certification }}.</p>
            <p>Aceito as seguintes formas de pagamento: {{ $value->payment }}.</p>
            <p>Selo SIPAF? @if ($value->sipaf == 1)
                    Sim.
                @else
                    Não.
                @endif
            </p>
            <p>Meu telefone: ({{ $value->ddd }}) {{ $value->number }}.</p>
            <strong>Endereço da propriedade rural</strong>
            <p>O CEP {{ $value->postalcode }}, endereço {{ $value->address }}, bairro {{ $value->neighborhood }} -
                {{ $value->complete }}.
                Na cidade {{ $value->city }}/{{ $value->station }}, {{ $value->country }}</p>
            <a href="{{ route('dashboard.fair.products', $value->id) }}">Visualizar produtos</a>
            <form action="{{ route('dashboard.fair.recuse', $value->id) }}" method="post">
                <button name="recuse">Recusar</button>
            </form>
            <form action="{{ route('dashboard.fair.receive', $value->id) }}" method="post">
                <button name="receive">Aceitar</button>
            </form>
        </div>
        <div class="linha"></div>
    @empty
        <p>Nenhum dado encontrado.</p>
    @endforelse
@endsection
