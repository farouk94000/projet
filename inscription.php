 <!DOCTYPE html>
<html>


			<head>
				<title>Inscription</title>
				<link  href="css/stylefoodx.css" rel="stylesheet"   type="text/css" />
				<link  href="css/stylemodal.css" rel="stylesheet"   type="text/css" />
				<meta http="Content-Type" content="text/html; charset="utf-8"/>
			
			</head>
			
			
			
	
	<body>

					<?php include("includes/header.php") ?>



<form method="post" class="modal-content"  >
				<div class="container">
					<h1>Inscription</h1>
						<p><strong>Veuillez remplir tout les champs obligatoires</strong></p>
							<hr>
								<label for="email"><b>Email</b></label>
									<input type="email" placeholder="Email" name="mail" required>
									
								<label for="pseudo"><b>Pseudo</b></label>
									<input type="text" placeholder="Pseudo" name="login" required>

								<label for="psw"><b>Mot de passe</b></label>
									<input type="password" placeholder="Mot de passe" name="password" required>

								<label for="psw-repeat"><b>Confirmez mot de passe</b></label>
									<input type="password" placeholder="Confirmez mot de passe" name="confirm" required>
      
								<label>
									<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Se rappeler de moi
								</label>

							<p>En s'inscrivant sur notre site vous déclarez accepter les <a href="#" style="color:blue">Termes & Conditions d'utilisation</a>.</p>

						<div class="clearfix">
							
                            <button type="submit" name="inscrip" class="signupbtn">S'inscrire</button>
                            
						</div>
				</div>
			</form>


            <?php include("includes/footer.php") ?>


</body>
</html>            