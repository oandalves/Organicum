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
        <section class="container flex">
            <div class="item flex-item">
                <h1>Dados da organização</h1>
                <p><strong>Nome: </strong>{{ $fair->title }}</p>
                <p><strong>Tipo: </strong>{{ $fair->type }}</p>
                <p><strong>Sobre: </strong>{{ $fair->description }}</p>
                <p><strong>Facebook: </strong>{{ $fair->facebook }}</p>
                <p><strong>Instagram: </strong>{{ $fair->instagram }}</p>
                <h1>Endereço da organização</h1>
                <p><strong>CEP: </strong>{{ $fair->postalcode }}</p>
                <p><strong>Endereço: </strong>{{ $fair->address }}</p>
                <p><strong>Bairro: </strong>{{ $fair->neighborhood }}</p>
                <p><strong>Complemento: </strong>{{ $fair->complete }}</p>
                <p><strong>Cidade: </strong>{{ $fair->city }}</p>
                <p><strong>Estado: </strong>{{ $fair->station }}</p>
                <p><strong>Pais: </strong>{{ $fair->country }}</p>
                <h1>Dados do organizador</h1>
                <p><strong>Nome: </strong>{{ $fair->user->name }}</p>
                <p><strong>Nome: </strong>{{ $fair->user->email }}</p>
            </div>
            <div class="item flex-item">
                <p><strong>Seja bem-vindx, </strong>{{ $fair->user->name }}</p>
                <p>Abaixo separamos algumas opções que você possa querer acessar.</p>
                <p>Para acessar informações sobre os <a href="{{ route('dashboard.fair.marketers',$fair->id) }}" class="button-organicum-neutro">Feirantes</a> vinculados a sua feira.</p>
                <p>Não esqueça de verificar se existem <a href="{{ route('dashboard.fair.aceppt',$fair->id) }}" class="button-organicum-neutro">Novas solicitações</a> de feirantes.</p>
                <p>Aqui você encontra <a href="" class="button-organicum-neutro">Relatórios</a> sobre a feira.</p>
                <p>Se quiser, pode <a href="" class="button-organicum-neutro">Editar dados</a> clicando aqui.</p>
                <p><a href="" class="button-organicum-neutro">Excluir feira permanentemente</a></p>
            </div>
        </section>
    @endif

@endsection
