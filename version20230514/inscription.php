<?php
	if (isset($_POST["lenom"])) {
		setcookie("email",$_POST["email3"],time()+60*5000,"/","",0);
		setcookie("passe",$_POST["mp"],time()+60*5000,"/","",0);
		setcookie("prenom",$_POST["leprenom"],time()+60*5000,"/","",0);
		setcookie("adresse",$_POST["rue"],time()+60*5000,"/","",0);
		setcookie("nume",$_POST["num"],time()+60*5000,"/","",0);
		$_COOKIE["email"]=$_POST["email3"];
		$_COOKIE["passe"]=$_POST["mp"];
		$_COOKIE["prenom"]=$_POST["leprenom"];
		$_COOKIE["adresse"]=$_POST["rue"];
		$_COOKIE["nume"]=$_POST["num"];
		
		
	}
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
	
	 <h1>  Inscription... </h1>
	
		<h3>
			Informations personnelles  <br /> <br />
  
        </h3> 
<div align='center'>	
	<form action="connecter.php" method="POST" name="forminscription">
		<table class="formdeco"> 
		
			<tr> 
				<td width="150"> Nom </td>
									
				<td>	
					<input type="text" name="lenom" required />
				</td>
									
				<td> Prénom </td>
									
				<td> 
					<input type="text" name="leprenom" required />  
				</td>
			</tr> 
			
			<tr>
				<td> Date de naissance </td>
					
				<td> 
					<input type="date" name="naissance" required /> 	
				</td>
			
				<td> Téléphone </td>
				
				<td> 
					<select name="lemenu">
						<option value="bel" selected="selected" > BE:+32 </option> 
						<option value="fran" > FR:+33 </option> 
						<option value="lux" > LU:+352 </option> 
						<option value="neerl" > NL:+31 </option> 
						<option value="alle" > DE:+49 </option> 	 
					</select>
						<input type="text" name="numero" />
				</td>
			</tr>
			
			<tr>
				<td> Email </td>	
					
				<td>	
					<input type="text" name="email3" required />
				</td> 
				
				<td> Mot de passe </td>
					
				<td>
					<input type="password" name="mp" required />	
				</td>							
			</tr>
			
			<tr> 
				<td> Rue </td>
					
				<td> 
					<input type="text" name="rue" required />
				</td> 
				
				<td> Numéro </td>
						
				<td> 
					<input type="text" name="num" required />
				</td>
            </tr>
			
			<tr>
				<td> Code postal </td>
					
				<td> 
					<input type="text" name="postal" required /> 
				</td>
              
				<td> Ville </td>
					
				<td> 
					<input type="text" name="ville" required /> 
				</td>
			</tr>

			<tr> 
				<td colspan="5" >
					<input type="submit" value="M'inscrire" name="inscri" />
				</td> 
			
			</tr>
			

		</table>
			
			
	
	</form> 
</div>	
	
	
	
<?php
	include("footer.html");
 ?>


</body>
</html> 