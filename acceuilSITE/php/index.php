<?php sessionstart(); ?>



<?php
require "../BD.php";

$idcon=new mysqli($serveur,$user,$mdpp,$bd,$port); 
 if ( $idcon->connect_errno ) {	
 exit ("Impossible de se connecter à la base de données à cause de l'erreur suivant : ".$idcon->connect_error."." ) ;
 };

$id=$_SESSION['id'];	

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Acceuil | Guide de Paris </title>
    <link rel='stylesheet' href='css/home.css'>

</head>



<body>
    <nav>
        <h1>Guide de Paris...</h1>  
        
        <?php
			$nom=$_SESSION['nom'];
			$prenom=$_SESSION['prenom'];
			$id=$_SESSION['id'];
			
		echo "<h2 style='color:black'>$nom $prenom</h2>";
        ?>

        <div class="naviguation">
            <a href="index.html">Acceuil</a>
            <a href="connexion.html">Connection</a>
            <a href="inscription.html">S'inscrire</a>
        </div>
    </nav>

    <header>
    </header>




<div class="corps">
    <section class="box">
        <h2>Bienvenue à Paris</h2>

    </section>
    <section class="box">
        <h2>Comment bien préparer son séjour à Paris</h2>
    </section>
    <section class="box">
        <h2>Faire connaissance avec les saveurs de Paris (à deux ou en famille)</h2>
    </section>
</div>

</body>
</html>