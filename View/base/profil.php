<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');

if(isset($_SESSION['id'])){
    $getid = $_SESSION['id'];
    $requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
    $requser->execute(array($getid));
    $userinfo = $requser->fetch();
}


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
<div align="center">
    <h2>
        <?php if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']){
                echo "Profil de ".$userinfo['pseudo'];
            }else{
                echo '<a class="navigation" data-nav="connexion">Connectez vous</a>';
            }
        ?>
    </h2>
    <br />
    <?php
    if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
        ?>
        <p> Mail = <?php echo $userinfo['mail'];  ?> </p>
        <br />
        <p> Derniere connexion = <?php echo $_SESSION['dateco']; ?> </p>
        <br />
        <a class="navigation" data-nav="edition" ">Editer mon profil</a>
        <?php
    }
    ?>
</div>
<?php View::show('base/footer'); ?>
</body>

</html>