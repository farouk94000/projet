<?php include("includes/header.php") ?>
<!DOCTYPE html>
<html>


			<head>
				<title>Suggérer un restaurant</title>
				<link  href="css/stylefoodx.css" rel="stylesheet"   type="text/css" />
				<link  href="css/stylemodal.css" rel="stylesheet"   type="text/css" />
				<meta http="Content-Type" content="text/html; charset="utf-8"/>
			
			</head>
<body>			
			
			
			

	<?php

	if ( isset($_SESSION['login']) )
	{

		@$name=htmlspecialchars($_POST["nom"]);
		@$adress=htmlspecialchars($_POST["adress"]);
		@$category=htmlspecialchars($_POST["category"]);
		@$photo=htmlspecialchars($_POST["photo"]);
		@$submit=$_POST["submit"];


		$erreur="";



		if (isset($submit))
		{

			include("includes/bdd.php");
			
			$sub=$connexion->prepare('INSERT INTO restaurant(nom,adresse,category,img) values (?,?,?,?)'); 


			$sub->execute(array($name,$adress,$category,$photo));

			echo'Votre suggestion est bien transmise !';			
			
		}

		?>

			
				<div id="formbox" style= " width: 40%; height: 100%;">
			
								<h2>Suggérez-nous un restaurant</h2>
						<div class="presentation">				
							<p>Food Explore ce n'est pas un simple annuaire de restaurants, nous comptons sur l'expérience de chaque <i>FoodExplorers</i> pour faire découvrir à la communauté de nouvelles adresses afin de toujours être à la page !</p>
							<p>Votre restaurant préféré n'est pas encore référencé sur notre site ? Vous venez de découvrir LA bonne adresse qui va faire parler d'elle !</p>
							<p>Pas de problème! On se fie à votre flair et votre bon goût, suggérez-nous une nouvelle adresse et après vérification elle sera disponnible dans un délai maximum de 24h ! </p>
						</div>				
			
			
					<form method="POST" action="" enctype="multipart/form-data" >
			
						<fieldset>
							<legend><strong>Informations :</strong></legend>
			
								<p><label for="nom">Nom :</label><br/><input type="text" name="nom" id="nom" class="form-control" maxlength="25" placeholder="(obligatoire)" required/></p>
			
								<p><label for="adress">Adresse :</label><br/><input type="text" name="adress" id="adress" class="form-control" maxlength="50" placeholder="(obligatoire)" required/></p>

								<p><label for="category">Catégorie :</label><br/><input type="text" name="category" id="category" class="form-control" maxlength="50" placeholder="(obligatoire)" required/></p>
						
				
						</fieldset>
			
						
						<fieldset>
									<legend><strong>Photo ( URL jpeg ou png) :</strong></legend>
								<p>
									<input type="url" name="photo" placeholder="(facultatif)" /><br />
								</p>
						</fieldset>				
			
								<p><input type="submit" class="btn" name="submit" value="Soumettre"/></p>	
			
					</form> 
			
				</div>	
		
		
		
				<?php include("includes/footer.php") ?>
	
	<?php
	}
	else
	{
	?>	
				<h1 class="defaultmessage"> Vous devez vous connecter ou être <a href="inscription.php" style="font-weight:bolder, font-size:40px">inscrit</a> pour suggérer une adresse </h1> 
	<?php
	}
	?>


</body>

</html>	