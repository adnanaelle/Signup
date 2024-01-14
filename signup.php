<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $utilisateur = $_POST["identifiant"];
    $email = $_POST["email"];
    $password = $_POST["mdp"];

   
    if (!empty($utilisateur) && !empty($email) && !empty($password)) {
      
        echo "identification reussi <br>";
        echo "Identifiant: $utilisateur <br>";
        echo "Email: $email <br>";
    } else {
        echo "Remplir tous les champs svp";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>

<h2>Signup Form</h2>

<form action="signup_process.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br>

    <input type="submit" value="Sign Up">
</form>

</body>
</html>
