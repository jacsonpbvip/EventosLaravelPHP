<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/scripts.js"></script>
    <link rel="icon" type="Logo" href="/img/Icone.png">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
            <a href="/" class="navbar-brand">
                <img src="/img/logo.png" alt="Jacson Events">
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation" onclick="toggleNavLayout()">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-grow-1 ml-auto" id="navbarItems">
                    <li class="nav-item navbar-item">
                        <a class="nav-link" href="/contact">Fale Conosco</a>
                    </li>
                    <li class="nav-item navbar-item">
                        <a class="nav-link" href="/">Eventos</a>
                    </li>
                    <li class="nav-item navbar-item">
                        <a class="nav-link" href="/events/create">Criar Eventos</a>
                    </li>
                    @auth
                        <li class="nav-item navbar-item">
                            <a href="/dashboard" class="nav-link">Meus eventos</a>
                        </li>
                        <li class="nav-item navbar-item">
                            <form action="/logout" method="POST">
                                @csrf
                                <a href="/logout" class="nav-link"
                                    onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
                            </form>
                        </li>
                    @endauth
                    @guest
                        <li class="nav-item navbar-item">
                            <a href="/login" class="nav-link">Entrar</a>
                        </li>
                        <li class="nav-item navbar-item">
                            <a href="/register" class="nav-link">Cadastrar</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                @if (session('msg'))
                    <p class="msg">{{ session('msg') }}</p>
                @endif
                @yield('content')
            </div>
        </div>
    </main>
    <footer>
        <p>Jacson Events &copy; 2023</p>
    </footer>
    <script>
        function toggleNavLayout() {
            var navbarItems = document.getElementById("navbarItems");
            navbarItems.classList.toggle("column");
        }
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
