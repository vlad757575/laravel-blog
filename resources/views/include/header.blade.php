<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand " href="#">Mon blog !</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav  mx-auto">
                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                <a class="nav-link" href="{{ route('article') }}">Articles</a>
                <a class="nav-link" href="#">Contact</a>
                @if (Auth::user())
                    <ul>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="btn" type="submit">Déconnexion </button>
                            </form>
                        </li>
                        <li>
                            <span class="nav-link"> Bonjour {{ Auth::user()->name }}</span>
                        </li>
                    @else
                        <li>
                            <form method="POST"action="{{ route('login') }}">
                                @csrf
                                <button class="btn" type="submit">Connexion</button>
                            </form>
                        </li>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <button class="btn" type="submit">Créer un compte</button>
                        </form>
                    </ul>
                @endif


            </div>
        </div>
    </div>
</nav>
