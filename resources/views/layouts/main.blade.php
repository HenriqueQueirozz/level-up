<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="/css/style.css?5">
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
        <header>
            <nav id="navegation-bar">
                <a href="{{ route('welcome') }}"><img src="/assets/level-up.png" alt="Logo Level Up"></a>
                <ul>
                    <li><a href="{{ route('seller.index') }}">Vendedores</a></li>
                    <li><a href="{{ route('sale.index') }}">Vendas</a></li>
                </ul>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
        <script src="/js/script.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>