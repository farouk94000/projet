<!DOCTYPE html>
<html>
<body>

			<head>
				<title>Suggérer un restaurant</title>
				<link  href="stylefoodx.css" rel="stylesheet"   type="text/css" />
				<meta http="Content-Type" content="text/html; charset="utf-8"/>
			
			</head>
			
			
	<header>   
			<div class="logo"> <a href="framework.html"><img src="foodex1.png" alt="logo"/></a> </div>
			<div class="lang"><img src="icon/france.png" alt="france"/></div>

		<nav id="menu"> 
		
			<ul id="menu_horizontal">
				
				<li>
				<a href="framework.html"> <img src="icon/home.png" height="30px" alt="home"/></a>
				</li>
				
				<li><a href="categories.html" class="button">CATÉGORIES</a></li>
					
				<li><a href="#" class="button">MES FAVORIS</a></li>
					
				<li><a href="#" class="button">TOPS</a></li>
					
				<li><a href="#" class="button">SUGGÉRER ADRESSE</a></li>
				
				<li><a href="#" class="button">CONTACT</a></li>
			
			
			</ul>
		</nav>
		

	</header>
	
	<div id="formbox" style= " width: 40%; height: 650px;">
	
						<h2>Suggérez-nous un restaurant</h2>
						
						
	 
		<form method="post" action="">
	
	<fieldset>
		<legend>Informations :</legend>
	
		<p><input type="text" name="nom" id="nom" class="form-control" maxlength="25" placeholder="Nom (obligatoire)" required/></p>
	
		<p><input type="text" name="adress" id="adress" class="form-control" maxlength="50" placeholder="Adresse (obligatoire)" required/></p>
	
		<p><input type="tel" name="tel" id="tel" class="form-control" maxlength="10" placeholder="Numéro (facultatif)"/></p>
	
		<p><input type="url" name="site" id="site" class="form-control"  maxlength="40" placeholder="Site internet (facultatif)"/></p>
		
	</fieldset>
	
	<fieldset>
	
		<legend>Catégorie :</legend>
	
		<p>

		<input type="checkbox" name="fastfood" id="fastfood" /> <label for="fastfood">Fast-Food</label><br />
	 
		<input type="checkbox" name="steak" id="steak" /> <label for="steak">Grill/SteakHouse</label><br />
	   
		<input type="checkbox" name="gastro" id="gastro" /> <label for="gastro">Gastronomie Française</label><br />
	   
		<input type="checkbox" name="fish" id="fish" /> <label for="fish">Poisson/Fruits de mer</label><br/>
	
		<input type="checkbox" name="jap" id="jap" /> <label for="jap">Japonais</label><br/>
	
		<input type="checkbox" name="chinois" id="chinois" /> <label for="chinois">Chinois</label><br/>
	
		<input type="checkbox" name="thai" id="thai" /> <label for="thai">Thaïlandais</label><br/>
	
		<input type="checkbox" name="burger" id="burger" /> <label for="burger">Burger Gourmet</label><br/>
	
		<input type="checkbox" name="turc" id="turc" /> <label for="turc">Turc</label><br/>
	
		<input type="checkbox" name="italien" id="italien" /> <label for="italien">Italien</label><br/>
	
		<input type="checkbox" name="viet" id="viet" /> <label for="viet">Vietnamien</label><br/>
	
		<input type="checkbox" name="maghreb" id="maghreb" /> <label for="maghreb">Maghreb</label><br/>
	
		<input type="checkbox" name="liban" id="liban" /> <label for="liban">Libanais</label><br/>
	
		<input type="checkbox" name="mexico" id="mexico" /> <label for="mexico">Mexicain</label><br/>
	
		<input type="checkbox" name="crepe" id="crepe" /> <label for="crepe">Crêpes</label><br/>
	
		<input type="checkbox" name="patisserie" id="patisserie" /> <label for="patisserie">Pâtisserie</label><br/>
	
		<input type="checkbox" name="coffe" id="coffe" /> <label for="coffe">Coffe Shop</label><br/>
	
		<input type="checkbox" name="indien" id="indien" /> <label for="indien">Indien/Pakistanais</label><br/>
		
		<input type="checkbox" name="africain" id="africain" /> <label for="africain">Africain</label><br/>
	
		<input type="checkbox" name="caraib" id="caraib" /> <label for="caraib">Caraïbes</label><br/>
	
		<input type="checkbox" name="veget" id="veget" /> <label for="veget">Végétarien</label><br/>
	
		<input type="checkbox" name="grec" id="grec" /> <label for="grec">Grec</label><br/>
		
		</p>
	</fieldset>
	
	<fieldset>
	    <legend>Critères :</legend>
	<input type="checkbox" name="liv" id="liv" /> <label for="liv">Livraison</label><br/>
	<input type="checkbox" name="emport" id="emport" /> <label for="emport">Emporter</label><br/>
	<input type="checkbox" name="hor" id="hor" /> <label for="hor">Horaires tardives</label><br/>
	<input type="checkbox" name="budg" id="budg" /> <label for="budg">Petit Budget</label><br/>
	<input type="checkbox" name="resa" id="resa" /> <label for="resa">Sans réservation</label><br/>
	<input type="checkbox" name="fam" id="fam" /> <label for="fam">Familial</label><br/>
	</fieldset>
	
	
	<p><textarea name="message" id="message" class="form-control" placeholder="Votre message"></textarea></p>
	
	<p><input type="submit" class="btn" value="Soumettre"/></p>	
	
	</form> 
	
</div>	
	
	
	
	
	<footer>
		
		
		<div class="conteneur_footer">
		
				<div class="logofooter">
				<img src="foodex1.png" alt="logo" style="width:50%"/>
				</div>
		
				<div class="footer_menu">
						<h4>À PROPOS DE NOUS<h4>
							<a href="#"><h5>QUI SOMMES-NOUS ?<h5></a>
							<a href="#"><h5>CONTACT<h5></a>
							<a href="#"><h5>MENTIONS LÉGALES<h5></a>
							<a href="#"><h5>AIDE-FAQ<h5></a>
						
				</div>
				
				<div class="footer_menu2">
							<a href="categories.html#"><h5>CATÉGORIES<h5></a>
							<a href="#"><h5>SUGGÉRER UN RESTAURANT<h5></a>
							<a href="#"><h5>TOP ADRESSE<h5></a>
				
				</div>
				
		
		
				<div class="reseaux">
					<h4>NOUS SUIVRE:<h4>
						<a href="#">	<img src="icon/facebook.png"/></a>
						<a href="#">	<img src="icon/instagram.png"/></a>
						<a href="#">	<img src="icon/twitter.png"/></a>
				</div>
		
		</div>


	</footer>
	
	
</body>

</html>	