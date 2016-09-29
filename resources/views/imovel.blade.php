@extends('layouts.front')
@section('title_page', 'ImoveisJa')
@section('mainScript', '<script src="/js/imovel.js" ></script>')
@section('content')
    @parent
    <style type="text/css">

        .img-main {
            max-height: 870px;
            padding: 7px 0 7px 0;
        }
    </style>

<main id="main">
    <div class="row">
        <div class="col s12">
            <h3>@{{ imovel.title }}</h3>
            <hr/>
            <span><i class="material-icons left">location_on</i>@{{ fullAddress }}</span>
        </div>
        <div class="col s12 m8">
            <div class="row">
                <div class="col s12 m8">
                    <img class="materialboxed img-main" width="100%"
                         src="@{{ imovel.image }}">
                </div>
                <div class="col s12 m4">
                    <ul class="collection">
                        <li class="collection-item ">
                            <span class="title">Preço</span>
                            <p>R$@{{ imovel.price }}</p>
                        </li>
                        <li class="collection-item ">
                            <span class="title">Condominio</span>
                            <p>R$@{{ imovel.condominio }}</p>
                        </li>
                        <li class="collection-item ">
                            <span class="title">IPTU</span>
                            <p>R$@{{ imovel.iptu }}</p>
                        </li>
                        <li class="collection-item ">
                            <span class="title">Tipo de imovel</span>
                            <p>@{{ imovel.status.description }}</p>
                        </li>
                        <li class="collection-item ">
                            <span class="title">Status</span>
                            <p>@{{ imovel.status.description }}</p>
                        </li>

                        <li class="collection-item ">
                            <span class="title">Área</span>
                            <p>@{{ imovel.area }}m²</p>
                        </li>
                        <li class="collection-item ">
                            <span class="title">Quartos</span>
                            <p>@{{ imovel.amount_room }}</p>
                        </li>
                        <li class="collection-item ">
                            <span class="title">Banheiros</span>
                            <p>@{{ imovel.amount_bathroom }}</p>
                        </li>
                        <li class="collection-item ">
                            <span class="title">Vagas de estacionamento</span>
                            <p>@{{ imovel.parking_space }}</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col s12 m4">
            <p><i class="material-icons left">call</i><strong>Telefone para contato:</strong></p>
            <p style="margin-left: 45px;">@{{ imovel.contact_phone }}</p>
        </div>

        <div class="col s12">
            <h5>Descrição</h5>
            <hr/>
            @{{{ imovel.description }}}
        </div>

    </div>

    <!--<pre>
        @{{ $data | json }}
    </pre>-->
</main>
@endsection

