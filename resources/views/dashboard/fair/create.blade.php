@extends('dashboard.layouts.app')

@section('title', 'Nova Feira')

@section('content')
    <form action="" method="post">
        <strong class="form-title">Sobre organização </strong>
        <p class="form-subtitle">Forneça as informações sobre a organização
            <br>
            * Alguns informações e documentos podem serem solicitados posteriormente.
        </p>
        <div class="form-inho">
            <label for="title">Qual o nome da organização:</label>
            <input type="text" name="title" id="title" placeholder="Nome da organização">
            <label for="type">Como é a forma de organização:</label>
            <select name="type" id="type">
                <option value="Convencional">Convencional</option>
                <option value="Associação">Associação</option>
                <option value="Empresa">Empresa</option>
                <option value="MEI">MEI</option>
                <option value="Grupo informal">Grupo informal</option>
                <option value="Produtor individual">Produtor individual</option>
                <option value="Outra">Outra</option>
            </select>
        </div>
        <div class="form-inho">
            <label for="description">Insira uma pequena descrição sobre a organização:</label>
            <input type="text" name="description" id="description" placeholder="Escreva aqui">
        </div>
        <strong class="form-title">Onde a organização funciona</strong>
        <div class="form-inho">
            <label for="postalcode">Qual o cep?</label>
            <input type="text" name="postalcode" id="postalcode" placeholder="Apenas números">
            <label for="address">E o endereço:</label>
            <input type="text" name="address" id="address" placeholder="Nome da rua">
            <label for="num">O número:</label>
            <input type="text" name="num" id="num" placeholder="Número">
        </div>
        <div class="form-inho">
            <label for="neighborhood">O nome do bairro:</label>
            <input type="text" name="neighborhood" id="neighborhood" placeholder="Bairro">
            <label for="complete">Caso tenha algum complemento:</label>
            <input type="text" name="complete" id="complete" placeholder="Caso tenha">
        </div>
        <div class="form-inho">
            <label for="city">O nome da cidade:</label>
            <input type="text" name="city" id="city" placeholder="Cidade">
            <label for="station">O estado:</label>
            <input type="text" name="station" id="station" placeholder="Estado">
            <label for="country">E o nome do pais:</label>
            <input type="text" name="country" id="country" placeholder="Pais">
        </div>
        <strong class="form-title">Redes sociais da organização</strong>
        <div class="form-inho">
            <label for="facebook">Link do facebook:</label>
            <input type="text" name="facebook" id="facebook" placeholder="htttp://facebook.com/">
        </div>
        <div class="form-inho">
            <label for="instagram">Link do instagram:</label>
            <input type="text" name="instagram" id="instagram" placeholder="htttp://instagram.com/">
        </div>
        <strong class="form-title">Agora vamos cadastrar os dados sobre a feira</strong>
        <div class="form-inho">
            <label for="name">Qual o nome da feira:</label>
            <input type="text" name="name" id="name" placeholder="Nome da feira">
        </div>
        <div class="form-inho">
            <label for="text">Insira uma descrição sobre a feira:</label>
            <input type="text" name="text" id="text" placeholder="Descrição da feira">
        </div>
        <div class="form-inho">
            <label for="days">Quais dias e horários ocorrem a feira</label>
            <input type="text" name="days" id="days" placeholder="Dias e horários">
        </div>
        <strong class="form-title">Endereço onde ocorre a feira</strong>
        <div class="form-inho">
            <label for="address">Qual o endereço da feira</label>
            <input type="text" class="map-input" name="address" id="address" placeholder="Endereço da feira">
            <input type="hidden" name="latitude" id="address-latitude">
            <input type="hidden" name="longitude" id="address-longitude">
        </div>
        <div id="address-map-container" class="mb-2" style="width:100%;height:400px;">
            <div style="width: 100%; height: 100%" id="address-map"></div>
        </div>
        <div id="map"></div>
        <style>
            #map {
                height: 400px;
                /* The height is 400 pixels */
                width: 100%;
                /* The width is the width of the web page */
            }

        </style>
        <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbjTdDKbngRgSyQEgwFk2JOHCWmdz8VSY&callback=initMap&libraries=&v=weekly" async>
        </script>

        <div class="form-buttons">
            <button type="reset" class="button-organicum-cancelar">Limpar formulário</button>
            <button type="submit" class="button-organicum-neutro">Salvar</button>
        </div>
    </form>
@endsection
