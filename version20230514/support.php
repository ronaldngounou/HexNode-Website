<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title> Accueil - HexNode </title>
	<link rel="stylesheet" type="text/css" href="monstyle2.css" />
</head>
<body>

<?php 
	include ('header.html');
?>

<div class="container-form">
	<h1 id='title-form' >Contactez un expert...</h1>
					Nos experts en disque dur sont là pour vous aider à trouver la bonne solution pour vos défis en matière de données
					Si vous avez besoin d'une assistance technique, visitez notre site d'assistance pour soumettre un cas ou accéder aux outils et à la documentation, aux communautés et à notre vaste base de connaissances techniques. <br /></center>
					
				<div align='center'>
					<form class= "formdeco" name='formulairecontact' action='http://s203908.php2.hec.ulg.ac.be/projetinfo/merci.php' method='GET'>

					Objet de la demande: <br />
					<select name="inquiryPurpose" required >
						<option value> Objet de la demande </option>
						<option value="For Resale"> Revente de produits et services </option>
						<option value="For Client"> Trouver une solution pour le client </option>
						<option value="For Own Company"> Acheter pour usage par ma propre entreprise </option>
						<option value="Support"> Support </option>
					</select>
					<br /><br />

						Nom*: <br />
							<input type="text" placeholder="Nom*" name="Nom" data-required="true" data-error="Entrez votre nom svp." value required>
							<br /><br />
							
						Prénom*: <br />
						<input type="text" placeholder="Prenom*" name="Prenom" data-required="true" data-error="Entrez votre prenom svp." value required>
							<br /><br />
						
						Email*: <br />
						<input type="text" placeholder="Adresse Email Entreprise*" name="email1" required>
						<br /><br />

						Pays: 
						<select name='pays' size='1'>
							<option value='Belgique'>Belgique</option>
							<option value='France'>France</option>
							<option value='Pays-Bas'>Pays-Bas</option>
						</select>
						<br /><br />

						Position: <br />
						<select name="busrole" required>
							<option value>Quelle est votre position?</option>
							<option value="Business Owner">Proprietaire d'entreprise</option>
							<option value="System Administrator">Admninistrateur de systeme</option>
							<option value="System Integrator">Integrateur de systeme</option>
							<option value="Chef Projet">Chef de projet</option>
							<option value="Acheteur">Acheter</option>
							<option value="Sales and Marketing">Vente et Marketing</option>
						</select>
						<br /><br />
						
						Telephone: <br />
						<input type="text" placeholder="Telephone*" name="phone" required="">
						<br /><br />

						Estimation Période d'Achat* <br />
						<select name="tempsachat">
							<option value>Estimation Période d'Achat*</option>
							<option value="Ce mois">Ce mois</option>
							<option value="Dans les 3 prochains mois">Dans les 3 prochains mois</option>
							<option value="3 Mois et plus">3 Mois et plus</option>
							<option value="Pas d'intention d'achat">Pas d'intention d'achat</option>
						</select>
						<br /><br />

						Informations additionnelles/Commentaires:
						<textarea name='infosup' rows='4' cols='40' class='textarea' placeholder='Elaborez plus concernant votre requete.'></textarea>
						<br /><br />
							
						<input type='checkbox' name='conditions' value='checked' required /> 
						J'ai lu et j'accepte les Conditions d'utilisations*
						<br /><br />
						
						<input type='submit' value='Envoyer' />  &nbsp;
						<input type='reset' value='Réinitialiser' />  
					</form>
				</div>	

</div>
	



<?php
	include ('footer.html');
 ?>

</body>
</html>
