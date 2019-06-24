<?php require("includes/header2.php") ?>
<?php require("includes/up.php")?>

<!DOCTYPE html>
<html>


			<head>
				<title>Suggérer un restaurant</title>
				<link  href="css/stylefoodx.css" rel="stylesheet"   type="text/css" />
				<link  href="css/stylemodal.css" rel="stylesheet"   type="text/css" />
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
				<meta http="Content-Type" content="text/html;" charset="utf-8"/>
			
			</head>
<body>			
                        <?php                                                       
                            @$nom=htmlspecialchars($_POST["nom"]); //Récupération des infos du formulaire dans des variables
							@$adresse=htmlspecialchars($_POST["adresse"]);
							@$category=htmlspecialchars($_POST["category"]);
							@$img=htmlspecialchars($_POST["img"]);
							@$submit=$_POST["submit"];


							$erreur="";



							if (isset($submit)) //On prépare la requête pour enregistrer en base de données un restaurant.
							{

								require("includes/bdd.php");
								
								$sub=$connexion->prepare('INSERT INTO restaurant(nom,adresse,category,img) values (?,?,?,?)'); 


								$sub->execute(array($nom,$adresse,$category,$img));

											
								
							}
                        ?>  
			<?php require("includes/footer.php"); ?>
</body>
</html>                                                  