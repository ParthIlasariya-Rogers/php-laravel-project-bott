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
        :root {
            --rogers-red: #DA291C;
            --rogers-red-dark: #B22116;
            --rogers-white: #FFFFFF;
        }
        
        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
        }
        
        .header {
            background-color: var(--rogers-red);
            color: var(--rogers-white);
            padding: 1rem 2rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .header-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--rogers-white);
            text-decoration: none;
        }
        
        .nav-menu {
            display: flex;
            gap: 2rem;
        }
        
        .nav-menu a {
            color: var(--rogers-white);
            text-decoration: none;
            font-weight: 500;
            transition: opacity 0.3s;
        }
        
        .nav-menu a:hover {
            opacity: 0.8;
        }
        
        .main-content {
            min-height: calc(100vh - 160px);
            padding: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .footer {
            background-color: var(--rogers-red);
            color: var(--rogers-white);
            padding: 2rem;
            margin-top: auto;
        }
        
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .footer-links {
            display: flex;
            gap: 2rem;
        }
        
        .footer-links a {
            color: var(--rogers-white);
            text-decoration: none;
            transition: opacity 0.3s;
        }
        
        .footer-links a:hover {
            opacity: 0.8;
        }
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
