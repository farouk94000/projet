<?php require("includes/header.php") ?>
<?php require("includes/verif.php") //On appelle la page qui effectue les vérifications?> 

<!DOCTYPE html>
<html>


			<head>
				<title><?php echo $_GET['category'] //On donne un titre propre à chaque catégorie appelées?></title>
				<link  href="css/stylefoodx.css" rel="stylesheet"   type="text/css" />
				<link  href="css/stylemodal.css" rel="stylesheet"   type="text/css" />
				<meta http="Content-Type" content="text/html; charset="utf-8"/>
			
			</head>
			
<body>			

	<div id="box">

		<?php //On ouvre une boucle for qui incrémente à chaque fois qu'un résulat est retourné
			for($i =0 ; $i < count($tab); $i++) 
			{ 
		?>		<!--La mise en page HTML pour afficher les résulats retournés  -->
				<div class="gallery">
					<!--Tout les résultats récupérés et placés dans la variable $tab -->
					<img src="<?php echo htmlspecialchars($tab[$i]['img']); ?>" alt="img" width="500" height="200">

					<div class="desc"> 
						<h2><?php echo htmlspecialchars($tab[$i]['nom']); ?></h2>
						
						<p><?php echo htmlspecialchars($tab[$i]['adresse']); ?></p>

					</div>
				</div> 
				<br>
		<?php } ?>		
		
	</div>			
				
			<?php require("includes/footer.php") ?>

	
</body>	
</html>