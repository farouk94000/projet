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
/* Style all input fields */
input {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}

/* Style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
}

/* Style the container for inputs */
.container {
  background-color: #FCBB04;
  padding: 20px;
}

.submit {
    background-color: black;
    color: #FCBB04;
}

/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background:#FCBB04;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
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

<div class="container">
  <form action="/action_page.php">
  <p><strong>Veuillez remplir tout les champs obligatoires</strong></p>
	<hr>
		<label for="email"><b>Email</b></label>
										
		<input type="email" placeholder="Email" name="mail" required>
											
		<label for="pseudo"><b>Pseudo</b></label>

        <input type="text" placeholder="Pseudo" name="login" required>

        <label for="psw">Mot de passe</label>

        <input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
        
        <button type="submit" value="Valider" > Valider </button>
  </form>
</div>

<div id="message">
  <h3>Le mot de passe doit contenir:</h3>
  <p id="letter" class="invalid">Une lettre en <b>minuscule</b></p>
  <p id="capital" class="invalid">Une lettre en <b>majuscule</b></p>
  <p id="number" class="invalid">Un <b>chiffre</b></p>
  <p id="length" class="invalid">Minimum <b>8 caractères</b></p>
</div>
				
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

</body>
</html>