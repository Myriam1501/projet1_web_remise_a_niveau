<?php session_start();  ?>


<?php
require "BD.php";

$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$mdp1 = $_POST["mdp1"];

$host='localhost';
$bdd='site';


$idcon=new mysqli('localhost','root','','site','3307');

if ( $idcon->connect_errno ) {
    exit ("Impossible de se connecter à la base de données'$bdd' à cause de l'erreur suivant : ".$idcon->connect_error."." ) ;
}


function iduser($nm,$pr){

	//création de l'indice de utilisateur
    $id=strtoupper(substr($nm,0,1)).strtolower($pr));
    
    //requete sql
    $sql="SELECT * FROM `utilisateur` WHERE (`idutil` LIKE '$id%')";
	
    //établissement de la connection
    $result=$GLOBALS['idcon']->query($sql);
	
    $ligne=$result->num_rows;
	
    if ($ligne!=0){
		$id=$id."_".$ligne;
	}



	echo $id;
	$nom=$GLOBALS["nom"];
	$prenom=$GLOBALS["prenom"];
	$mdp1=$GLOBALS["mdp1"];


	$sqll="INSERT INTO `utilisateur`(`idutil`, `nom`, `prenom`,`mdp``) VALUES ('$id', '$nom', '$prenom', '$mdp1' )";
	
	if ($GLOBALS['idcon']->query($sqll)){
		echo "nouveau enregistrement";
		header('Location: index.html');
	}
	else{
		echo "erreur";
	}
}

iduser($nom,$prenom);

?>