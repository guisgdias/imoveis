<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



    <!-- Compiled and minified JavaScript -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

    <style type="text/css">
        /* STICKER FOOTER */
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }

        .search-bar {
            background: rgba(255, 255, 255, 0.51);
            margin: 5% 0 0 0;
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
    </style>
</head>
<body>
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">
            <div class="row">
                <div class="col s12">
                    <a href="#" class="brand-logo">ImóveisJá</a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="sass.html"><i class="material-icons left">perm_identity</i>Entrar</a></li>
                        <li><a href="sass.html"><i class="material-icons left">input</i>Cadastrar</a></li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="sass.html"><i class="material-icons left">perm_identity</i>Entrar</a></li>
                        <li><a href="sass.html"><i class="material-icons left">input</i>Cadastrar</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>

<div class="parallax-container">
    <div class="parallax"><img src="/imagens/banner-main.jpg"></div>
    <div class="row">
        <form class="col s12">
            <div class="row search-bar">
                <div class="input-field col s12">
                    <select name="type_id">
                        <option value="" disabled selected>Escolha uma opção</option>
                        <option value="1">Residencial</option>
                        <option value="2">Comercial</option>
                    </select>
                    <label>Tipo</label>
                </div>
                <div class="input-field col s12">
                    <select name="status_id">
                        <option value="" disabled selected>Escolha uma opção</option>
                        <option value="1">Na Planta</option>
                        <option value="2">Em Construção</option>
                        <option value="3">Pronto para morar</option>
                    </select>
                    <label>Status</label>
                </div>
                <div class="input-field col s12">
                    <input name="address" id="address" type="text">
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
                        <img src="@{{ imovel.image }}">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <span>@{{ imovel | fullAddress }}</span>
                            <h4>@{{ imovel.title }}</h4>

                            @{{ imovel.description }}

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

    <!--<pre>
        @{{ $data | json }}
    </pre>-->
</main>

<footer class="page-footer">
    <div class="footer-copyright">
        <div class="container">
            <span class="center-align">© 2016 Copyright Guilherme Dias</span>
        </div>
    </div>
</footer>
</body>
<script src="/js/vendor.js" ></script>
<script src="/js/home.js" ></script>
<script>
    $(document).ready(function () {
        $('.parallax').parallax();
        $('select').material_select();
        $(".button-collapse").sideNav();
    });
</script>
</html>
