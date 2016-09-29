<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title_page')</title>

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

        .img-main {
            max-height: 870px;
            padding: 7px 0 7px 0;
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
                        <li>{{ Auth::user()->name  }}</li>
                        <li><a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"><i class="material-icons left">power_settings_new</i>Sair</a></li>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li>{{ Auth::user()->name  }}</li>
                        <li><a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"><i class="material-icons left">power_settings_new</i>Sair</a></li>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>

<main>
    @yield('content')
</main>

<footer class="page-footer">
    <div class="footer-copyright">
        <div class="container" style="text-align: center">
            <span class="center-align">© 2016 Copyright Guilherme Dias</span>
        </div>
    </div>
</footer>
</body>
<script src="/js/vendor.js" ></script>
@yield('mainScript')
<script>
    $(document).ready(function () {
        $(".button-collapse").sideNav();
    });
</script>
</html>
