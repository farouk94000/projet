<?php require("includes/header.php") ?>
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
                            @$nom=htmlspecialchars($_POST["nom"]);
							@$adresse=htmlspecialchars($_POST["adresse"]);
							@$category=htmlspecialchars($_POST["category"]);
							@$img=htmlspecialchars($_POST["img"]);
							@$submit=$_POST["submit"];


							$erreur="";



							if (isset($submit))
							{

								require("includes/bdd.php");
								
								$sub=$connexion->prepare('INSERT INTO restaurant(nom,adresse,category,img) values (?,?,?,?)'); 


								$sub->execute(array($nom,$adresse,$category,$img));

								echo' <h3 style="color:red;">Votre suggestion est bien transmise !</h3>';			
								
							}
                        ?>  
			<?php require("includes/footer.php"); ?>
</body>
</html>                                                  