<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Transport </title>
        <link rel='stylesheet' href='transport.css'>
    
    </head>
	
	<body>
	
	<h1>Venez acheter un ticket </h1><br><br>
	
	
	<form action="facture.php" method="POST"  >
	<table width="100%" height="100%"><tr><td colspan='3'><input type="text" id="name" name="name" placeholder="Entrer votre Nom" required>
			<input type="text" id="prenom" name="prenom" placeholder="Entrer votre Prénom" required><br><br><br><br><br></td></tr>
	<tr><th>transport</th><th>prix unitaire</th><th>quantité</th></tr>
	<tr><td name="metro">metro</td><td>	15$	</td><td class='Q'><input type='text' name='q1' value='0'/></td></tr>
	<tr><td name="tram">tram</td><td>	30$	</td><td class='Q'><input type='text' name='q2' value='0'/></td></tr>
	<tr><td name="rer">rer</td><td>	24$	</td><td class='Q'><input type='text' name='q3' value='0'/></td></tr>
	<tr><td name="velo">velo</td><td>	4$	</td><td class='Q'><input type='text' name='q4' value='0'/></td></tr>
	<tr><td name="trotinette">trotinette</td><td>	7$	</td><td class='Q'><input type='text' name='q5' value='0'/></td></tr>
	<tr><td colspan='3'><br><br><br><input type="submit" value="acheter" action="facture.php" method="POST"></td></tr>
	
	</table>
	
	
		
</form>



	</body>
	
</html>