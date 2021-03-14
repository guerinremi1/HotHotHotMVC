<?php
include_once "Controller/editProfil.php";
?>
<!doctype html>
    <html lang="fr">
    <head>
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js/scriptHot.js"></script>
        <link rel="icon" href="favicon.ico" />
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <title>HotHotHot</title>

    </head>
    <body>
    <?php View::show('base/header'); ?>
   <body>
   <h2>Edition de mon profil</h2>

        <form method="POST" action="" enctype="multipart/form-data">

           <input type="text" name="newpseudo" placeholder="Pseudo" value="<?php echo $user['pseudo']; ?>" />

           <input type="text" name="newmail" placeholder="Mail" value="<?php echo $user['mail']; ?>" />

           <input type="password" name="newmdp1" placeholder="Mot de passe"/>

           <input type="password" name="newmdp2" placeholder="Confirmation du mot de passe" />
           <input type="submit" value="Modifier mon profil" />
        </form>
        <?php if(isset($msg)) { echo $msg; } ?>

   </body>
</html>
<?php
if(isset($_SESSION['id'])){
}
else {
    header("Location: connexion");
    exit;
}
?>