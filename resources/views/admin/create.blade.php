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
            <h5>Cadastrar imóvel</h5>
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

        <form class="col s12" action="{{ route('admin.imovel.create') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="input-field col s12">
                    <input id="title" name="title" value="{{old('title')}}" type="text">
                    <label for="title">Titulo</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <label class="labelCkEditor" for="description">Descrição</label>
                    <textarea id="description" name="description">{{old('description')}}</textarea>
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
            </div>
            <div class="row">
                <div class="input-field col s12 m4">
                    <input id="contact_name" name="contact_name" type="text" value="{{old('contact_name')}}">
                    <label for="price">Nome do contato</label>
                </div>
                <div class="input-field col s12 m4">
                    <input id="contact_phone" name="contact_phone" type="text" value="{{old('contact_phone')}}">
                    <label for="contact_phone">Telefone do contato</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m4">
                    <input id="price" name="price" type="text" value="{{old('price')}}">
                    <label for="price">Preço</label>
                </div>
                <div class="input-field col s12 m4">
                    <input id="condominio" name="condominio" type="text" value="{{old('condominio')}}">
                    <label for="condominio">Condominio</label>
                </div>
                <div class="input-field col s12 m4">
                    <input id="iptu" name="iptu" type="text" value="{{old('iptu')}}">
                    <label for="iptu">IPTU</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m3">
                    <input id="area" name="area" type="text" value="{{old('area')}}">
                    <label for="area">Área</label>
                </div>

                <div class="input-field col s12 m3">
                    <select  id="amount_room" name="amount_room">
                        <option value="" disabled selected>Selecione a quantidade</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="3">4</option>
                        <option value="3">5</option>
                        <option value="3">6</option>
                    </select>
                    <label>Quantidade de Quartos</label>
                </div>

                <div class="input-field col s12 m3">
                    <select  id="amount_bathroom" name="amount_bathroom">
                        <option value="" disabled selected>Selecione a quantidade</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="3">4</option>
                        <option value="3">5</option>
                        <option value="3">6</option>
                    </select>
                    <label>Quantidade de Banheiros</label>
                </div>

                <div class="input-field col s12 m3">
                    <select  id="parking_space" name="parking_space">
                        <option value="" disabled selected>Selecione a quantidade</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="3">4</option>
                        <option value="3">5</option>
                        <option value="3">6</option>
                    </select>
                    <label>Vagas de estacionament</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12 m6">
                    <select  id="type_id" name="type_id">
                        <option value="" disabled selected>Selecione o tipo</option>
                        @foreach($types as $type)
                        <option value="{{$type->id}}">{{$type->description}}</option>
                        @endforeach
                    </select>
                    <label>Tipo</label>
                </div>
                <div class="input-field col s12 m6">
                    <select  id="status_id" name="status_id">
                        <option value="" disabled selected>Selecione o status</option>
                        @foreach($status as $res)
                            <option value="{{$res->id}}">{{$res->description}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="address" name="address" type="text" value="{{old('address')}}">
                    <label for="address">Endereço</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m4">
                    <input id="number" name="number" type="text" value="{{old('number')}}">
                    <label for="number">Número</label>
                </div>
                <div class="input-field col s12 m8">
                    <input id="complement" name="complement" type="text" value="{{old('complement')}}">
                    <label for="complement">Complemento</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m4">
                    <input id="district" name="district" type="text" value="{{old('district')}}">
                    <label for="district">Bairro</label>
                </div>
                <div class="input-field col s12 m4">
                    <input id="city" name="city" type="text" value="{{old('city')}}">
                    <label for="city">Cidade</label>
                </div>
                <div class="input-field col s12 m4">
                    <input id="uf" name="uf" type="text" value="{{old('uf')}}">
                    <label for="uf">UF</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12" style="text-align: center;">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Cadastrar
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