<!DOCTYPE html>
<html>

<head>
    <title>Tp final</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/axentix@1.0.0/dist/css/axentix.min.css">
</head>

<body class="layout">
    <header>
        <nav class="navbar grey dark-5">
            <a href="#" target="_blank" class="navbar-brand">TP FINAL</a>
            <div class="navbar-menu ml-auto">

                <a class="navbar-link" href="{{ route('eleve.index') }}">Elèves</a>
                <a class="navbar-link" href="{{ route('promo.index') }}">Promos</a>
                <a class="navbar-link" href="{{ route('module.index') }}">Modules</a>
            </div>
        </nav>
    </header>

    <main>

        @yield('title')

        <div>
            <p>@yield('contenu')</p>
        </div>
    </main>

    <footer class="footer grey dark-5">
        Ali Chamass © 2020
    </footer>
</body>

</html>