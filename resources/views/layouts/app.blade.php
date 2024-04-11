<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC-Comics</title>

    @vite('resources/js/app.js')
</head>
<body>
    
    @include('comics/header')
    @include('comics/jumbo')
    @yield('content')
    @include('comics/icons')
    @include('comics/footer')
</body>
</html>