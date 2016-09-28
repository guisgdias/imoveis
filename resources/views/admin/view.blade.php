@extends('admin.layout.admin')
@section('title_page', 'Página de Banners da Home')
@section('content')
    @parent

    <style>
        .labelInfo{
            font-weight: bold;
        }
    </style>

    <div class="row">
        <div class="col s12">
            <h5>Dados do imóvel</h5>
            <hr/>
            Voltar
        </div>

        <div class="col s12">
            <span class="labelInfo">Titulo:</span>
            <p>Texto</p>
        </div>
        <div class="col s12">
            <span class="labelInfo">Descrição:</span>
            <p>Texto</p>
        </div>
        <div class="col s12">
            <span class="labelInfo">Imagem:</span>
            <p><img src="https://s3-sa-east-1.amazonaws.com/ligadaweb/images/imoveis/fda610863dfa1cbf00d3623d9871d0b8.jpeg"></p>
        </div>
        <div class="col s12">
            <span class="labelInfo">Preço:</span>
            <p>Texto</p>
        </div>
        <div class="col s12">
            <span class="labelInfo">Condominio:</span>
            <p>Texto</p>
        </div>
        <div class="col s12">
            <span class="labelInfo">IPTU:</span>
            <p>Texto</p>
        </div>
        <div class="col s12">
            <span class="labelInfo">Área:</span>
            <p>Texto</p>
        </div>
        <div class="col s12">
            <span class="labelInfo">Quantidade de quartos:</span>
            <p>Texto</p>
        </div>
        <div class="col s12">
            <span class="labelInfo">Quantidade de banheiros:</span>
            <p>Texto</p>
        </div>
        <div class="col s12">
            <span class="labelInfo">Vagas de estacionamento:</span>
            <p>Texto</p>
        </div>
        <div class="col s12">
            <span class="labelInfo">Endereço:</span>
            <p>Texto</p>
        </div>
        <div class="col s12">
            <span class="labelInfo">Numero:</span>
            <p>Texto</p>
        </div>
        <div class="col s12">
            <span class="labelInfo">Complemento:</span>
            <p>Texto</p>
        </div>
        <div class="col s12">
            <span class="labelInfo">Bairro:</span>
            <p>Texto</p>
        </div>
        <div class="col s12">
            <span class="labelInfo">Cidade:</span>
            <p>Texto</p>
        </div>
        <div class="col s12">
            <span class="labelInfo">UF:</span>
            <p>Texto</p>
        </div>


    </div>

@endsection