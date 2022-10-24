<!-- LIU HAOYUE -->

<?php

if (isset($_POST['nom']) && isset($_POST['pn']) && isset($_POST['email']) && isset($_POST['NA'])  && isset($_POST['NE'])  && isset($_POST['DE'])) { // Si les contenues dans les champs en name 'nom', 'prenom', 'email' et 'MP' sont déclarées et sont différentes de null.

    // On connecte à la base de donnée appelée Projet grace à PHPMyadmin.
    $user = "root";
    $host = "localhost";
    $mdp = "root";
    $bdd = "reservation";
    $idcon = mysqli_connect($host, $user, $mdp, $bdd) or die("Impossible de se connecter à la base de données '$bdd' à cause de l'erreur suivant : " . $idcon->connect_error . ".");

    // Connexion de la page avec la base de données Projet, si connexion echoué affiche l'erreur

    // Ici on tuilise la fonction mysql_real_escape_string permettant protège une commande SQL de la présence de caractères spéciaux,
    // et la fonction htmlspecialchars permettant convertit les caractères spéciaux en entités HTML.

    $Nom = mysqli_real_escape_string($idcon, htmlspecialchars($_POST['nom'])); // La variable $Nom porte la contenue de champs en name 'nom'.
    $Prenom = mysqli_real_escape_string($idcon, htmlspecialchars($_POST['prenom'])); // La variable $Prenom porte la contenue de champs en name 'prenom'.
    $login = mysqli_real_escape_string($idcon, htmlspecialchars($_POST['email']));  // La variable $login porte la contenue de champs en name 'email'.
    $nombreA = mysqli_real_escape_string($idcon, htmlspecialchars($_POST['NA']));  // La variable $nombreA porte la contenue de champs en name 'NA'.
    $nombreE = mysqli_real_escape_string($idcon, htmlspecialchars($_POST['NE']));
    $date = mysqli_real_escape_string($idcon, htmlspecialchars($_POST['DE']));//

    function check_email_address($login) //Définition d'une fonction check_email_address() avec un paramètre $login
    {
        $format_mail = preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $login);
        //preg_match effectue une recherche de correspondance avec une expression rationnelle standard pour le format de l'email.

        if (!$format_mail) // Si le format de l'email n'est pas correct :
        {
            return false; // il return false
        } else // sinon
            return true; // il return true
    }

    $requete = "SELECT * FROM `reserve` where email = '$login' "; // on utilise la formulaire SELECT FROM WHERE pour récupérer les données correspondant les conditions.
    $check = $idcon->query($requete); //On exécute la requête $sql
    #$liste = mysqli_fetch_array($check);
    $ligne = $check->num_rows; // num_rows permet de savoir le nombre de lignes du résultat.

    if ($ligne == 0) { // Si ce login non existe dans la base de donnee

        if (strlen($Nom) <= 50 && strlen($Prenom) <= 50) { // Si la longueur de nom et prenom sont correctes

            if (strlen($login) <= 50) { // Si la longueur de login c'est-à-dire email est correcte

                if (check_email_address($login) == true) { // Le format de l'email est correcte

                    $sql = " INSERT INTO `reserve`(`id`, `nom`, `prénom`, `email`, `nombre_Adult`, `nombre_Enfant`, `date`) VALUES (\N,'$Nom','$Prenom','$login','$nombreA','$nombreE','$date')";
                    // On insert les informations de cet utilisateur dans notre base de donnée.
                    $idcon->query($sql);

                    header('Location: reserver.php'); //On renvoie l'utilisateur sur la page reserver.php.

                } else header('Location: reserver.php?Ins_erreur=email'); //On renvoie l'utilisateur sur la page reserver.php (Ins_erreur=email)
            } else header('Location: reserver.php?Ins_erreur=email_length'); //On renvoie l'utilisateur sur la page reserver.php(Ins_erreur=email_length)
        } else header('Location: reserver.php?Ins_erreur=nom_prenom_length'); //On renvoie l'utilisateur sur la page reserver.php (Ins_erreur=nom_prenom_length)

    } else header('Location: reserver.php?Ins_erreur=existant'); //On renvoie l'utilisateur sur la page reserver.php (Ins_erreur=existant)
}
mysqli_close($idcon);

?>
