<?php 
if(isset($_GET['category'])){
	include('bdd.php');
	$sel= $connexion->prepare("SELECT * FROM restaurant WHERE category=?"); 
    $sel->execute(array($_GET['category'])); 
    $tab=$sel->fetchAll(); 
    // var_dump($tab);
    // echo (count($tab));
    if(count($tab) == 0) {
        header('location:categories.php');
    }
}
?>