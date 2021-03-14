<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');

if(isset($_POST['forminscription'])) {
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mail = htmlspecialchars($_POST['mail']);
    $mail2 = htmlspecialchars($_POST['mail2']);
    $mdp = $_POST['mdp'];
    $mdp2 = $_POST['mdp2'];
    if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {
        $pseudolength = strlen($pseudo);
        if($pseudolength <= 255) {
            if($mail == $mail2) {
                if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                    $reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
                    $reqmail->execute(array($mail));
                    $mailexist = $reqmail->rowCount();
                    if($mailexist == 0) {
                        if($mdp == $mdp2) {
                            $insertmbr = $bdd->prepare("INSERT INTO membres(pseudo, mail, mdp) VALUES(?, ?, ?)");
                            $insertmbr->execute(array($pseudo, $mail, password_hash($_POST['mdp'], PASSWORD_DEFAULT)));
                            header("Location: /");
                            $sujet = 'Bienvenue sur HotHotHot';
                            $entetes = 'MIME-Version: 1.0\n';
                            $entetes .= 'From : remi.rguerin@gmail.com'."\n";
                            $entetes .= 'Reply-to : ne pas répondre, merci'."\n";
                            $entetes .= 'X-Priority : 1'."\n";
                            $entetes .= 'Content-type: text/html; charset="utf-8"'."\n";
                            $entetes .= 'Content-Transfer-Encoding: 8bit';
                            $message = '<h1> Bienvenue sur HotHotHot </h1> 
                                            <p> Nous sommes ravis de vous avoir parmis nous !!!!                                          
                                            </p>';

                            mail($mail, $sujet, $message, $entetes);
                        } else {
                            $erreur = "Vos mots de passes ne correspondent pas !";
                        }
                    } else {
                        $erreur = "Adresse mail déjà utilisée !";
                    }
                } else {
                    $erreur = "Votre adresse mail n'est pas valide !";
                }
            } else {
                $erreur = "Vos adresses mail ne correspondent pas !";
            }
        } else {
            $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
        }
    } else {
        $erreur = "Tous les champs doivent être complétés !";
    }
}
?>