<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title> Accueil - HexNode </title>
	<link rel="stylesheet" type="text/css" href="monstyle2.css" />
</head>
<body>

<?php
	include("header.html"); 
 ?> 
	<h1>
		<center> Panier d'achats...  </center>
	</h1>
	<section>
	
		<?php
			
			
			// vider totalement le panier
			if(isset($_GET["vider"])){
				$_SESSION["blue"] = 0;
				$_SESSION["red"] = 0;
				$_SESSION["black"] = 0;
				$_SESSION["bluessd"] = 0;
				$_SESSION["redssd"] = 0;
				$_SESSION["blackssd"] = 0;
				
			}

			

			// reduire un a un les quantités dans le panier
			if(isset($_GET["dimblu"])){
						$_SESSION["blue"] = $_SESSION["blue"] - 1;
						}
			if(isset($_GET["dimred"])){
						$_SESSION["red"] = $_SESSION["red"] - 1;
					
						}
			if(isset($_GET["dimbla"])){
						$_SESSION["black"] = $_SESSION["black"] - 1;
						}
						
						
			if(isset($_GET["dimblussd"])){
						$_SESSION["bluessd"] = $_SESSION["bluessd"] - 1;
						}
			if(isset($_GET["dimredssd"])){
						$_SESSION["redssd"] = $_SESSION["redssd"] - 1;
					
						}
			if(isset($_GET["dimblassd"])){
						$_SESSION["blackssd"] = $_SESSION["blackssd"] - 1;
						}
						
						
						
						
			// Augmenter un a un les quantités dans le panier
			if(isset($_GET["augblu"])){
						$_SESSION["blue"] = $_SESSION["blue"] + 1;
						}
			if(isset($_GET["augred"])){
						$_SESSION["red"] = $_SESSION["red"] + 1;
					
						}
			if(isset($_GET["augbla"])){
						$_SESSION["black"] = $_SESSION["black"] + 1;
						}
						
			if(isset($_GET["augblussd"])){
						$_SESSION["bluessd"] = $_SESSION["bluessd"] + 1;
						}
			if(isset($_GET["augredssd"])){
						$_SESSION["redssd"] = $_SESSION["redssd"] + 1;
					
						}
			if(isset($_GET["augblassd"])){
						$_SESSION["blackssd"] = $_SESSION["blackssd"] + 1;
						}
						
						
						
			//Si aucun produit dans le panier alors tout est egale à 0 
			if(!isset($_SESSION["blue"])) {$_SESSION["blue"] = 0;}
			if(!isset($_SESSION["red"])) {$_SESSION["red"] = 0;}
			if(!isset($_SESSION["black"])) {$_SESSION["black"] = 0;}
			
			if(!isset($_SESSION["bluessd"])) {$_SESSION["bluessd"] = 0;}
			if(!isset($_SESSION["redssd"])) {$_SESSION["redssd"] = 0;}
			if(!isset($_SESSION["blackssd"])) {$_SESSION["blackssd"] = 0;}	
			
			

			// Affichage des produits en panier
			if(($_SESSION["black"]>0) || ($_SESSION["red"]>0) || ($_SESSION["blue"]>0 || $_SESSION["blackssd"]>0) || ($_SESSION["redssd"]>0) || ($_SESSION["bluessd"]>0 )){ 
				$prixblu=97.99;
				$prixred=69.99;
				$prixbla=149.99;
				$prixblussd=99.99;
				$prixredssd=57.99;
				$prixblassd=119.99;
				
				echo "<table style='border: 7px solid; padding: 100px; width: 95%; margin: 50px'>";
					echo "<tr>
							<td> <b> Référence </b> </td> <td> </td> <br />
							<td> <b>  Quantité  </b> </td> <td> </td><br />
							<td> <b> Prix </b> </td> <td> </td> <br /> 
							<td> <b> Prix Total </b> </td> <td> </td> <br /> 
						</tr>";

						if($_SESSION["blue"]>=1){
							
							echo"<tr height='20px'> </tr>";
							echo "<tr> <td>
								<img src='b.jpg' width='50px' /> <br /> Blue Sky </td>";
							echo "<td> </td> <td><form action='' method='GET' name='dimblu'><input type='submit' value='-' name='dimblu'/></form>" .$_SESSION["blue"]." <form action='' method='GET' name='augblu'><input type='submit' value='+' name='augblu'/></form> </td>";
							echo "<td> </td> <td>€97,99</td>";
							echo "<td> </td>";
							$_SESSION["quantblu"] = $prixblu * $_SESSION["blue"];
							echo "<td>€".$_SESSION["quantblu"]."</td></tr>";
						}
						else{
							$_SESSION["quantblu"] = 0;
						}

						if($_SESSION["red"]>=1){
							echo "<tr> <td>
								<img src='r.jpg' width='50px' /> <br /> Red Vault </td>";
							echo "<td> </td> <td><form action='' method='GET' name='dimred'><input type='submit' value='-' name='dimred'/></form>".$_SESSION["red"]." <form action='' method='GET' name='augred'><input type='submit' value='+' name='augred'/></form> </td>";
							echo "<td> </td> <td>€69,99</td>";
							
							echo "<td> </td>";
							$_SESSION["quantred"] = $prixred * $_SESSION["red"];
							echo "<td>€".$_SESSION["quantred"]."</td></tr>";
						}
						else{
							$_SESSION["quantred"] = 0;
						}

						if($_SESSION["black"]>=1){
							echo "<tr> <td>
								<img src='n.jpg' width='50px' /> <br /> Black Wave </td>";					
							echo "<td> </td> <td><form action='' method='GET' name='dimbla'><input type='submit' value='-' name='dimbla'/></form>" .$_SESSION["black"]." <form action='' method='GET' name='augbla'><input type='submit' value='+' name='augbla'/></form> </td>";
							echo "<td> </td> <td>€149,99</td>";
							
							echo "<td> </td>";
							$_SESSION["quantbla"] = $prixbla * $_SESSION["black"];
							echo "<td>€".$_SESSION["quantbla"]."</td></tr>";
						}
						else{
							$_SESSION["quantbla"] = 0;
							
						}
						
						
						
						if($_SESSION["bluessd"]>=1){
							
							echo"<tr height='20px'> </tr>";
							echo "<tr> <td>
								<img src='bssd.jpg' width='50px' /> <br /> Blue Boost </td>";
							echo "<td> </td> <td><form action='' method='GET' name='dimblussd'><input type='submit' value='-' name='dimblussd'/></form>" .$_SESSION["bluessd"]." <form action='' method='GET' name='augblussd'><input type='submit' value='+' name='augblussd'/></form> </td>";
							echo "<td> </td> <td>€99,99</td>";
							echo "<td> </td>";
							$_SESSION["quantblussd"] = $prixblussd * $_SESSION["bluessd"];
							echo "<td>€".$_SESSION["quantblussd"]."</td></tr>";
						}
						else{
							$_SESSION["quantblussd"] = 0;
						}

						if($_SESSION["redssd"]>=1){
							echo "<tr> <td>
								<img src='rssd.jpg' width='50px' /> <br /> Red Horizon </td>";
							echo "<td> </td> <td><form action='' method='GET' name='dimredssd'><input type='submit' value='-' name='dimredssd'/></form>".$_SESSION["redssd"]." <form action='' method='GET' name='augredssd'><input type='submit' value='+' name='augredssd'/></form> </td>";
							echo "<td> </td> <td>€57,99</td>";
							
							echo "<td> </td>";
							$_SESSION["quantredssd"] = $prixredssd * $_SESSION["redssd"];
							echo "<td>€".$_SESSION["quantredssd"]."</td></tr>";
						}
						else{
							$_SESSION["quantredssd"] = 0;
						}

						if($_SESSION["blackssd"]>=1){
							echo "<tr> <td>
								<img src='nssd.jpg' width='50px' /> <br /> Black Solid </td>";					
							echo "<td> </td> <td><form action='' method='GET' name='dimblassd'><input type='submit' value='-' name='dimblassd'/></form>" .$_SESSION["blackssd"]." <form action='' method='GET' name='augblassd'><input type='submit' value='+' name='augblassd'/></form> </td>";
							echo "<td> </td> <td>€119,99</td>";
							
							echo "<td> </td>";
							$_SESSION["quantblassd"] = $prixbla * $_SESSION["blackssd"];
							echo "<td>€".$_SESSION["quantblassd"]."</td></tr>";
						}
						else{
							$_SESSION["quantblassd"] = 0;
						}
						
						

					$_SESSION["quanttot"] = $_SESSION["quantblu"] + $_SESSION["quantred"] + $_SESSION["quantbla"] +  $_SESSION["quantblussd"] + $_SESSION["quantredssd"] + $_SESSION["quantblassd"] + 2.99; 
					echo"<tr height='10px'></tr> <tr></tr> ";
					echo "<tr><td>Livraison:</td> <td></td> <td></td> <td></td> <td></td> <td></td> <td><strong>2.99</strong></td></tr>";
					echo "<tr><td><strong>TOTAL</strong></td>";
					echo "<td></td> <td></td> <td></td> <td></td> <td></td> <td><strong>€".$_SESSION["quanttot"]."</strong></td> </tr>";
					

			
				    echo "</table>";
				
				
					echo"<form action='' method='GET'>";
					echo"<input type='submit' value='Vider le panier' name='vider' colspan='3'/><br/>";
					echo"</form>";
					
			}
			else {
				echo" Votre panier ne comporte aucun n'article <br />
						<img src='empty.png' />" ;
			}
			
		


		?>
		
		
		

	</section>
	
	
	
<?php 
	//vider le panier
	if(isset($_GET["vider"])){
		
	}
?>




<?php
	include("footer.html");
?>


</body>
</html>