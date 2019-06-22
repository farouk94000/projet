<?php 
if(isset($_GET['category'])){
    require('bdd.php');//connexion à la base

    //requête préparée, on envoi un exemple de requête au serveur 
    $sel= $connexion->prepare("SELECT * FROM restaurant WHERE category=?");
    //execution, le serveur récupère les valeures de category pour les executer 
    $sel->execute(array($_GET['category'])); 
    //Récupère tout les résultats et les place dans une variable
    $tab=$sel->fetchAll(); 
    // var_dump($tab);
    // echo (count($tab));
    if(count($tab) == 0) {//S'il y a aucun resultat retourné, le visiteur retourne sur la page
        header('location:categories.php');
    }
}
?>