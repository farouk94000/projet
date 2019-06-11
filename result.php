<?php include("includes/header.php") ?>
<?php include("includes/verif.php") ?>

<!DOCTYPE html>
<html>


			<head>
				<title><?php echo $_GET['category'] ?></title>
				<link  href="css/stylefoodx.css" rel="stylesheet"   type="text/css" />
				<link  href="css/stylemodal.css" rel="stylesheet"   type="text/css" />
				<meta http="Content-Type" content="text/html; charset="utf-8"/>
			
			</head>
			
<body>			
	

			

	
	
			
	
	<div id="box">

			<?php 
			 for($i =0 ; $i < count($tab); $i++) {
				echo '<div class="gallery">
				
				<img src="'. $tab[$i]['img'].'" alt="img" width="500" height="200">
				<div class="desc"> 
				   <h2>'. $tab[$i]['nom'] .'</h2>
				   
					<p>'. $tab[$i]['adresse'].'</p> 
				</div>
			</div><br>';
			 }		
			 ?>
	</div>			
			
			
			
	
			<?php include("includes/footer.php") ?>

	
	</body>	
</html>