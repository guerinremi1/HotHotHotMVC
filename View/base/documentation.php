<?php require 'Buffer/Buffer.php'; ?>
<?php define('ROOT', dirname(__FILE__)); ?>
<?php $Buffer = new Buffer('../tmp',1); ?>
<?php ini_set('display_errors', 'off');?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/scriptHot.js"></script>
    <link rel="icon" href="favicon.ico" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <title>Documentation</title>

</head>
<body>
<?php View::show('base/header'); ?>
<section class="docpage">

    <section class="documentation">
        <h2>DOCUMENTATION</h2>
        <section class="docu-intro">
            <h3>SOMMAIRE</h3>
            <ul>
                <li>
                    <p>I- Qu est-ce-que HOTHOTHOT</p>
                    <ul>
                        <li>
                            a) Principe
                        </li>
                        <li>
                            b) Fonctionnement
                        </li>
                    </ul>
                </li>
                <li>
                    <p>II- Comment l utiliser</p>
                    <ul>
                        <li>
                            a) Creation de compte
                        </li>
                        <li>
                            b) Se connecter a son compte
                        </li>
                        <li>
                            c) Se deconnecter de son compte
                        </li>
                        <li>
                            d)	Modifier son compte
                        </li>
                    </ul>
                </li>
            </ul>
        </section>
        <section class="docu-page-1">
            <h3>I-	Qu est-ce-que HOTHOTHOT</h3>
            <p>
            <h4>a)	Principe</h4>
            <p>
                HotHotHot est une application dont le role est d etre une interface d information et de gestion d un système domotique.
            </p>
            </p>
            <p>
            <h4>
                b)	Fonctionnement
            </h4>
            <p>
                Cette application reçoit des donnees en provenance de differents capteur (temperature, humidite, etat d un peripherique etc.)
                Elle affiche ces donnees, leur historique si necessaire et propose des suggestions, emet des alertes a l attention des utilisateurs.
            </p>
            </p>
        </section>
        <section class="docu-page-2">
            <h3>II-	Comment l utiliser </h3>
            <p>
            <h4>a)	Creation d un compte </h4>
            <p>
                Pour commencer, rendez-vous sur la page d accueil de l application HotHotHot comme suis :<br>
                Par la suite, aller sur l onglet Inscription en haut a droite comme sur la photo ci-dessous, cliquer dessus.<br>
                Une fois que vous avez clique sur l onglet d inscription vous atterrissez sur le formulaire d inscription, a partir de la vous n avez qu a remplir les champs avec vos infos personnelles ci-dessous un exemple pour le remplissage des champs :<br>
                Les champs etant remplis vous n avez plus qu a appuyer sur le bouton je m inscris ce dernier vous renverras sur la page d accueil.
            </p>
            </p>
            <p>
            <h4>
                b)	Se connecter a son compte
            </h4>
            <p>
                Sur la page d accueil rendez-vous dans l onglet Connexion, en haut a gauche comme sur la photo ci-dessous et cliquer dessus.<br>
                Pour vous connecter entrez vos informations que vous donnees lors de votre inscription.<br>
                Une fois vos identifiants rentrez vous n avez plus qu a appuyer sur le bouton Se connecter, vous serez renvoyee sur la page de recapitulation de votre profil, a partir de la vous pouvez soit le modifier s il ne vous convient pas soit retourner sur la page d accueil.
            </p>
            </p>
            <p>
            <h4>
                c)	Se deconnecter
            </h4>
            <p>
                Pour se deconnecter il suffit tout simplement d appuyer sur le bouton deconnexion en haut a gauche comme ci-dessous. Vous serez redirigez vers la page de connexion vous pourrez soit vous re connecter soit vous inscrire ou alors retourner sur la page d accueil.<br>

            </p>
            </p>
            <p>
            <h4>
                d)	Modifier son profil
            </h4>
            <p>
                Pour modifier votre profil vous devez tout d abord être connecte.<br>
                Une fois connecte rendez-vous sur l onglet profil en haut a gauche, cliquer dessus.<br>
                Arriver sur cette page appuyer sur editer votre profil :
            </p>
            </p>
        </section>
    </section>

    <?php $Buffer->inc('../View/FAQ.php'); ?>
    <?php
    //if(!$variable = $Buffer->readBuffer('variable.txt')){
    //  $variable = "test cache";
    //$Buffer->writeBuffer('variable.txt', $variable);
    //}
    ?>


    <p><?//= $variable; ?></p>
</section>
<?php View::show('base/footer'); ?>
</body>

</html>