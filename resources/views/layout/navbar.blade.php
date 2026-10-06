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
            <!-- Cluster: Pengguna -->
            <li class="nav-item dropdown {{ request()->is('user*') ? 'active' : '' }}">
                <a href="#" class="nav-link dropdown-toggle" role="button" id="userMenuToggle">
                    <span>Pengguna</span>
                    <svg class="dropdown-chevron" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </a>
                <ul class="dropdown-menu" aria-labelledby="userMenuToggle">
                    <li>
                        <a href="{{ url('/user') }}" class="dropdown-item {{ request()->is('user') && !request()->is('user/create') ? 'active' : '' }}">
                            Daftar Pengguna
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('user.create') }}" class="dropdown-item {{ request()->is('user/create') ? 'active' : '' }}">
                            Tambah Pengguna
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Cluster: Mata Kuliah -->
            <li class="nav-item dropdown {{ request()->is('matakuliah*') ? 'active' : '' }}">
                <a href="#" class="nav-link dropdown-toggle" role="button" id="mkMenuToggle">
                    <span>Mata Kuliah</span>
                    <svg class="dropdown-chevron" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </a>
                <ul class="dropdown-menu" aria-labelledby="mkMenuToggle">
                    <li>
                        <a href="{{ url('/matakuliah') }}" class="dropdown-item {{ request()->is('matakuliah') && !request()->is('matakuliah/create') ? 'active' : '' }}">
                            Daftar Mata Kuliah
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('matakuliah.create') }}" class="dropdown-item {{ request()->is('matakuliah/create') ? 'active' : '' }}">
                            Tambah Mata Kuliah
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Profil -->
            <li class="nav-item">
                <a href="{{ url('/profile') }}" class="nav-link {{ request()->is('profile*') ? 'active' : '' }}">
                    Profil
                </a>
            </li>
        </ul>
    </div>
</nav>
