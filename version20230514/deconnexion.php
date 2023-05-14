<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Espace client...</title>
	<meta charset="UTF-8" />
	<title> Accueil - HexNode </title>
	<link rel="stylesheet" type="text/css" href="monstyle2.css" />

</head>
<body>
<?php
     include("header.html");
?>

		<h2>
			Bonjour, <?php echo $_COOKIE["email"]; ?>. <br />
		</h2>
		
		<h3>
		Collecte de vos données personnelles:
		</h3>
		
		<div style="text-align:center">
		
		Adresse mail: <?php echo $_COOKIE["email"]; ?><br />
		Nationalité: <?php echo $_COOKIE["natio"]; ?><br />
        Prénom: <?php echo $_COOKIE["prenom"]; ?> <br />
		
		
		</div>
		

<form action="" method="GET" > 
	<input type="submit" name="deconnecter" value="Deconnexion"/>
</form>
		<?php if(isset($_GET['deconnecter'])) {unset($_SESSION['email']);header('location: index.php');} ?>
		
		
<?php include("footer.html"); 
?>
		
		
</body>
</html>