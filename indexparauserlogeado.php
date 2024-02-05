<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
    <link href="js/js.js" rel="stylesheet">

    <title>Restaurante</title>
</head>
<body>
<?php require("head_userregistrados.php"); ?>

<main class="main">

<section class="group group--color">
    <div class="container">
        <h2 class="main__title">Bienvenido a KUTRAL</h2>
        <p class="main__txt">
        Bienvenido a Kutral, donde la calidad y la hospitalidad se encuentran para crear momentos inolvidables.Nuestro equipo dedicado está aquí para hacer de tu visita una experiencia memorable. Ya sea que estés celebrando una ocasión especial, compartiendo momentos con seres queridos o simplemente disfrutando de una comida tranquila, en Kutral encontrarás el lugar perfecto para deleitar tus sentidos.
</p>
    </div>
</section>

<section class="group main__about__description">
    <div class="container container--flex">
        <div class="column column--50">
            <img class="cover-image" src="https://www.restaurantekutral.com/wp-content/uploads/2021/04/DSC08802-1024x1024.jpg" alt="">
        </div>
        <div class="column column--50">
            <h3 class="column__title">Experimenta el sabor de KUTRAL</h3>
            <p class="column__txt">Experimenta la fusión única de sabores auténticos y un ambiente acogedor en Kutral. Descubre una experiencia gastronómica excepcional, donde cada plato es una obra maestra cuidadosamente elaborada para deleitar tus sentidos.</p>
            <a href="reservas.php" class="btn btn--contact">Reserva</a>
        </div>
    </div>
</section>

<section class="group today-special">

    <h2 class="group__title">Nuestros Platos Especiales</h2>

    <div class="container container--flex">

        <div class="column column--50--25">
            <img src="https://www.restaurantekutral.com/wp-content/uploads/2019/05/Optimized-IMG_7380-1024x614.jpg" alt="" class="today-special__img">
            <div class="today-special__title">Chuletón "SIMMENTAL"</div>
            <div class="today-special__price">85,00€</div>
        </div>

        <div class="column column--50--25">
            <img src="https://www.restaurantekutral.com/wp-content/uploads/2021/02/IMG_2360-768x1024.jpg" alt="" class="today-special__img">
            <div class="today-special__title">Solomillo de vaca</div>
            <div class="today-special__price">30€</div>
        </div>

        <div class="column column--50--25">
            <img src="https://img.menudigitalqr.app/p/2749391621783330928.jpg" alt="" class="today-special__img">
            <div class="today-special__title">Solomillo de cerdo</div>
            <div class="today-special__price">28€</div>
        </div>
        
        <div class="column column--50--25">
            <img src="https://img.menudigitalqr.app/p/1593271624098593743.jpg" alt="" class="today-special__img">
            <div class="today-special__title">Presa Ibérica de Bellota</div>
            <div class="today-special__price">30€</div>
        </div>

    </div>
</section>



</main>

    <?php require("footer.php"); ?>

<script src="menu.js"></script>
</body>
</html>