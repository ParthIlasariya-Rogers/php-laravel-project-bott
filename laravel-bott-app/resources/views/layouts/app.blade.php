<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    <style>
        
    </style>
    
    @stack('styles')
</head>
<body>
    <header class="header">
        <div class="header-content">
            <a href="{{ url('/') }}" class="logo">
                {{ config('app.name', 'Laravel') }}
            </a>
            <nav class="nav-menu">
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/about') }}">About</a>
                <a href="{{ url('/contact') }}">Contact</a>
                @auth
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                @endauth
            </nav>
        </div>
    </header>

    <main class="main-content">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-copyright">
                © {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.
            </div>
            <div class="footer-links">
                <a href="{{ url('/privacy') }}">Privacy Policy</a>
                <a href="{{ url('/terms') }}">Terms of Service</a>
                <a href="{{ url('/contact') }}">Contact Us</a>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
