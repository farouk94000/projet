<?php
session_start();
@$pseudo=htmlspecialchars($_POST["pseudo"]);
@$psw=htmlspecialchars($_POST["psw"]);
@$connect=$_POST["connect"];


$wrong="";



if (isset($connect))
{
	include("bdd.php");
	$sel=$connexion->prepare("SELECT pass FROM users WHERE login=?");
	$sel->execute(array($pseudo)); 
	$tab=$sel->fetchAll();
	// var_dump($tab);
	if(password_verify($psw,$tab[0]["pass"])){
		$_SESSION['login'] = $pseudo;
		header('location:../projet/session.php');
	}

	else {
		$wrong="Erreur mot de passe";
	}
}
?>
			
	<header>
	
		<div class="conteneur_logo">
		
			<div class="logo"> 
			<a href="foodexplore.php"><img src="img/foodex1.png" alt="logo"/></a>
			</div> 	

		</div>	

		<span class="login">

			<script>
				function apparitionLog(){
					document.getElementById("id02").style.display="block";
				}

			</script>

			<?php
					
                    if(@$_SESSION['login']){

						echo'
								<span class="dropdown">
									<button class="dropbtn"><img src="icon/user1.png" alt="Avatar">
									</button>
									<span class="dropdown-content">
										<a href="decon.php">Se déconnecter</a>
									</span>
								</span>
							';

					}
					
					else{

                       echo "<button onclick='apparitionLog()' style='width:auto;'>Se connecter</button>";
                        
					}
					

					
            ?>
				<span style="color:red"><?php echo $wrong; ?> </span>
				
		</span>
			
	
	<div id="id02" class="modal">
		<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>

			<form method="post" class="modal-content" >
				<div class="container">
								<h1>Connexion</h1>

								<label for="pseudo"><b>Pseudo</b></label>
									<input type="text" placeholder="Votre pseudo" name="pseudo" required>

								<label for="psw"><b>Mot de passe</b></label>
									<input type="password" placeholder="Votre mot de passe" name="psw" required>								
      
								<div class="clearfix">
									<button type="submit" name="connect">Se connecter</button>									
								</div>

								<hr>
									<p>Vous n'avez pas de compte chez nous ? <a href="inscription.php" style="font-weight:bolder">Inscrivez vous !</p></a>
									
								
				</div>
			</form>
	</div>

	<script>
		// Get the modal
			var modal = document.getElementById('id02');

			// When the user clicks anywhere outside of the modal, close it
				window.onclick = function(event) 
				{
					if (event.target == modal) 
					{
					modal.style.display = "none";
					}
				}
	</script>

		
		
		<nav id="menu"> 	
			<ul id="menu_horizontal">
				
				<li><a href="foodexplore.php"> <img src="icon/home.png" class="home" height="30px" alt="home"/></a></li>
				
				<li><a href="categories.php" class="button">QUI SOMME-NOUS ?</a></li>
				
				<li><a href="categories.php" class="button">CATÉGORIES</a></li>

				<li><a href="tops.php" class="button">TOPS</a></li>
					
				<li><a href="suggerer.php" class="button">SUGGÉRER ADRESSE</a></li>
				
				<li><a href="contact.php" class="button">CONTACT</a></li>

				<?php if(!@$_SESSION['login']){ ?>	
				<li><a href="inscription.php" class="button">S'INSCRIRE</a></li>
				<?php }	?>
			
			
			</ul>
		</nav>

	</header>