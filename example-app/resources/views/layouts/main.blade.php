<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Fonts -->

        <link rel="stylesheet" href="css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collpase" id="navbar">
                <a href="/" class="navbar-brand">
                    <img src="/img/logo.jpg" alt="Logo">
                </a>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/" class="nav-link">Eventos</a>
                </li>
                <li class="nav-item">
                    <a href="/events/create" class="nav-link">Criar Eventos</a>
                </li>
                <li class="nav-item">
                    <a href="/produto_teste" class="nav-link">Produto</a>
                </li>
                <li class="nav-item">
                    <a href="/produtos" class="nav-link">Produtos</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">Entrar</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">Cadastrar</a>
                </li>
            </ul>
        </nav>
    </header>
        
    @yield('content')
    
    <footer>
        <p>Igor Mattos &copy; 2020</p>
    </footer>
    </body>
</html>
