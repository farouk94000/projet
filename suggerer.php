<?php require("includes/header2.php") ?>
<?php require("includes/up.php")?>


<!DOCTYPE html>
<html>


			<head>
				<title>Suggérer un restaurant</title>
				<link  href="css/stylefoodx.css" rel="stylesheet"   type="text/css" />
				<link  href="css/stylemodal.css" rel="stylesheet"   type="text/css" />
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

				<meta http="Content-Type" content="text/html; charset="utf-8"/>
			
			</head>
<body>			
			

			

	

			
				
			
	<?php
		//test la présence d'une session active avec un utilisateur connecté
		if ( isset($_SESSION['login']) )
		{	
			//Récupération des infos qui sont sauvegardées dans des variables.
			@$nom=htmlspecialchars($_POST["nom"]);
			@$adresse=htmlspecialchars($_POST["adresse"]);
			@$category=htmlspecialchars($_POST["category"]);
			@$img=htmlspecialchars($_POST["img"]);
			@$submit=$_POST["submit"];

			$erreur="";



			if (isset($submit)) //On test les infos transmises dans le formulaire
				{
				//connexion à la base de données
				require("includes/bdd.php");
								
				//requête préparée, on envoi un exemple de requête au serveur
				$ins=$connexion->prepare("INSERT INTO restaurant(nom,adresse,category,img) VALUES (?,?,?,?)" ); 	
				//execution, le serveur récupère les valeurs entrée dans les variables du formulaire.
				$ins->execute(array($nom,$adresse,$category,$img));
				//Redirection si formulaire envoyé avec succès
				header('location:/projet/projet/submitted.php');
					
				}
							

	?>	
		<!-- On affiche le formulaire -->
	<div id="formbox">
		<h2>Suggérez-nous un restaurant</h2>

		<div class="presentation">				
			<p>Food Explore ce n'est pas un simple annuaire de restaurants, nous comptons sur l'expérience de chaque <i>FoodExplorers</i> pour faire découvrir à la communauté de nouvelles adresses afin de toujours être à la page !</p>
			<p>Votre restaurant préféré n'est pas encore référencé sur notre site ? Vous venez de découvrir LA bonne adresse qui va faire parler d'elle !</p>
			<p>Pas de problème! On se fie à votre flair et votre bon goût, suggérez-nous une nouvelle adresse et après vérification elle sera disponnible immédiatement ! </p>
		</div>				
			
			
		<form method="POST" action="" >
			
							
			<p><label for="nom">Nom de l'établissement* :</label><br/><input type="text" name="nom" id="nom" class="form-control" maxlength="25" placeholder="(obligatoire)" required/></p>
							
			<p><label for="adress">Adresse* :</label><br/><input type="text" name="adresse" id="adresse" class="form-control" maxlength="50" placeholder="(obligatoire)" required/></p>

			<p><label for="category">Catégorie* :</label><br/><input type="text" name="category" id="category" class="form-control" maxlength="50" placeholder="(obligatoire)" required/></p>					
							
			<p>	<label><strong>Photo (URL) :</strong></label>
			<input type="url" name="img" placeholder="(facultatif)" /><br />
			</p>
													
					
			<button type="submit" name="submit" class="btn">Soumettre</button>
			<p>*Champs obligatoires</p>
		</form> 
			
	</div>		
		
		<?php
			}
			else //Sinon, on affiche le message suivant:
			{
		?>	
		<h1 class="defaultmessage"> Vous devez vous connecter ou être <a href="inscription.php" >inscrit</a> pour suggérer une adresse </h1> 
	<?php
		}	
	?>

				<?php require("includes/footer.php") ?>			
</body>

</html>	