<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <div>
            <h1>Subir imágenes</h1>
        <form action="/lugares/guardar" enctype="multipart/form-data"
        method="post">
            @csrf
            <label for="">Nombre:</label><br>
            <input type="text" name="nombre" placeholder="Ingrese nombre:"><br>
            <label for="">Foto:</label><br>
            <input type="file" name="foto"><br>
            <button type="submit">guardar</button>
        </form>
        </div>
    </body>
</html>
