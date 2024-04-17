<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>DC-Comics</title>

    @vite('resources/js/app.js')
</head>

<body>

    @include('comics/header')

    <div class="container py-4 d-flex flex-column align-items-center">
        <h1 class="mb-4">La Boolblioteca.</h1>
    
        <a href="{{route('comics.index')}}" class="btn btn-primary ciao p-5">Divora tutti i nostri fumetti!!</a>
    </div>

    @include('comics/jumbo')
    @include('comics/icons')
    @include('comics/footer')

</body>
</html>

