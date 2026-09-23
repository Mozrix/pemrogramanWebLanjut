<nav class="navbar">
    <div class="navbar-container">
        <a href="{{ url('/') }}" class="navbar-brand">
            <span>INI LOGO</span>
        </a>

        <button class="navbar-toggler" id="navbarToggle" aria-label="Toggle navigation" type="button">
            <span class="toggler-bar"></span>
            <span class="toggler-bar"></span>
            <span class="toggler-bar"></span>
        </button>

        <ul class="navbar-nav" id="navbarMenu">
            <li class="nav-item">
                <a href="{{ url('/user') }}" class="nav-link {{ request()->is('user') ? 'active' : '' }}">Daftar Pengguna</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('user.create') }}" class="nav-link {{ request()->is('user/create') ? 'active' : '' }}">Tambah Pengguna</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/profile') }}" class="nav-link {{ request()->is('profile') ? 'active' : '' }}">Profil</a>
            </li>
        </ul>
    </div>
</nav>

