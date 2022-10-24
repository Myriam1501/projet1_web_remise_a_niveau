<?php session_start(); ?>

<?
$iduser=$_POST['iduser'];
$mdp=$_POST['mdp'];

include "BD.php";



$idcon=new mysqli($serveur, $user, $mdpp, $bd, $port);

if ( $idcon->connect_errno ){
    exit "Impossible de se connecter à la base de données à cause de l'erreur suivant : ".$idcon->connect_error."." );
}






//fonction qui vérifie si mdp et id existe dans la base
function connec($mdp, $id) {		
    $sql="SELECT `idutil`, `mdp` FROM `utilisateur` WHERE `idutil`='$id' AND `mdp`='$mdp'";
	
    $result=$GLOBALS['idcon']->query($sql);		


    /* 
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *    
    */


	header('Location:index.php');		
}  



if (empty($mdp) || empty($iduser)){
    echo "champ incomplet";			
}
else{								
    connec($mdp, $iduser);		
}


?>
