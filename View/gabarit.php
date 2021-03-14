<?php
session_start();
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/scriptHot.js"></script>
    <link rel="icon" href="favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <title>HotHotHot</title>

</head>
<body>
<?php View::show('base/header'); ?>

<h2>CAPTEUR EXT ET INT</h2>

<main>
    <section id="capteurExt" class="capteur" data-capteur="Exterieur">
        <article>EXTERIEUR</article>
        <h3>35°C</h3>
        <section class="min-max">
            <h4 class="minExterieur">Min°C</h4>    <h4 class="maxExterieur">Max°C</h4>
        </section>
        <article class="alerte alerteExt">Tout va bien</article>
    </section>

    <section id="capteurInt" class="capteur" data-capteur="Interieur">
        <article>INTERIEUR</article>
        <h3>35°C</h3>
        <section class="min-max">
            <h4 class="minInterieur">Min°C</h4>    <h4 class="maxInterieur">Max°C</h4>
        </section>
        <article class="alerte alerteInt">Tout va bien</article>
    </section>

    <section id="black"></section>
    <section id="popup">
        <article class="close"><i class="fas fa-times fa-2x"></i></article>
        <h2 class="title"></h2>
        <h3>35°C</h3>
        <article class="alerte">alerte</article>
        <section class="historique">

        </section>
        <section class="historique2">

        </section>
    </section>

</main>
<?php View::show('base/footer'); ?>
</body>

</html>




