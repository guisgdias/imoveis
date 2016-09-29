@extends('admin.layout.admin')
@section('title_page', 'Página de Banners da Home')
@section('content')
    @parent

    <style>
        .labelCkEditor{
            position: relative !important;
            top:0 !important;
            left:0 !important;
        }
    </style>

    <div class="row">
        <div class="col s12">
            <h5>Editar imóvel</h5>
            <hr/>
            <a href="{{route("admin.imoveis.index")}}">Voltar</a>

        </div>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="col s12" action="{{ route('admin.imovel.update', ['immobile' => $imovel->id]) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT" >
            <div class="row">
                <div class="input-field col s12">
                    <input id="title" name="title" value="{{$imovel->title}}" type="text">
                    <label for="title">Titulo</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <label class="labelCkEditor" for="description">Descrição</label>
                    <textarea id="description" name="description">{{$imovel->description}}</textarea>
                </div>
            </div>
            <div class="file-field input-field">
                <div class="btn">
                    <span>Escolher imagem</span>
                    <input name="image" type="file">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>

                <p><img width="200" height="200" src="{{$imovel->image}}" /> </p>
            </div>

            <div class="row">
                <div class="input-field col s12 m4">
                    <input id="contact_name" name="contact_name" type="text" value="{{$imovel->contact_name}}">
                    <label for="price">Nome do contato</label>
                </div>
                <div class="input-field col s12 m4">
                    <input id="contact_phone" name="contact_phone" type="text" value="{{$imovel->contact_phone}}">
                    <label for="contact_phone">Telefone do contato</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m4">
                    <input id="price" name="price" type="text" value="{{$imovel->price}}">
                    <label for="price">Preço</label>
                </div>
                <div class="input-field col s12 m4">
                    <input id="condominio" name="condominio" type="text" value="{{$imovel->condominio}}">
                    <label for="condominio">Condominio</label>
                </div>
                <div class="input-field col s12 m4">
                    <input id="iptu" name="iptu" type="text" value="{{$imovel->iptu}}">
                    <label for="iptu">IPTU</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m3">
                    <input id="area" name="area" type="text" value="{{$imovel->area}}">
                    <label for="area">Área</label>
                </div>

                <div class="input-field col s12 m3">
                    <select  id="amount_room" name="amount_room">
                        <option value="" disabled >Selecione a quantidade</option>
                        <option value="1"{{$imovel->amount_room == 1 ? "selected" : ""}}>1</option>
                        <option value="2"{{$imovel->amount_room == 2 ? "selected" : ""}}>2</option>
                        <option value="3"{{$imovel->amount_room == 3 ? "selected" : ""}}>3</option>
                        <option value="4"{{$imovel->amount_room == 4 ? "selected" : ""}}>4</option>
                        <option value="5"{{$imovel->amount_room == 5 ? "selected" : ""}}>5</option>
                        <option value="6"{{$imovel->amount_room == 6 ? "selected" : ""}}>6</option>
                    </select>
                    <label>Quantidade de Quartos</label>
                </div>

                <div class="input-field col s12 m3">
                    <select  id="amount_bathroom" name="amount_bathroom">
                        <option value="" disabled >Selecione a quantidade</option>
                        <option value="1"{{$imovel->amount_bathroom == 1 ? "selected" : ""}}>1</option>
                        <option value="2"{{$imovel->amount_bathroom == 2 ? "selected" : ""}}>2</option>
                        <option value="3"{{$imovel->amount_bathroom == 3 ? "selected" : ""}}>3</option>
                        <option value="4"{{$imovel->amount_bathroom == 4 ? "selected" : ""}}>4</option>
                        <option value="5"{{$imovel->amount_bathroom == 5 ? "selected" : ""}}>5</option>
                        <option value="6"{{$imovel->amount_bathroom == 6 ? "selected" : ""}}>6</option>
                    </select>
                    <label>Quantidade de Banheiros</label>
                </div>

                <div class="input-field col s12 m3">
                    <select  id="parking_space" name="parking_space">
                        <option value="" disabled >Selecione a quantidade</option>
                        <option value="1"{{$imovel->parking_space == 1 ? "selected" : ""}}>1</option>
                        <option value="2"{{$imovel->parking_space == 2 ? "selected" : ""}}>2</option>
                        <option value="3"{{$imovel->parking_space == 3 ? "selected" : ""}}>3</option>
                        <option value="4"{{$imovel->parking_space == 4 ? "selected" : ""}}>4</option>
                        <option value="5"{{$imovel->parking_space == 5 ? "selected" : ""}}>5</option>
                        <option value="6"{{$imovel->parking_space == 6 ? "selected" : ""}}>6</option>
                    </select>
                    <label>Vagas de estacionament</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12 m6">
                    <select  id="type_id" name="type_id">
                        <option value="" disabled>Selecione o tipo</option>
                        @foreach($types as $type)
                            <option value="{{$type->id}}" {{$imovel->type_id == $type->id ? "selected" : ""}}>{{$type->description}}</option>
                        @endforeach
                    </select>
                    <label>Tipo</label>
                </div>
                <div class="input-field col s12 m6">
                    <select  id="status_id" name="status_id">
                        <option value="" disabled selected>Selecione o status</option>
                        @foreach($status as $res)
                            <option value="{{$res->id}}" {{$imovel->status_id == $res->id ? "selected" : ""}}>{{$res->description}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="address" name="address" type="text" value="{{$imovel->address}}">
                    <label for="address">Endereço</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m4">
                    <input id="number" name="number" type="text" value="{{$imovel->number}}">
                    <label for="number">Número</label>
                </div>
                <div class="input-field col s12 m8">
                    <input id="complement" name="complement" type="text" value="{{$imovel->complement}}">
                    <label for="complement">Complemento</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m4">
                    <input id="district" name="district" type="text" value="{{$imovel->district}}">
                    <label for="district">Bairro</label>
                </div>
                <div class="input-field col s12 m4">
                    <input id="city" name="city" type="text" value="{{$imovel->city}}">
                    <label for="city">Cidade</label>
                </div>
                <div class="input-field col s12 m4">
                    <input id="uf" name="uf" type="text" value="{{$imovel->uf}}">
                    <label for="uf">UF</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12" style="text-align: center;">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Editar
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>

        </form>
    </div>

    <script src="//cdn.ckeditor.com/4.5.10/standard/ckeditor.js"></script>
    <script src="//igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('description');
        $( document ).ready(function() {
            $('#contact_phone').mask('(00) 00000-0000');
            $('#price').mask("###0.00", {reverse: true});
            $('#condominio').mask("###0.00", {reverse: true});
            $('#iptu').mask("###0.00", {reverse: true});

            $('select').material_select();
        });
    </script>

@endsection