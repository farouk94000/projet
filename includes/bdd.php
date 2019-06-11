
<?php 
   try{ 
      $connexion=new PDO("mysql:host=localhost;dbname=foodexplore","root","");
		array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND 
				=> 'SET NAMES utf8');	  
   } 
   catch(PDOException $e){ 
      echo 'Echec de la connexion:'.$e->getMessage(); 
   } 
?>