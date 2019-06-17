<?php include("includes/header.php") ?>
<!DOCTYPE html>
<html>
<head>
            <meta name="viewport" content="width=device-width, initial-scale=1">

                <title>Inscription</title>
				<link  href="css/stylefoodx.css" rel="stylesheet"   type="text/css" />
				<link  href="css/stylemodal.css" rel="stylesheet"   type="text/css" />
				<meta http="Content-Type" content="text/html; charset="utf-8"/>


<style>

    /* La boite de dialogue qui apparaît lorsqu'on clique dans le champs mot de passe */
    #message {
    display:none;
    background-color:white;
    color: #000;
    position: relative;
    padding: 20px;
    margin-top: 10px;
    }

    #message p {
    padding: 10px 35px;
    font-size: 18px;
    }

    /* Texte et signe correcte en vert lorsque les caractères sont valides */
    .valid {
    color: green;
    }

    .valid:before {
    position: relative;
    left: -35px;
    content: "✔";
    }

    /* Texte et "X" en rouge lorsque les cractères ne sont pas valides */
    .invalid {
    color: red;
    }

    .invalid:before {
    position: relative;
    left: -35px;
    content: "✖";
    }
</style>
</head>

<body>

    <h1>Inscrivez-Vous</h1>
    <div id="formbox" style= " width: 40%; height: 100%;">
        <div class="container">
            <form method="post">
                <p style="font-family:Arial, Helvetica, sans-serif"><strong>Veuillez remplir tout les champs obligatoires</strong></p>
                    <hr>
                        <label for="email"><b>Email</b></label>
                                                        
                        <input type="email" placeholder="Email" name="mail" required>
                                                            
                        <label for="pseudo"><b>Pseudo</b></label>

                        <input type="text" placeholder="Pseudo" name="login" required>

                        <label for="psw">Mot de passe</label>

                        <input type="password" placeholder="Mot de passe" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Doit contenir au moins un nombre, une majuscule, une minuscule et 8 caractères" required>

                        <label for="psw-repeat"><b>Confirmez mot de passe</b></label>

                        <input type="password" placeholder="Confirmez mot de passe" name="confirm" required>
                        
                        <button type="submit" value="Valider" > Valider </button>
            </form>
        </div>
    </div>

        <div id="message">
            <h3>Le mot de passe doit contenir:</h3>
                <p id="letter" class="invalid">Une lettre en <b>minuscule</b></p>
                <p id="capital" class="invalid">Une lettre en <b>majuscule</b></p>
                <p id="number" class="invalid">Un <b>chiffre</b></p>
                <p id="length" class="invalid">Minimum <b>8 caractères</b></p>
        </div>  
				
<script> // Code Javascript:
    var myInput = document.getElementById("password");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");

    // Quand l'utilisateur clique dans le champs mot de passe, afficher la boite de dialogue
    myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
    }

    // Quand l'utilisateur clique en dehors du champs mot de passe, cacher la boite de dialogue
    myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
    }

    // Lorsque l'utilisateur commence à taper un mot de passe dans le champs
    myInput.onkeyup = function() 
    {
        // Valide les lettres minuscules
        var lowerCaseLetters = /[a-z]/g;
        if(myInput.value.match(lowerCaseLetters)) {  
            letter.classList.remove("invalid");
            letter.classList.add("valid");
        } 
        else {
            letter.classList.remove("valid");
            letter.classList.add("invalid");
            }
        
        // Valide les lettres majuscules
        var upperCaseLetters = /[A-Z]/g;
        if(myInput.value.match(upperCaseLetters)) {  
            capital.classList.remove("invalid");
            capital.classList.add("valid");
        } 
        else {
            capital.classList.remove("valid");
            capital.classList.add("invalid");
            }

        // Valide les chiffres
        var numbers = /[0-9]/g;
        if(myInput.value.match(numbers)) {  
            number.classList.remove("invalid");
            number.classList.add("valid");
        } 
        else {
            number.classList.remove("valid");
            number.classList.add("invalid");
            }
        
        // Valide la longueur
        if(myInput.value.length >= 8) {
            length.classList.remove("invalid");
            length.classList.add("valid");
            } 
        else {
            length.classList.remove("valid");
            length.classList.add("invalid");
            }
    }
</script>

</body>
</html>