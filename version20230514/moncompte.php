<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8" />
	<title> Mon compte - Profil </title>
	<link rel="stylesheet" type="text/css" href="monstyle2.css" />

</head>
<body>
<?php
     include("header.html");
?>

		<h2>
			Bonjour, <?php echo $_COOKIE["email"]; ?> <br />
		</h2>
		
		<h3>
		Collecte de vos données personnelles:
		</h3>
		
		<div align= "center">
		
		Adresse mail: <?php echo $_COOKIE["email"]; ?><br />
		Prénom:<?php echo $_COOKIE["prenom"]; ?><br />
		
		
		
		</div>
		
		
		
		

<form action="" method="POST" > 
	<input type="submit" name="deconnecter" value="Se déconnecter"/>
</form>
		<?php if(isset($_POST['deconnecter'])) {unset($_SESSION['email']);header('location: index.php');} ?>
		
		
<?php include("footer.html"); 
?>
		
		
</body>
</html>