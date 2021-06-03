@extends('dashboard.layouts.app')

@section('title', 'Perfil')

@section('content')
    <h1>Perfil | Painel</h1>

    <br><a href="">Editar</a>
    @if(session('message'))
        <div>
            {{ session('message') }}
        </div>
    @endif

    <hr>
    <p><strong>Nome: </strong> {{$user->name}}</p>
    <p><strong>Email: </strong> {{$user->email}}</p>
    <p><strong>Telefone: </strong> ({{$user->phone->ddd}}){{$user->phone->phone}}</p>
    
    @forelse($user->posts as $key => $value)
        {{ $value->title }}
    @empty
        <p>Nenhuma informação encontrada.</p>
    @endforelse
@endsection