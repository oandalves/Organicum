@extends('dashboard.layouts.app')

@section('title', 'Novo Feirante')

@section('content')
     <form action="" method="post">
          <strong>Complete suas informações pessoais</strong><br>
          <label for="sex">Qual seu sexo</label>
          <select name="sex" id="sex">
               <option value="Masculino">Masculino</option>
               <option value="Feminino">Feminino</option>
               <option value="Outro">Outro</option>
               <option value="Prefio não declarar">Prefiro não declarar</option>
          </select>
          <label for="ddd">DDD da sua região</label>
          <input type="number" name="ddd" id="ddd">
          <label for="phone">Número do telefone</label>
          <input type="number" name="phone" id="phone">
          <br>
          <strong>Agora precisamos de algumas informações sobre você feirante</strong><br>
          <label for="type">Em qual das duas categorias você se encaixa:</label>
          <select name="type" id="type">
               <option value="Produtor(a)">Eu sou um(a) Produtor(a)</option>
               <option value="Distribuidor(a)">Eu sou um(a) Distribuidor(a)</option>
          </select>
          <label for="agriculture">Qual a forma de manejo utilizada no plantio: </label>
          <select name="agriculture" id="agriculture">
               <option value="Convencional">Convencional</option>
               <option value="Orgânica">Orgânica</option>
               <option value="Agroecológica">Agroecológica</option>
               <option value="Agroextrativista">Agroextrativista</option>
               <option value="Biodinâmica">Biodinâmica</option>
               <option value="Permacultural">Permacultural</option>
               <option value="Outra">Outra</option>
          </select>
          <label for="certification">Qual certificação você possui: </label>
          <select name="certification" id="certification">
               <option value="Nenhuma">Nenhuma</option>
               <option value="Orgânica">Orgânica</option>
               <option value="Agroecológica">Agroecológica</option>
               <option value="Comércio Justo (Fair Trade)">Comércio Justo (Fair Trade)</option>
               <option value="Socioambiental">Socioambiental</option>
               <option value="Bem-estar animal">Bem-estar animal</option>
               <option value="Outra">Outra</option>
          </select>
          <label for="sipaf">Você possui o Selo de Identificação da Participação da Agricultura Familiar (SIPAF)?</label>
          <select name="sipaf" id="sipaf">
               <option value="Sim, eu tenho o selo do SIPAF">Sim, eu tenho o selo do SIPAF</option>
               <option value="Não, eu não tenho o selo">Não, eu não tenho o selo</option>
          </select>
          
          <label for="delivery">Você realiza entregas dos seus produtos?</label>
          <select name="delivery" id="delivery">
               <option value="Sim, eu entrego">Sim, eu entrego</option>
               <option value="Não, eu não realizo entregas">Não, eu não realizo entregas</option>
          </select>
          <label for="payment">Quais formas de pagamento são aceitas por você?</label>
          <select name="payment" id="payment">
               <option value="Somente dinheiro">Somente dinheiro</option>
               <option value="Dinheiro e Pix">Dinheiro e Pix</option>
               <option value="Dinheiro, Pix e Cartão (Débito)">Dinheiro, Pix e Cartão (Débito)</option>
               <option value="Dinheiro, Pix e Cartão (Débito/Crédito)">Dinheiro, Pix e Cartão (Débito/Crédito)</option>
          </select>
          <br>
          <strong>Queremos te ajudar a vender mais</strong><br>
          <p>Caso na sua propriedade rural você venda algo, ou realize a venda em um dia da semana de algum prato. Você pode utilizar o formulário abaixo para preencher as informações. Assim, consumidores poderão chegar até a sua propriedade. Aumentando o nível de proximidade com o público e aumento das vendas.</p>
          <label for="visit">Você pode receber visitas na sua propriedade?</label>
          <select name="visit" id="visit">
               <option value="Sim, eu posso receber sim">Sim, eu posso receber sim</option>
               <option value="Não, eu não não recebo">Não, eu não não recebo</option>
          </select>
          <label for="description">Se você pode receber visitas, descreva o que os visitantes podem encontrar para consumir</label>
          <input type="text" name="description" id="description">
          <label for="days">Em quais dias e horários a propriedade funciona para visitação?</label>
          <input type="text" name="days" id="days">
          <br>
          <strong>Quero vender meus produtos em alguma feira</strong><br>
          <label for="fair_id">Solicitar vinculação a uma feira</label>
          <select name="fair_id" id="fair_id">
               <option value="fair_id">Teste</option>
               <option value="fair_id">Teste</option>
               <option value="fair_id">Teste</option>
          </select>
          <br>
          <strong>Para finalizar, basta preencher com as informações sobre a propriedade onde os produtos são produzidos</strong><br>
          <label for="postalcode">Qual o cep?</label>
          <input type="number" name="postalcode" id="postalcode">
          <label for="address">E o endereço:</label>
          <input type="text" name="address" id="address">
          <label for="num">O número:</label>
          <input type="number" name="num" id="num">
          <label for="neighborhood">O nome do bairro:</label>
          <input type="text" name="neighborhood" id="neighborhood">
          <label for="complete">Caso tenha algum complemento:</label>
          <input type="text" name="complete" id="complete">
          <label for="city">O nome da cidade:</label>
          <input type="text" name="city" id="city">
          <label for="station">O estado:</label>
          <input type="text" name="station" id="station">
          <label for="country">E o nome do pais:</label>
          <input type="text" name="country" id="country">
          <button type="reset" class="button-organicum-cancelar">Cancelar</button>
          <button type="submit" class="button-organicum-neutro">Salvar</button>
     </form>
@endsection