<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <img src="{{ asset('images/dc-logo.png') }}" alt="logo dc" class="img-fluid d-inline-block align-text-top">
        </a>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link @if (Route::is('home')) active @endif" aria-current="page"
                        href="{{ route('home') }}">HOME</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
