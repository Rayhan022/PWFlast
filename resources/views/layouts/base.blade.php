<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="css/style.css" >
        <!-- Styles -->
        
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/tentangkami">TentangKami</a></li>
                <li><a href="/kontak">Kontak</a></li>
                <li><a href="/inputpelanggan">Profil</a></li>
            </ul>
        </nav>
@yield('content')
    </body>
</html>

