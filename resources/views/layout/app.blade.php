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
    @include('layout.navbar')

    <main class="main-content">
        <div class="container">
            @yield('content')
        </div>
    </main>

    @include('layout.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggleBtn = document.getElementById('navbarToggle');
            const navMenu = document.getElementById('navbarMenu');
            if (toggleBtn && navMenu) {
                toggleBtn.addEventListener('click', function () {
                    navMenu.classList.toggle('show');
                });
            }
        });
    </script>
</body>
</html>