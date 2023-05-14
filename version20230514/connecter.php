<?php 
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title> Identifie-toi / Inscris-toi </title>
	<link rel="stylesheet" type="text/css" href="monstyle2.css" />
</head> 
<body>

<?php 
	include("header.html");
?>
	
	<h1> Connecte-toi ou crée ton compte... </h1>
 
	<center> 
	
		<form action="" method="POST">
			<table>
					
				<tr> 
					<td> E-mail </td> 					
					
					<td>	
						<input type="text" placeholder="Email" name="email2" />
					</td> 
				</tr> 
				  
				<tr> 
					<td> Mot de passe </td> 
					
					<td> 
						<input type="password" placeholder="Mot de passe" name="mp1" /> 
					</td>
				</tr>
				 
				<tr> 
                    <td colspan="3">
                         <input type="submit"  value="Se connecter"/> 
                    </td>
                </tr>
				 	 
				
			</table> 
				
		</form> 
	</center> 
	
	
<!-- <i> Tu n'as pas de compte ? <a href="http://s203908.php2.hec.ulg.ac.be/projetinfo/inscription.php"> Inscris-toi  </a> </i> <br /> <br /> -->
<i> Tu n'as pas de compte ? <a href="inscription.php"> Inscris-toi  </a> </i> <br /> <br />
	
	
<?php
		if (isset($_POST["email2"])) {
		if (isset($_COOKIE["email"])) {
			if ($_COOKIE["email"]==$_POST["email2"] and $_COOKIE["passe"]== $_POST["mp1"]){
				//  $_SESSION{"email"}=$_COOKIE["email"];
				$_SESSION["email"]=$_COOKIE["email"];
			header("location: moncompte.php");
			}
		else 
			echo " La combinaison 'e-mail' et 'mot de passe' ne correspond à aucun compte de HexNode <br />";
		 
		}
		else 
			echo"Vous ne possédez pas de compte?  Ne tardez plus !!! <br /> " ;
		}
?>
	

	
	
<?php
	include("footer.html"); 
 ?>
	
	

</body>
</html>