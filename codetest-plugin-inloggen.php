<?php
/**

 * @package CodeTestPlugin

*/

/*
Plugin Name: Codetest Plugin
Plugin URI: https://codetest.nl/plugin
Description: Mijn eerste poging om een wordpress plugin te maken.
Version: 1.0.0
Author: Ismaïl Imaankaf
Author URI: https://codetest.nl
License: GPLv2
Text-Domain: codetest-plugin
*/

$error = "";
if (isset($_POST['submit'])) {
    if (!empty($_POST['password']) && !empty($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user = "admin";
    $pass = "admin";
    if ($username == $user && $password == $pass) {
        session_start();
        $_SESSION['ingelogd'] = true;
        header("Location: codetest-plugin-ingelogd.php");
    }
} else {
    $error = "<br>Username & password zijn verplicht<br>";
}
}

?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="language" content="NL">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Energy">
    <meta name="author" content="Ismaïl Imaankaf">
    <meta name="keywords" content="Stage, Avantage, Code, Test">
    <link rel="stylesheet" href="code-test-plugin-inloggen.scss">
    <title>CodeTest Avantage</title>
</head>
<body>
<section class="een">
        <div class="koptekst">
            <h1>Codetest Avantage</h1>
        </div>
        <div class="inloggen">
            <h2>Inloggen</h2>
            <form method="POST" class="formulier">
            <?php echo $error; ?>
            <br>
            <label>Gebruikersnaam:</label>
            <br>
            <input type="text" name="username" placeholder="Vul in admin" class="voorinput">
            <br>
            <label>Wachtwoord:</label>
            <br>
            <input type="password" name="password" placeholder="Vul in admin" class="voorinput">
            <br>
            <br>
            <input type="submit" name="submit" value="Log in"/>
            </form>
            
        </div>
    </section>
    
</body>
</html> 