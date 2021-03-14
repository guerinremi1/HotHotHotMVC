<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');

session_start();

if(isset($_POST['formconnexion'])) {
    $mailconnect = htmlspecialchars($_POST['mailconnect']);
    $mdpconnect = $_POST['mdpconnect'];
    if(!empty($mailconnect) AND !empty($mdpconnect)) {
        $requsers = $bdd->prepare("SELECT mdp FROM membres WHERE mail = ?");
        $requsers->execute(array($mailconnect));
        $mdpuser = $requsers->fetch();
        if(password_verify($mdpconnect, $mdpuser['mdp'])) {
            $requser = $bdd->prepare("SELECT * FROM membres WHERE mail = ? AND mdp = ?");
            $requser->execute(array($mailconnect, $mdpuser['mdp']));
            $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['pseudo'] = $userinfo['pseudo'];
            $_SESSION['mail'] = $userinfo['mail'];
            $_SESSION['dateco'] = $userinfo['dateco'];
            $update = $bdd->prepare("UPDATE membres SET dateco = ? WHERE id = ?");
            $update->execute(array('NOW()', $_SESSION['id']));
            header("Location: profil");
        } else {
            $erreur = "Mauvais mail ou mot de passe !";
        }
    } else {
        $erreur = "Tous les champs doivent être complétés !";
    }
}
?>
