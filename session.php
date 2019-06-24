<?php require("includes/header2.php") ?>
<?php require("includes/up.php")?>

<!DOCTYPE html>
<html>


			<head>
				<title>Food Explore</title>
				<link  href="css/stylefoodx.css" rel="stylesheet"   type="text/css" />
				<link  href="css/stylemodal.css" rel="stylesheet"   type="text/css" />
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
				<meta http="Content-Type" content="text/html;" charset="utf-8"/>
				<meta name="viewport" content="width=device-width, initial-scale=1">
			
			</head>
<body>			




<div class="welcome">
	<p> BIENVENUE ! </p>
	<p><img src="img/foodex1.png"/></p>
	<p><?php echo @$_SESSION['login']; ?></p>
</div>
					 




<?php require("includes/footer.php") ?>

</body>

</html>	