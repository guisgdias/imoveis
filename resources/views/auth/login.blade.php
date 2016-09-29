@extends('layouts.front')
@section('title_page', 'Página de Banners da Home')
@section('content')
    <div class="col m12">
        <h2 class="center-align">Login</h2>
        <div class="row">
            <form class="col s12" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" name="email" type="email" class="validate">
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
                        <label for="pass">Password</label>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <p>
                            <input type="checkbox" id="remember" name="remember">
                            <label for="remember">Remember me</label>
                        </p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="row">
                    <div class="col m12">
                        <p class="right-align">
                            <button class="btn btn-large waves-effect waves-light" type="submit" name="action">Login</button>
                            <a class="btn btn-large waves-effect waves-light" href="{{ url('/password/reset') }}">
                                Forgot Your Password?
                            </a>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
