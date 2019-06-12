<?php include("includes/header.php") ?>
<!DOCTYPE html>
<html>


			<head>
			
				<title>Contact</title>
				<link  href="css/stylefoodx.css" rel="stylesheet"   type="text/css" />
				<link  href="css/stylemodal.css" rel="stylesheet"   type="text/css" />
				<meta http="Content-Type" content="text/html; charset="utf-8"/>
			
			</head>
			
<body>			
			
			
	
	
	
	
			<div id="formbox" style= " width: 40%; height: 100%;">
	
				<h2>Contactez-Nous</h2>
	 
					<form method="post" action="">
	
						<p>
							<label for="cat">Vous êtes :</label><br/>
							<select  name="cat" id="cat" class="form-control" >
								
								<option value disabled selected>Vous êtes...</option> 
								<option value="media">Un média</option>
								<option value="particulier">Un particulier</option>
								<option value="restaurateur">Un restaurateur</option>
		   
							</select>
						</p>
						
						<p><label for="nom">Nom :</label><br/><input type="text" name="nom" id="nom" class="form-control" maxlength="25" placeholder="Votre nom (obligatoire)" required/></p>
	
						<p><label for="prenom">Prénom :</label><br/><input type="text" name="prenom" id="prenom" class="form-control" maxlength="25" placeholder="Votre prénom (obligatoire)" required/></p>
	
						<p><label for="mail">Email :</label><br/><input type="email" name="mail" id="mail" class="form-control"  maxlength="30" placeholder="Votre e-mail (obligatoire)" required/></p>
	
						<p><label for="message">Votre message :</label><br/><textarea name="message" id="message" class="form-control" placeholder="Votre message"></textarea></p>
		
						<button type="submit" class="btn">Envoyer</button>	
	
					</form> 
	
			</div>	
	
	
	
			<?php include("includes/footer.php") ?>

			

	
</body>	
</html>	