<?php
include_once "Controller/signin.php";
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="icon" href="favicon.ico" />
    <script src="js/scriptHot.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <title>HotHotHot</title>

</head>
<body>
<?php View::show('base/header'); ?>

<div >
    <h2>Connexion</h2>
    <form method="POST" action="">
        <input type="email" name="mailconnect" placeholder="Mail" />
        <input type="password" name="mdpconnect" placeholder="Mot de passe" />
        <input type="submit" name="formconnexion" value="Se connecter" />
    </form>
    <a class="navigation" data-nav="inscription">Inscription</a><br>
    <a class="mdpforgot">Mot de passe oublié (Non disponible)</a><br>
    <?php
    if(isset($erreur)) {
        echo $erreur;
    }
    ?>
</div>
<?php View::show('base/footer'); ?>
</body>

</html>
