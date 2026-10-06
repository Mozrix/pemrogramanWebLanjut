<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'PWL App' }}</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Global CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="site-wrapper">
    @include('layout.alert')

    @include('layout.navbar')

    <main class="main-content">
        <div class="container">
            @yield('content')
        </div>
    </main>

    @include('layout.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Mobile navbar toggle
            const toggleBtn = document.getElementById('navbarToggle');
            const navMenu = document.getElementById('navbarMenu');
            if (toggleBtn && navMenu) {
                toggleBtn.addEventListener('click', function () {
                    navMenu.classList.toggle('show');
                });
            }

            // Dropdown click handler for mobile & desktop
            const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
            dropdownToggles.forEach(function (toggle) {
                toggle.addEventListener('click', function (e) {
                    e.preventDefault();
                    const currentDropdown = this.closest('.dropdown');
                    
                    // Close other dropdowns
                    document.querySelectorAll('.dropdown').forEach(function (drop) {
                        if (drop !== currentDropdown) {
                            drop.classList.remove('open');
                        }
                    });

                    currentDropdown.classList.toggle('open');
                });
            });

            // Close dropdowns when clicking outside
            document.addEventListener('click', function (e) {
                if (!e.target.closest('.dropdown')) {
                    document.querySelectorAll('.dropdown').forEach(function (drop) {
                        drop.classList.remove('open');
                    });
                }
            });

            // Pop-up Alert handler
            const popupAlert = document.getElementById('popupAlert');
            if (popupAlert) {
                const closeBtn = document.getElementById('popupAlertClose');
                const dismissAlert = () => {
                    popupAlert.classList.add('hide');
                    setTimeout(() => popupAlert.remove(), 350);
                };

                if (closeBtn) {
                    closeBtn.addEventListener('click', dismissAlert);
                }

                // Auto-dismiss after 4 seconds
                let timeout = setTimeout(dismissAlert, 4000);

                // Pause auto-dismiss on hover
                popupAlert.addEventListener('mouseenter', () => clearTimeout(timeout));
                popupAlert.addEventListener('mouseleave', () => {
                    timeout = setTimeout(dismissAlert, 2000);
                });
            }
        });
    </script>
</body>
</html>