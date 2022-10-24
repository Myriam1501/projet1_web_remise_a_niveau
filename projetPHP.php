<!-- LIU HAOYUE -->

<?php
if (isset($_POST['email'])) { // Si les contenues dans les champs en name 'newlettre' sont déclarées et sont différentes de null.

    // On connecte à la base de donnée appelée Projet grace à PHPMyadmin.
    $user = "root";
    $host = "localhost";
    $mdp = "root";
    $bdd = "reservation";
    $idcon = mysqli_connect($host, $user, $mdp, $bdd) or die("Impossible de se connecter à la base de données '$bdd' à cause de l'erreur suivant : " . $idcon->connect_error . ".");

    // Connexion de la page avec la base de données Projet, si connexion echoué affiche l'erreur

    // Ici on tuilise la fonction mysql_real_escape_string permettant protège une commande SQL de la présence de caractères spéciaux,
    // et la fonction htmlspecialchars permettant convertit les caractères spéciaux en entités HTML.

    $mail = mysqli_real_escape_string($idcon, htmlspecialchars($_POST['email']));

    function check_email_address($mail)  //Définition d'une fonction check_email_address() avec un paramètre $mail
    {
        $format_mail = preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $mail);
        //preg_match effectue une recherche de correspondance avec une expression rationnelle standard pour le format de l'email.

        if(!$format_mail)  // Si le format de l'email n'est pas correct :
        {
            return false; // il return false
        }
        else //sinon
            return true; // il return true
    }

    if ($mail !==""){ //Si $mail n'est pas vide
        $requete = "SELECT * FROM `reserve` where email = '$mail'"; // on utilise la formulaire SELECT FROM WHERE pour récupérer les données correspondant les conditions.
        $check = $idcon->query($requete); //On exécute la requête $requete
        $liste = $check->fetch_row(); //  fetch_row permet de récupérer une ligne de résultat sous forme de tableau indexé.
        $ligne = $check -> num_rows; // num_rows permet de savoir le nombre de lignes du résultat.

        if (check_email_address($mail) ==  true){  // Le format de l'email est correcte
            if ($ligne == 1){ //Si $ligne==1 alors l'inscription existe et il y a un utilisteur
                if ($liste[8] == 0){
                    $abonn = "UPDATE `reserve` SET `Abonnement`= 1 WHERE `email`='$mail' " ; //On met à jour l'abonnement de l'utilisateur dont Email=$mail
                    $idcon->query($abonn); //On exécute la requête $abonn

                    header('Location: Projet.php?abonn_erreur=succes'); //On renvoie l'utilisateur sur la page Projet.php (abonn_erreur=succes)
                }
                else header('Location: Projet.php?abonn_erreur=deja_abonne'); //On renvoie l'utilisateur sur la page Projet.php (abonn_erreur=deja_abonne)
            }
            else header('Location: Projet.php?abonn_erreur=mail_non_existant'); //On renvoie l'utilisateur sur la page Projet.php (abonn_erreur=mail_non_existant)
        }
        else header('Location: Projet.php?abonn_erreur=mail_non_valide');//On renvoie l'utilisateur sur la page Projet.php (abonn_erreur=mail_non_valide)

    }
    else header('Location: Projet.php?abonn_erreur=mail_vide');//On renvoie l'utilisateur sur la page Projet.php (abonn_erreur=mail_vide)


}
else header('Location: Projet.php'); //On renvoie l'utilisateur sur la page Projet.php
mysqli_close($idcon);
