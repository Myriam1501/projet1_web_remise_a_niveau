<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="nourriture.css">
        <script type="text/javascript" src="js/java1.js"></script>
    </head>
       <body>
        
        <div class="formulaire2">
                <h1>Formulaire de réservation</h1>
                <p>Pour tout problème ou question n'hésitez pas à nous conctacter par téléphone au 0936488523, par nbpersonne ou sur nos réseaux sociaux, se trouvant en bas de page.</p>
                <form name="form" action="pseudo()" method="post">
                    <div>
                        <h2>Votre demande a bien été prise en compte</h2></div>
            
            
      <?php

      $db = mysqli_connect("localhost", "root", "root" , "formulaire")
      or die('could not connect to database');
   

    
    if(isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['telephone'])AND isset($_POST['adresse']) AND isset($_POST['codepostal']) AND isset($_POST['reservation']) AND isset($_POST['nbpersonne']) AND isset($_POST['mail']) AND isset($_POST['demande']))
    {

        if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['telephone'])AND !empty($_POST['adresse']) AND !empty($_POST['codepostal']) AND !empty($_POST['reservation']) AND !empty($_POST['nbpersonne']) AND !empty($_POST['mail']) AND !empty($_POST['demande']))
        {

        $nom=htmlspecialchars($_POST['nom']);
        $prenom=htmlspecialchars($_POST['prenom']);
        $telephone=htmlspecialchars($_POST['telephone']);
        $adresse=htmlspecialchars($_POST['adresse']);
        $codepostal=htmlspecialchars($_POST['codepostal']);
        $reservation=htmlspecialchars($_POST['reservation']);
        $nbpersonne=htmlspecialchars($_POST['nbpersonne']);
        $mail=htmlspecialchars($_POST['mail']);
        $demande=htmlspecialchars($_POST['demande']);

function pseudo($nom, $prenom){
        
    
        $idcon=new mysqli ($GLOBALS['localhost'], $GLOBALS['root'], $GLOBALS['root'], $GLOBALS['formulaire']);

        $user_pseudo=$nom.$prenom[1].substr($prenom, 2);
        $user_pseudo=strtolower("$user_pseudo");
        $idcon->close();
        return $user_pseudo;
    }

    $pseudo= pseudo($nom, $prenom);

    $query="SELECT COUNT(`pseudo`) FROM `reservation` WHERE `pseudo` LIKE '$pseudo%'";


    
$result=mysqli_query($db,$query);

foreach ($result as $key => $value) {
    foreach ($value as $key => $v){ 

        if($v !=0){
           
            $pseudo = $pseudo."-".$v;
                }
            }
        }                               
}}


    /*********************************************************INSERT INTO******************************************************/


$query="SELECT COUNT(`pseudo`) FROM `reservation` WHERE `pseudo` = '$pseudo'";


$result=mysqli_query($db,$query);

foreach ($result as $key => $value) {
    foreach ($value as $key => $v){ 

        if($v==0){
            echo "la réservation au nom ".$nom." ".$prenom." a été ajouté à la table avec le pseudo ".$pseudo;

            $sql="INSERT INTO `reservation`(`telephone`, `mail`, `pseudo`, `nom`, `prenom`, `adresse`, `codepostal`, `nbpersonne`, `reservation`, `demande`) VALUES ('$telephone','$mail','$pseudo','$nom', '$prenom','$adresse','$codepostal','$nbpersonne','$reservation','$demande')";

            $idcon=mysqli_query($db,$sql);

        }

        else{
            echo "un problème est survenu.";
        }
    }
}
    ?>
</div></form>
        </body>
    </html>