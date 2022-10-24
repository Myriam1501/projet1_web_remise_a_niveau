<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="site.css">
        <title> Monuments </title>
    </head>
    <body style = "background-color: #94BDCE">
    <table width="100%">
        <tr><td>
    <div>
        <h1 class="position"><i>Découverte des monuments à Paris</i></h1>
        <br>
    </div>
    <div>
        <h3><i> Nous savons que Paris est une grande ville européenne et un centre mondial de l'art, de la mode, de la gastronomie et de la culture.Les monuments à Paris sont nombreux et sont à découvrir de par leur histoire et leur beauté.  Découvrons ainsi les principaux monuments que nous présente cette capitale de la France,.</i></h3>
    </div>
    </td><td>
        <p class = "image"><img src="télécharger.png" height="327" width="218"></p>
    </td>
    </tr>
</table>
    <form method="post" action="site.php">
        <div>
            <label for="nom"> Nom: </label><br>
            <input type="text" id="nom" name="nom">
        </div>
        <div>
            <br><label for="prenom"> Prenom: </label><br>
            <input type="text" id="prenom" name="prenom">
        </div>
        <div>
            <br><label for="email"> Email: </label><br>
            <input type="text" id="email" name="email">
        </div>
        <div>
            <br><label for="monum"> Quel monument voulez-vous visiter ?</label><br>
            <select name="monum" id="monum">
                <option value="eiffel"> Tour Eiffel</option>
                <option value="louvre"> Musée du Louvre</option>
                <option value="cathedrale"> Cathédrale Notre-Dame de Paris</option>
                <option value="arc"> Arc de Triomphe</option>
            </select>
        </div>
            <h3><i> Réservez votre place: </i></h3>
            <div>
                <label for="date"> Date: </label><br>
                <input type="text" id="date" name="date">
            </div>
            <div>
                <br><label for="heure"> Heure: </label><br>
                <select name="heure" id="heure">
                    <option value="huit"> 8:00 </option><br>
                    <option value="neuf"> 9:00</option><br>
                    <option value="dix"> 10:00</option><br>
                    <option value="onze"> 11:00</option><br>
                    <option value="douze"> 12:00</option><br>
                    <option value="quatorze"> 14:00</option><br>
                    <option value="quinze"> 15:00</option><br>
                    <option value="seize"> 16:00</option><br>
                    <option value="dixsept"> 17:00</option><br>
                    <option value="dixhuit"> 18:00</option><br>
                    <option value="dixneuf"> 19:00</option><br>
                </select><br>
            </div>
            <div class="button">
                <br><button type="submit" id="reserver" action="site.php" name="reserver">Réserver</button>
            </div>
    </form><br><br>
    </body>
</html>
<?php

if(isset($_POST['reserver'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];

    if(!empty($nom) && !empty($prenom) && !empty($email)){
        echo "Bonjour ".$prenom." ".$nom.", "."<br>";
        echo "Nous vous envoyons une confirmation de votre réservation sur votre mail ".$email."<br>";
    }
}

$host='localhost';
$base='site';

$connex=new mysqli('localhost','root','site','3308');
 if ( $connex->connect_errno ) {
 exit ("Pas de connexion à cette base de données: '$base' à cause de l'erreur suivant : ".$connex->connect_error."." ) ;
 };
 $sql="INSERT INTO 'reservation'('nom', 'prenom', 'email','date','heure') VALUES ('$nom', '$prenom', '$email', '$date', '$heure')";
?>