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
            <a href="{{route("admin.imoveis.index")}}">Voltar</a>
        </div>

        <div class="col s12">
            <span class="labelInfo">Titulo:</span>
            <p>{{$imovel->title}}</p>
        </div>
        <div class="col s12">
            <span class="labelInfo">Descrição:</span>
            <p>{!! $imovel->description !!}</p>
        </div>
        <div class="col s12">
            <span class="labelInfo">Imagem:</span>
            <p><img src="{{$imovel->image}}"></p>
        </div>
        <div class="col s12">
            <span class="labelInfo">Nome do contato:</span>
            <p>{{$imovel->contact_name}}</p>
        </div>
        <div class="col s12">
            <span class="labelInfo">Telefone de contato:</span>
            <p>{{$imovel->contact_phone}}</p>
        </div>
        <div class="col s12">
            <span class="labelInfo">Preço:</span>
            <p>{{$imovel->price}}</p>
        </div>
        <div class="col s12">
            <span class="labelInfo">Condominio:</span>
            <p>{{$imovel->condominio}}</p>
        </div>
        <div class="col s12">
            <span class="labelInfo">IPTU:</span>
            <p>{{$imovel->iptu}}</p>
        </div>
        <div class="col s12">
            <span class="labelInfo">Área:</span>
            <p>{{$imovel->area}}</p>
        </div>
        <div class="col s12">
            <span class="labelInfo">Quantidade de quartos:</span>
            <p>{{$imovel->amount_room}}</p>
        </div>
        <div class="col s12">
            <span class="labelInfo">Quantidade de banheiros:</span>
            <p>{{$imovel->amount_bathroom}}</p>
        </div>
        <div class="col s12">
            <span class="labelInfo">Vagas de estacionamento:</span>
            <p>{{$imovel->parking_space}}</p>
        </div>
        <div class="col s12">
            <span class="labelInfo">Endereço:</span>
            <p>{{$imovel->address}}</p>
        </div>
        <div class="col s12">
            <span class="labelInfo">Numero:</span>
            <p>{{$imovel->number}}</p>
        </div>
        <div class="col s12">
            <span class="labelInfo">Complemento:</span>
            <p>{{$imovel->complement}}</p>
        </div>
        <div class="col s12">
            <span class="labelInfo">Bairro:</span>
            <p>{{$imovel->district}}</p>
        </div>
        <div class="col s12">
            <span class="labelInfo">Cidade:</span>
            <p>{{$imovel->city}}</p>
        </div>
        <div class="col s12">
            <span class="labelInfo">UF:</span>
            <p>{{$imovel->uf}}</p>
        </div>


    </div>

@endsection