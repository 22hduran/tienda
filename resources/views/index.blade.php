<!DOCTYPE html>
<html lang="es">
<head>
    <title>FutManga Shop</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
      <style>
         @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
         body {
         font-family: 'Open Sans', sans-serif;
         margin: 0;
         padding: 0;
         background-color: #f4f4f4;
         height: 100vh;
         }

        .botones {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20vh;
        }

        .button {
            position: relative;
            overflow: hidden;
            margin: 10px;
            border: none;
            border-radius: 5px;
            padding: 30px 60px;
            cursor: pointer;
            color: #fff; 
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            transition: 0.5s;
            display: inline-block;
        }

        .button:hover {
            transform: scale(1.1);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }

        .button:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); 
            z-index: 1;
            transition: 0.5s;
        }

        .button:hover:before {
            opacity: 0; 
        }

        .button.btn1 {
            background: url('https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjarC0osPvccfeti1wK4UAOGzrtm9F2C0dMvapKPtA2lSwC02zmeVIroP60KfYZEPyDlxQLNssZ2GS45ATgppUFf3yrDKSIamoUiAHT_GV0O73JGb73KoGd2pfdV0nG3AMQFkBZivjNKGJZ_g6Pho6aNj0MnVhZVhTl6fm7Pfj6U57ggEAwQvOY2o6w7w/s800/superonce-1.jpg'); 
            background-size: cover;
        }

        .button.btn2 {
            background: url('https://ramenparados.com/wp-content/uploads/2021/05/Blue-Lock-destacado-1000x600.jpg');
            background-size: cover;
        }

        .button.btn3 {
            background: url('https://i0.wp.com/www.pcmrace.com/wp-content/uploads/2020/05/CAPTAINTSUBASAART.jpg');
            background-size: cover;
        }

        .button span {
            position: relative;
            z-index: 2;
        }

        header {
         background-color: #051307;
         color: white;
         text-align: center;
         padding: 1em;
         border-bottom: 1px solid #000000;
         }
    </style>
</head>
<body>
    <header>
         <h1> FUTMANGA SHOP </h1>
      </header>

      <div class="botones">    
        <a href="{{URL('/inazuma')}}" class="button btn1"><span>Inazuma Eleven</span></a>
        <a href="{{URL('/bluelock')}}" class="button btn2"><span>Blue Lock</span></a>
        <a href="{{URL('/oliverbenji')}}" class="button btn3"><span>Oliver & Benji</span></a>
    </div>


</body>
</html>
