<?php include 'header.php';?>

<style>
		form {
		padding:20px;
		width:45%;
		text-align: left;
		margin-top: 20px;
		border: 1px solid grey;
		border-radius: 5px;
		}

		input[type=text], input[type=password] {
			padding: 5px 5px;
			border: 1px solid #dddddd;
			width: 60%;
		}
		 
		.textarea {
			resize: none;
			padding: 5px 5px;
			border: 1px solid #dddddd;
		 }	
		 
		input[type=text]:hover, input[type=password]:hover {
			border: 1px solid #393939;
		 } 
		 
		input[type=submit], input[type=reset], input[type=checkbox], input[type=radio], select {
			cursor:pointer;
		 }
		 
		 input[type=submit], input[type=reset] {
			background-color: #40f759;
			padding: 2% 10%;
			color: white;
			font-size: 102%;
			border: 0;
		 }
		 
		input[type=submit]:hover, input[type=reset]:hover {
			background-color: #58a762;
		 }
		 
		 form.connection {
			width:25%;
		 }
		 
		 input.connection {
			width:90%;
		 }
	</style>	


	
<center>
					<h1 class='titlecontent' style='font-style: normal'>Support</h1>
					<i>Nous pouvons aider votre business.</i> <br /></center>
					Nos spécialistes du stockage sont là pour vous aider à trouver la bonne solution pour vos défis en matière de données

Si vous avez besoin d'une assistance technique, visitez notre site d'assistance pour soumettre un cas ou accéder aux outils et à la documentation, aux communautés et à notre vaste base de connaissances techniques.

				<div align='center'>
					<form name='formulaire' action='form-action.php' method='GET'>
						<i>Nom*:</i> <br />
							<input type='text' name='name' placeholder='Votre Nom' required />  
							<br /><br />
							
						<i>Prénom*:</i> <br />
							<input type='text' name='firstname' placeholder='Votre Prénom' required />  
							<br /><br />
							
						<i>Nom d'utilisateur*:</i> <br />
							<input type='text' name='username' placeholder='Votre username' required />  
							<br /><br />
							
						<i>Je suis:</i> <br />
							<input type='radio' name='sexe' value='Homme' required/> 
							Un homme 
							<input type='radio' name='sexe' value='Femme' required/> 
							Une femme 
							<input type='radio' name='sexe' value='Autre' required/> 
							Autre 
						<br /><br />
						
						<i>Pays</i>: 
							<select name='pays' size='1'>
								<option value='Belgique'>Belgique</option>
								<option value='France'>France</option>
								<option value='Pays-Bas'>Pays-Bas</option>
							</select>
						<br /><br />

						<i>Adresse*:</i> <br />
							<input type='text' name='adresse' placeholder='Rue, N°, Code postal, Ville' required />  
							<br /><br />
						
						<i>E-mail*:</i> <br />
							<input type='text' name='mail' placeholder='exemple@email.com' required />  
						<br /><br />
						
						<i>Mot de passe*:</i> <br />
							<input type='password' name='password' placeholder='Votre mot de passe' required />  
						<br /><br />
						
						<i>Informations additionnelles/Commentaires:</i>
						<textarea name='infosup' rows='4' cols='60' class='textarea' placeholder='Ajouter quelque chose'></textarea>
						<br /><br />
							
							<input type='checkbox' name='conditions' value='checked' required /> 
						J'ai lu et j'accepte les <i>Conditions d'utilisation</i>*
						<br /><br />
						
						<input type='submit' value='Envoyer' />  &nbsp;
						<input type='reset' value='Réinitialiser' />  
					</form>
				</div>	





















<?php include 'footer.php';?>