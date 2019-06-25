<?php require("includes/header2.php")?>
<!DOCTYPE html>
<html>


			<head>
				<title>Inscription</title>
				<link  href="css/stylefoodx.css" rel="stylesheet"   type="text/css" />
				<link  href="css/stylemodal.css" rel="stylesheet"   type="text/css" />
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
				<meta http="Content-Type" content="text/html;" charset="utf-8" />
			
			</head>
			
	<?php	//Récupération des infos qui sont sauvegardées dans des variables.		
		@$mail=htmlspecialchars($_POST["mail"]);
		@$login=htmlspecialchars($_POST["login"]);
		@$pass=htmlspecialchars($_POST["pass"]);
		@$repass=htmlspecialchars($_POST["confirm"]);
		@$inscription=$_POST["inscrip"];			

		$erreur="";	//On défini une variable pour le message d'erreur.

		if (isset($inscription)) //On test le formulaire envoyé
		{
			//message d'erreur si les mots de pass entrés ne sont pas identiques
			if($pass!=$repass) {$erreur="Erreur: Mots de passe non identiques!";}
			
			

			else { //On test si le pseudo entré n'existe pas déja.
			
					include("includes/bdd.php"); //On appelle la connexion à la BDD
					$sel=$connexion->prepare("SELECT id FROM users WHERE login=? LIMIT 1"); 
					$sel->execute(array($login)); 
					$tab=$sel->fetchAll(); 
					
					if(count($tab)>0){ 
						$erreur="Erreur: Login existe déjà!";
					}  
					else{ //Enfin on enregistre les informations dans la table en BDD.

						$ins=$connexion->prepare("INSERT INTO users(mail,login,pass) values(?,?,?)"); 
						$ins->execute(array($mail,$login,password_hash($pass, PASSWORD_DEFAULT))); 
						//$ins->execute(array($mail,$login,$pass)); 
						if ( $ins )
						{
							header('location:../projet/registred.php');
						}
					}    
				}
		}
	?>
	<body>

					


				<div id="formbox">
					<form method="post" >
						<div class="container">
							<h1>Inscription</h1>
								<p><strong>*Veuillez remplir tout les champs obligatoires</strong></p>
								<p style="color:red;"><?php echo $erreur; ?></p>
									<hr>
										<label for="email"><b>Email*</b> </label>

											<input type="email" placeholder="Email (Obligatoire)" pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}" name="mail" required>
											
										<label for="pseudo"><b>Pseudo*</b> </label>

											<input type="text" placeholder="Pseudo (Obligatoire)" name="login" required>

										<label for="psw"><b>Mot de passe*</b> </label>

											<input type="password" placeholder="Mot de passe (Obligatoire)" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Doit contenir au moins un nombre, une majuscule, une minuscule et 8 caractères" required>

										<label for="psw-repeat"><b>Confirmez mot de passe*</b> </label>

											<input type="password" placeholder="Confirmez mot de passe (Obligatoire)" name="confirm" required>
					

										<p style="font-family: Arial, Helvetica, sans-serif;">En s'inscrivant sur notre site vous déclarez accepter les <a href="mentions.php" style="color:blue">Termes & Conditions d'utilisation</a>.</p>

										<div class="clearfix">
											
											<button type="submit" name="inscrip" class="btn">S'inscrire</button>
											
										</div>

									
					</div>
			</form>
														
</div>

<?php require("includes/footer.php") ?>



</body>
</html>            