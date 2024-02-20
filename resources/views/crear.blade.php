<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        form {
            padding: 10px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <form action="">
        <h1>CREAR UNA CAMISETA</h1>
        <label for="nombre">Nombre camiseta: </label>
        <input type="text"><br><br>
        <label for="precio">Precio: </label>
        <input type="number"><br><br>
        <label for="imagen">Foto de la camiseta: </label>
        <input type="file" name="" id=""><br><br>
        <input type="submit">
        <a href="{{URL('/')}}"><button>Volver atrás</button></a>
    </form>
</body>
</html>