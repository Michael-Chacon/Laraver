<nav class="navbar bg-white shadow-sm">
    <a class="navbar-brand" href="{{ route('home')}}">
        {{ config('app.name') }}
    </a>
    @auth
    <h3 class="mb-0">
        {{ auth()->user()->name }}
    </h3>
     @endauth
    <ul class=" nav nav-pills">
        <li class="nav-item ">
            <a class="nav-link {{ validarRuta('home') }}" href="{{ route('home') }}">
                Home
            </a>
        </li>
        <li class="nav-item {{ validarRuta('about') }}">
            <a class="nav-link" href="{{ route('about') }}">
                About
            </a>
        </li>
        <li class="nav-item {{ validarRuta('contacts.*') }}">
            <a class="nav-link" href="{{ route('contacts.index') }}">
                Contacto
            </a>
        </li>
        <li class="nav-item {{ validarRuta('projects.*') }}">
            <a class="nav-link" href="{{ route('projects.index') }}">
                Portafolio
            </a>
        </li>
        @auth
        <li class="nav-item {{ validarRuta('logout.*') }}">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
        </li>
        @else
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login')}}">
                Login
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register')}}">
                Registrarme
            </a>
        </li>
        @endauth
        <form action="{{ route('logout') }}" class="d-none" id="logout-form" method="POST">
            @csrf
        </form>
    </ul>
</nav>
