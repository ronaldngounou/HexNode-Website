
<!DOCTYPE html>
<html>
<head> 
	<meta charset="UTF-8">
	<link rel="icon" type="image/png" href="icon.png">
	<title>Truffes - Le Palais du Chocolat </title>
	<link rel="stylesheet" href="styles.css">

</head>
<body>

	<header><h1>Le Palais du Chocolat</h1></header>
	<center><ul class="ulmenu">
		<li class="limenu">
			<a class="amenu" href="index.php" target="_top">Accueil</a>
		</li>
		
		<li class="limenu">
			<a class="amenu" href="coffrets.php" target="_top">Coffrets</a>
		</li>
		
		<li class="limenu">
			<a class="amenu" href="truffes.php" target="_top">Truffes</a>
		</li>
				
		<li class="limenu">
			<a class="amenu" href="panier.php" target="_top">Panier</a>
		</li>
		
		<li class="limenu">
			<a class="amenu" href="compte.php" target="_top">
				S'inscrire 			</a>
		</li>
	</ul></center>
<br />

	<div class="productscontent">
		<h1 class="titlecontent"><center>Nos Truffes</center></h1>	
		
		<hr class="hrproducts"/>
		
		<p class="reduc"> <b>-10%</b> de réduction si vous achetez pour plus de 100€ !!!</p><br />
		
		<table class="tableproducts">
			<tr>
				<td><img class="truffes" src="Truffes1.jpg"  alt="Assortiment truffes"/></td>
				<td><img class="truffes" src="Truffes2.jpg"  alt="Truffes au caramel beurre-salé"/></td>
				<td><img class="truffes" src="Truffes3.jpg"  alt="Truffes nature"/></td>
			</tr>
			<tr>
				<td><b>Assortiment de Truffes</b><br />
				36 pièces<br />
				21,90€</td>
				<td><b>Truffes au caramel beurre-salé</b><br />
				18 pièces<br />
				19,90€</td>
				<td><b>Truffes nature</b><br />
				18 pièces<br />
				19,00€</td>
			</tr>	
			<tr>
				<td>
					<form name="panier" action="#" method="GET">
						Quantité : <input type=number name="qt4" min="1" max ="99" class="qty" value="1" /> <br />
						<input type="submit" class="ajouter" value="Ajouter au Panier" />
					</form>
				</td>	
				
				<td>
					<form name="panier" action="#" method="GET">
						Quantité : <input type=number name="qt5" min="1" max ="99" class="qty" value="1" /> <br />
						<input type="submit" class="ajouter" value="Ajouter au Panier" />
					</form>
				</td>	
				
				<td>
					<form name="panier" action="#" method="GET">
						Quantité : <input type=number name="qt6" min="1" max ="99" class="qty" value="1" /> <br />
						<input type="submit" class="ajouter" value="Ajouter au Panier" />
					</form>
				</td>	
			</tr>		
			<tr>
				<td>
									</td>
				<td>
									</td>
				<td>	
									</td>
			</tr>
	
		</table>	
		<br />
		<center><br /> <a href="panier.php" target="_top"> <img src="paniericon.png" class="voirpanier"/></a> </center>
	</div>


	<footer>
	<table class="footer">
		<tr>
			<td class="footerleft">
				<h4>Contactez-nous</h4>
					<img src="adresse.png" class="contact"/> 17 Rue des chocolatiers <br />
					4000 Liège <br /><br />
					<img src="phone.png" class="contact"/> (+32)401 23 45 67 <br />
					<img src="email.png" class="contact"/> lepalaisduchocolat@gmail.com
			</td>
			
			<td style="padding-left: 50px;">
				Rejoignez nous: 
					<a href="https://www.facebook.com/" target="_blank" style="text-decoration: none;">
						<img class="icon" src="facebook.png" /></a> 
					<a href="https://twitter.com/" target="_blank" style="text-decoration: none;" >
						<img class="icon" src="twitter.png" /></a>
					<a href="https://www.instagram.com/" target="_blank" style="text-decoration: none;" >
						<img class="icon" src="instagram.png" /></a>
					<br /><br />
				&copy; Copyright 2022 | Le Palais du Chocolat 
			</td>
		</tr>
	</table>	
</footer>
</body>
</html>
