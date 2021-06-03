@extends('dashboard.layouts.app')

@section('title', 'Listagem')

@section('content')
    <h1>Notícias | Painel</h1>

    <br><a href="">Novo</a>
    @if(session('message'))
        <div>
            {{ session('message') }}
        </div>
    @endif

    <form action="" method="post">
        @csrf
        <label for="pesquisa">Pesquisar: </label>
        <input type="text" name="pesquisa" id="pesquisa" placeholder="Pesquisar por">
        <button type="submit">Buscar</button>
    </form>
    <hr>


    <table class="table-auto">
        <thead>
          <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Views</th>
          </tr>
        </thead>
        <tbody>
            @forelse($posts as $key => $post)
                <tr>
                    <td>{{$post->title}}</td>
                    <td>{{$post->user->name}}</td>
                    <td>Ver</td>
                </tr>
            @empty
                <tr>
                    <p>Nenhuma informação encontrada.</p>
                </tr>
            @endforelse
        </tbody>
      </table>

@endsection