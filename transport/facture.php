<?php

$nom=$_POST["name"];

$prenom=$_POST["prenom"];



$q1=$_POST['q1'];

$q2=$_POST['q2'];

$q3=$_POST['q3'];

$q4=$_POST['q4'];

$q5=$_POST['q5'];

$date = date('y-m-d h:i:s');

$arr=array();		
$i=0;	

echo "<h1>Voici votre facture</h1>";

$idcon=new mysqli('localhost','root','meryam','transport','3308');		//connexion à la base 
 if ( $idcon->connect_errno ) {		//on test si la connexion est réussi
 exit ("Impossible de se connecter à la base de données à cause de l'erreur suivant : ".$idcon->connect_error."." ) ;
 };
 

function existe($name,$prenom){
		$sql="SELECT * FROM `personne` WHERE (`nom` LIKE '$name') AND (`prenom` LIKE '$prenom') ";
		$result=$GLOBALS['idcon']->query($sql);		
		$ligne=$result->num_rows;
		if ($ligne==0){
			echo "Vous êtes nouveau ici, je viens de vous inscrire <br>";
			echo "<br>Bienvenue à vous ".$name." ".$prenom;
			insc($name,$prenom);

		}
		
		else{
			echo "HAHAHA Vous existez déjà dans la base ".$name." ".$prenom;;
		}
	
}

function insc($name,$prenom){

	$sqll="INSERT INTO `personne`(`id`, `nom`, `prenom`) VALUES (\N, '$name', '$prenom')";
	
	$GLOBALS['idcon']->query($sqll);
}

function facture($name,$prenom,$q1,$q2,$q3,$q4,$q5){
	$sql="SELECT `id` FROM `personne` WHERE (`nom` LIKE '$name') AND (`prenom` LIKE '$prenom') ";
	
	$rep=$GLOBALS['idcon']->query($sql);
	$rep->data_seek(0);
	while ($row = $rep->fetch_assoc()){
	$repp=$row['id'];
	}
	
	
	
	echo "<br><table algin='center' cellspacing='50' ><tr><th>type de transport</th><th>prix</th><th>quantité</th><th>Total prix</th></tr>";
	
	
	$total1="SELECT `prix` FROM `transport` WHERE (`type_trs` LIKE 'metro')";
	$z1=$GLOBALS['idcon']->query($total1);
	$z1->data_seek(0);
	while ($row = $z1->fetch_assoc()){
	$x1=number_format($row['prix'],2)*number_format($q1,2);
	$sql1="INSERT INTO `commande`(`qtn`, `priceTotal`, `type_trs`, `id`) VALUES ('$q1','$x1','metro','$repp')";
	echo "<tr><th>metro</th><td>".$row['prix']."</td><td>".$q1."</td><td>".$x1."</td></tr>";
	
	$GLOBALS['idcon']->query($sql1);
	}
	
	
	$total2="SELECT `prix` FROM `transport` WHERE (`type_trs` LIKE 'tram')";
	$z2=$GLOBALS['idcon']->query($total2);
	$z2->data_seek(0);
	while ($row = $z2->fetch_assoc()){
	$x2=number_format($row['prix'],2)*number_format($q2,2);
	$sql2="INSERT INTO `commande`(`qtn`, `priceTotal`, `type_trs`, `id`) VALUES ('$q2','$x2','tram','$repp')";

	echo "<tr><th>tram</th><td>".$row['prix']."</td><td>".$q2."</td><td>".$x2."</td></tr>";

	$GLOBALS['idcon']->query($sql2);
	}
	
	$total3="SELECT `prix` FROM `transport` WHERE (`type_trs` LIKE 'rer')";
	$z3=$GLOBALS['idcon']->query($total3);
	$z3->data_seek(0);
	while ($row = $z3->fetch_assoc()){
	$x3=number_format($row['prix'],2)*number_format($q3,2);
	$sql3="INSERT INTO `commande`(`qtn`, `priceTotal`, `type_trs`, `id`) VALUES ('$q3','$x3','rer','$repp')";
	echo "<tr><th>rer</th><td>".$row['prix']."</td><td>".$q3."</td><td>".$x3."</td></tr>";
	
	$GLOBALS['idcon']->query($sql3);
	}
	
	$total4="SELECT `prix` FROM `transport` WHERE (`type_trs` LIKE 'velo')";
	$z4=$GLOBALS['idcon']->query($total4);
	$z4->data_seek(0);
	while ($row = $z4->fetch_assoc()){
	$x4=number_format($row['prix'],2)*number_format($q4,2);
	$sql4="INSERT INTO `commande`(`qtn`, `priceTotal`, `type_trs`, `id`) VALUES ('$q4','$x4','velo','$repp')";
	echo "<tr><th>velo</th><td>".$row['prix']."</td><td>".$q4."</td><td>".$x4."</td></tr>";
	
	$GLOBALS['idcon']->query($sql4);
	}
	
	$total5="SELECT `prix` FROM `transport` WHERE (`type_trs` LIKE 'trotinette')";
	$z5=$GLOBALS['idcon']->query($total5);
	$z5->data_seek(0);
	while ($row = $z5->fetch_assoc()){
	$x5=number_format($row['prix'],2)*number_format($q5,2);
	$sql5="INSERT INTO `commande`(`qtn`, `priceTotal`, `type_trs`, `id`) VALUES ('$q5','$x5','trotinette','$repp')";
	echo "<tr><th>trotinette</th><td>".$row['prix']."</td><td>".$q5."</td><td>".$x5."</td></tr></table>";
	
	$GLOBALS['idcon']->query($sql5);
	}
	
	$total=$x1+$x2+$x3+$x4+$x5;
	
	echo "<br><h2>Cela vous fait un total de ".$total." $</H2>";
	
	
}

existe($nom,$prenom);
facture($nom,$prenom,$q1,$q2,$q3,$q4,$q5);
	
?>
