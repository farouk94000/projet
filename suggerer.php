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

							@$nom=htmlspecialchars($_POST["nom"]);
							@$adresse=htmlspecialchars($_POST["adresse"]);
							@$category=htmlspecialchars($_POST["category"]);
							@$img=htmlspecialchars($_POST["img"]);
							@$submit=$_POST["submit"];


							$erreur="";



							if (isset($submit))
							{

								include("includes/bdd.php");
								
								$ins=$connexion->prepare("INSERT INTO restaurant(nom,adresse,category,img) VALUES (?,?,?,?)" ); 						
								$ins->execute(array($nom,$adresse,$category,$img));
					
							}
							

					?>	

					<div id="formbox">
							<h2>Suggérez-nous un restaurant</h2>
									<div class="presentation">				
										<p>Food Explore ce n'est pas un simple annuaire de restaurants, nous comptons sur l'expérience de chaque <i>FoodExplorers</i> pour faire découvrir à la communauté de nouvelles adresses afin de toujours être à la page !</p>
										<p>Votre restaurant préféré n'est pas encore référencé sur notre site ? Vous venez de découvrir LA bonne adresse qui va faire parler d'elle !</p>
										<p>Pas de problème! On se fie à votre flair et votre bon goût, suggérez-nous une nouvelle adresse et après vérification elle sera disponnible dans un délai maximum de 24h ! </p>
									</div>				
			
			
							<form method="POST" action="" >
			
								
									<legend><strong>Informations :</strong></legend>
					
										<p><label for="nom">Nom :</label><br/><input type="text" name="nom" id="nom" class="form-control" maxlength="25" placeholder="(obligatoire)" required/></p>
					
										<p><label for="adress">Adresse :</label><br/><input type="text" name="adresse" id="adresse" class="form-control" maxlength="50" placeholder="(obligatoire)" required/></p>

										<p><label for="category">Catégorie :</label><br/><input type="text" name="category" id="category" class="form-control" maxlength="50" placeholder="(obligatoire)" required/></p>					
					
										<p>	<label><strong>Photo ( URL jpeg ou png) :</strong></label>
										<input type="url" name="img" placeholder="(facultatif)" /><br />
										</p>
											
			
								<button type="submit" name="submit" class="btn">Soumettre</button>
			
							</form> 
			
				</div>		
		
					<?php
						}
							else
							{
					?>	
							<h1 class="defaultmessage"> Vous devez vous connecter ou être <a href="inscription.php" >inscrit</a> pour suggérer une adresse </h1> 
					<?php
							}	
					?>

				<?php include("includes/footer.php") ?>			
</body>

</html>	