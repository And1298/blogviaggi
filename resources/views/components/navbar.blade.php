<nav class="navbar navbar-expand-lg bg-body-tertiary @if(Route::currentRouteName() == 'login' || Route::currentRouteName() == 'register') fixed-top @endif">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link @if(Route::currentRouteName() == 'home') active @endif" href="{{ route('home') }}">Home</a>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link @if(Route::currentRouteName() == 'login') active @endif" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Route::currentRouteName() == 'register') active @endif" href="{{ route('register') }}">Register</a>
                </li>
                @endguest
            </ul>
            @auth
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="btn btn-danger" type="submit">logout</button>
            </form>                 
            @endauth
        </div>
    </div>
</nav>