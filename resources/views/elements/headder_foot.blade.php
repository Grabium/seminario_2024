<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Seminário Shekinah 2024 - @yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/basic_style.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>

    <body>
        <div>
            <h3>PARÓQUIA ESPÍRITO SANTO</h3>
            <h1>SEMINÁRIO DE VIDA NO ESPÍRITO SANTO</h1>
            <h2>GRUPO DE ORAÇÃO SHEKINAH</h2>
            <h2>2024</h2>
        </div>

        @yield('conteudo')
        
    </body>
</html>