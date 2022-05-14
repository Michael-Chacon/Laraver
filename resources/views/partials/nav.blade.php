<nav>
    <ul>
        <li class="{{ validarRuta('home') }}">
            <a href="{{ route('home') }}">
                Home
            </a>
        </li>
        <li class="{{ validarRuta('about') }}">
            <a href="{{ route('about') }}">
                About
            </a>
        </li>
        <li class="{{ validarRuta('contacts.*') }}">
            <a href="{{ route('contacts.index') }}">
                Contacto
            </a>
        </li>
        <li class="{{ validarRuta('projects.*') }}">
            <a href="{{ route('projects.index') }}">
                Portafolio
            </a>
        </li>
    </ul>
</nav>
