@extends('layouts.front')
@section('title_page', 'Página de Banners da Home')
@section('content')
    <div class="col m12">
        <h2 class="center-align">Cadastar usuário</h2>
        <div class="row">
            <form class="col s12" role="form" method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" name="name" type="text" class="validate"  value="{{ old('name') }}">
                        <label for="name">Nome</label>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" name="email" type="email" class="validate" value="{{ old('email') }}">
                        <label for="email">Email</label>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="pass" name="password" type="password" class="validate">
                        <label for="pass">Senha</label>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password-confirm" name="password_confirmation" type="password" class="validate">
                        <label for="password-confirm">Confirmar senha</label>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password-confirm') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="divider"></div>
                <div class="row">
                    <div class="col m12">
                        <p class="right-align">
                            <button class="btn btn-large waves-effect waves-light" type="submit" name="action">Cadastrar</button>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection