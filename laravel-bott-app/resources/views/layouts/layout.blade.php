<!DOCTYPE html>
<html>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

<!-- Styles are saved to app.css -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<head>
    <title>{{ config('app.name') }}</title>
</head>

<body>
    @section('header') <!-- Pointing to Header Section -->
    This is the master header.
    @show

    <div class="container">
        @yield('content')
    </div>

    @section('footer') <!-- Pointing to Footer Section -->
    This is the master footer.
    @show

</body>

</html>