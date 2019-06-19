<?php include("includes/header.php") ?>
<!DOCTYPE html>
<html>


			<head>
				<title>Inscription</title>
				<link  href="css/stylefoodx.css" rel="stylesheet"   type="text/css" />
				<link  href="css/stylemodal.css" rel="stylesheet"   type="text/css" />
				<meta http="Content-Type" content="text/html; charset="utf-8" />
			
			</head>
			
	<?php			
		@$mail=htmlspecialchars($_POST["mail"]);
		@$login=htmlspecialchars($_POST["login"]);
		@$pass=htmlspecialchars($_POST["password"]);
		@$repass=htmlspecialchars($_POST["confirm"]);
		@$inscription=$_POST["inscrip"];			

		$erreur="";	

		if (isset($inscription))
		{
			
			if($pass!=$repass) {$erreur="Erreur: Mots de passe non identiques!";}
			
			

			else {
			
					include("includes/bdd.php"); //On appelle la connexion à la BDD
					$sel=$connexion->prepare("SELECT id FROM users WHERE login=? LIMIT 1"); 
					$sel->execute(array($login)); 
					$tab=$sel->fetchAll(); 
					
					if(count($tab)>0){ 
						$erreur="Erreur: Login existe déjà!";
					}  
					else{ 
						$ins=$connexion->prepare("INSERT INTO users(mail,login,pass) values(?,?,?)"); 
						if($ins->execute(array($mail,$login,password_hash($pass,PASSWORD_DEFAULT)))); 
						//header('location:/projet/foodexplore.php');
					}    
				}
		}
	?>

	<body>

					


				<div id="formbox" style= " width: 40%; height: 100%;">
					<form method="post" >
						<div class="container">
							<h1>Inscription</h1>
								<p style="font-family: Arial, Helvetica, sans-serif;"><strong>*Veuillez remplir tout les champs obligatoires</strong></p>
								<p style="color:red;"><?php echo $erreur; ?></p>
									<hr>
										<label for="email"><b>Email*</b> </label>

											<input type="email" placeholder="Email (Obligatoire)" pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}" name="mail" required>
											
										<label for="pseudo"><b>Pseudo*</b> </label>

											<input type="text" placeholder="Pseudo (Obligatoire)" name="login" required>

										<label for="psw"><b>Mot de passe*</b> </label>

											<input type="password" placeholder="Mot de passe (Obligatoire)" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Doit contenir au moins un nombre, une majuscule, une minuscule et 8 caractères" required>

										<label for="psw-repeat"><b>Confirmez mot de passe*</b> </label>

											<input type="password" placeholder="Confirmez mot de passe (Obligatoire)" name="confirm" required>
					

										<p style="font-family: Arial, Helvetica, sans-serif;">En s'inscrivant sur notre site vous déclarez accepter les <a href="mentions.php" style="color:blue">Termes & Conditions d'utilisation</a>.</p>

										<div class="clearfix">
											
											<button type="submit" name="inscrip" class="btn">S'inscrire</button>
											
										</div>

									
					</div>
			</form>
														
</div>

            


</body>
</html>            