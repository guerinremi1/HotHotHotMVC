<?php
include_once "Controller/signup.php";
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

<main>
    <div>
        <h2>Inscription</h2>
        <form method="POST">

            <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />

            <input type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />

            <input type="email" placeholder="Confirmez votre mail" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" />

            <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />

            <input type="password" placeholder="Confirmez votre mot de passe" id="mdp2" name="mdp2" />

            <input type="submit" name="forminscription" value="Je m'inscris" />

        </form>
        <a class="navigation" data-nav="connexion">Connexion</a><br>
        <?php
        if(isset($erreur)) {
            echo $erreur;
        }
        ?>
    </div>
</main>
</body>

</html>
