<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>FutManga - Oliver & Benji</title>
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
         header {
         background-color: #961212;
         color: #000000;
         text-align: center;
         padding: 1em;
         border-bottom: 1px solid #000000;
         }

         header img {
         position: absolute;
         left: 30px;
         top: 33px;
         height: 50px;
         cursor: pointer;
         }

         nav {
         background-color: #444;
         color: #fff;
         text-align: center;
         padding: 0.5em;
         }
         section {
         padding: 20px;
         display: flex;
         justify-content: space-around;
         flex-wrap: wrap;
         }
         .card {
         width: 400px;
         background-color: #fff;
         border-radius: 10px;
         box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
         margin: 15px;
         overflow: hidden;
         transition: transform 0.3s ease;
         }
         .card:hover {
         transform: scale(1.03);
         }
         .card img {
         width: 100%;
         height: 300px;
         object-fit: cover;
         border-bottom: 1px solid #eee;
         }
         .card-content {
         padding: 15px;
         }
         .product-name {
         font-size: 1.2em;
         margin: 10px 0;
         }
         .product-price {
         font-size: 1.5em;
         }
         .CartBtn {
         width: 140px;
         height: 40px;
         border-radius: 12px;
         border: none;
         background-color: #d90000;
         display: flex;
         align-items: center;
         justify-content: center;
         cursor: pointer;
         transition-duration: .5s;
         overflow: hidden;
         box-shadow: 0px 5px 10px #0000001a;
         position: relative;
         }
         .IconContainer {
         position: absolute;
         left: -50px;
         width: 30px;
         height: 30px;
         background-color: transparent;
         border-radius: 50%;
         display: flex;
         align-items: center;
         justify-content: center;
         overflow: hidden;
         z-index: 2;
         transition-duration: .5s;
         }
         .icon {
         border-radius: 1px;
         }
         .text {
         height: 100%;
         width: fit-content;
         display: flex;
         align-items: center;
         justify-content: center;
         color: rgb(17, 17, 17);
         z-index: 1;
         transition-duration: .5s;
         font-size: 1.04em;
         font-weight: 600;
         }
         .CartBtn:hover .IconContainer {
         transform: translateX(48px);
         border-radius: 40px;
         transition-duration: .5s;
         }
         .CartBtn:hover .text {
         transform: translate(11px,0px);
         transition-duration: .5s;
         }
         .CartBtn:active {
         transform: scale(0.95);
         transition-duration: .5s;
         }
         footer {
         background-color: #333;
         color: #fff;
         text-align: center;
         padding: 1em;
         bottom: 0;
         width: 100%;
         margin-top: 40px;
         }
         .imgTitulo {
            width: 25px;
         }
      </style>
   </head>
   <body>
      <header>
        <a href="{{URL('/')}}"><img src="inicio.png"></a>
         <h1> OLIVER & BENJI </h1>
      </header>
      <section>
         <div class="card">
            <img src="newteam.png" alt="Producto 1">
            <div class="card-content">
               <h3 class="product-name">Equipación New Team</h3>
               <p class="product-price">19.99€</p>
               <button class="CartBtn">
                  <span class="IconContainer">
                     <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart">
                        <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                     </svg>
                  </span>
                  <p class="text">Añadir a la cesta</p>
               </button>
            </div>
         </div>
         <div class="card">
            <img src="toho.png" alt="Producto 2">
            <div class="card-content">
               <h3 class="product-name">Equipación Toho</h3>
               <p class="product-price">19.99€</p>
               <button class="CartBtn">
                  <span class="IconContainer">
                     <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart">
                        <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                     </svg>
                  </span>
                  <p class="text">Añadir a la cesta</p>
               </button>
            </div>
         </div>
      </section>
      <footer>
         <p>&copy; 2024 FutManga Shop. Todos los derechos reservados.</p>
      </footer>
   </body>
</html>