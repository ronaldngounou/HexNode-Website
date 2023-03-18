
<!DOCTYPE html>
<html>
<head> 
	<meta charset="UTF-8">
	<link rel="icon" type="image/png" href="icon.png">
	<title>Mon Panier - Le Palais du Chocolat </title>
	<link rel="stylesheet" href="styles.css">
	
	<style>
		p.panier, form.panier, .bouton {
			text-align: center;
		}
		
		td.panier {
			border: 1px solid grey;
			padding: 10px;
		}
		
		table.panier, td.panier {
			border-collapse: collapse;
		}
		
		.titres {
			font-weight: bold;
			text-align: center;
			background-color: #af847d;
		}
		
		.colonne1 {
			border: 0;
			border-collapse: collapse;
			padding: 10px;
		}
		
		.colonne5 {
			widht: 50em;
		}
		
		input.bouton {
			border: 1px solid grey;
			background-color: white;
		}
		input.bouton:hover {
			cursor: pointer;
			border: 1px solid black;
		}
		
		.vider {
			background-color: white;
			padding: 7px;
			color: black;
			border-radius: 5%;
			font-size: 70%;
			border: 0.7px solid black;
		}
		
		.vider:hover {
			background-color: black;
			color: white;
			cursor:pointer;
		}		
		
	</style>
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
		<h1 class="titlecontent"><center>Panier d'achats</center></h1>
		
		<hr class="hrproducts" />
		
	
	<center><h4>Le panier est vide...
				<br />Vous pouvez ajouter des articles via les différentes pages produits. </h4>
				<img src='emptycart.png' width='35%' /></center>			<!--bouton payal !-->
			<div id="smart-button-container">
			  <div style="text-align: center;">
				<div id="paypal-button-container"></div>
			  </div>
			</div>
		  <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=EUR" data-sdk-integration-source="button-factory"></script>
		  <script>
			function initPayPalButton() {
			  paypal.Buttons({
				style: {
				  shape: 'rect',
				  color: 'gold',
				  layout: 'horizontal',
				  label: 'paypal',
				  
				},

				createOrder: function(data, actions) {
				  return actions.order.create({
					purchase_units: [{"amount":{"currency_code":"EUR","value": <br />
<b>Notice</b>:  Undefined variable: total in <b>/var/web/s201585/public_html/projet/panier.php</b> on line <b>429</b><br />
}}]
				  });
				},

				onApprove: function(data, actions) {
				  return actions.order.capture().then(function(orderData) {
					
					// Full available details
					console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

					// Show a success message within this page, e.g.
					const element = document.getElementById('paypal-button-container');
					element.innerHTML = '';
					element.innerHTML = '<h3>Thank you for your payment.</h3>';

					window.location.replace('remerciement.php');
					
				  });
				},

				onError: function(err) {
				  console.log(err);
				}
			  }).render('#paypal-button-container');
			}
			initPayPalButton();
		  </script>
		  

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