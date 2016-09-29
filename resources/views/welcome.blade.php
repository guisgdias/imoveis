@extends('layouts.front')
@section('title_page', 'Página de Banners da Home')
@section('mainScript', '<script src="/js/home.js" ></script>')
@section('content')
    @parent

<style type="text/css">

    .search-bar {
        background: rgba(255, 255, 255, 0.51);
        margin: 8% 0 0 0;
        padding: 20px 0 20px 0;
    }

    .card-options{
        display: inline-block;
        color: #333;
        border-radius: 4px;
        margin: 0 24px 0 0;
        position: relative;
    }

    .card-options .label, .card-options .value{
        display: block;
    }

    .card-options .label{
        position: relative;
        color: #000;
        font-size: 13px;
        font-size: .8125rem;
        line-height: 24px;
        font-weight: 400;
        text-shadow: none;
        opacity: 1;
    }

    .card-options .value{
        font-weight: 700;
        font-size: 20px;
        font-size: 1.25rem;
        line-height: 24px;
        color: #333;
        text-shadow: none;
    }

    .imageThumb{
        width: 475px !important;
        min-width: 475px !important;
        max-width: 475px !important;
        height: 400px !important;
        min-height: 400px !important;
        max-height: 400px !important;
    }
</style>

<div class="parallax-container">
    <div class="parallax"><img src="/imagens/banner-main.jpg"></div>
    <div class="row">
        <select name="type_id" v-model="search.type">
            <option value="" disabled selected>Escolha uma opção</option>
            <option value="1">Residencial</option>
            <option value="2">Comercial</option>
        </select>
        <form class="col s12" @submit="onSubmitForm">
            <div class="row search-bar">
                <div class="input-field col s12">
                    <input name="address" id="address" type="text"  v-model="search.address">
                    <label for="email">Endereço</label>
                </div>
                <div class="col s12" style="text-align: center">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Ache
                        o seu imóvel :)
                        <i class="material-icons right">search</i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>


<main id="main">
    <div class="list-imoveis">
        <div class="row">
            <div class="col s12" v-for="imovel in imoveis">
                <div class="card horizontal">
                    <div class="card-image">
                        <img class="imageThumb" :src="imovel.image">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <span>@{{ imovel | fullAddress }}</span>
                            <h4>@{{ imovel.title }}</h4>

                            @{{{ imovel.description }}}

                            <div class="card-options">
                                <span class="label">Área (m²)</span>
                                <span class="center-align value">@{{ imovel.area }}</span>
                            </div>

                            <div class="card-options">
                                <span class="label">Quartos</span>
                                <span class="center-align value">@{{ imovel.amount_room }}</span>
                            </div>

                            <div class="card-options">
                                <span class="label">Banheiros</span>
                                <span class="center-align value">@{{ imovel.amount_bathroom }}</span>
                            </div>

                            <div class="card-options">
                                <span class="label">Vagas</span>
                                <span class="center-align value">@{{ imovel.parking_space }}</span>
                            </div>
                        </div>
                        <div class="card-action">
                            <a href="/imovel/@{{ imovel.id }}">Mais informações</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s12" v-if="!imoveis.length">
            Nenhum imóvel cadastrado proximo ao endereço pesquisado!
        </div>
    </div>

    <!--<pre>
        @{{ $data | json }}
    </pre>-->
</main>

@endsection