<?php

//Beveiliging
session_start();
if($_SESSION['ingelogd'] != true){
    header("Location: codetest-plugin-ingelogd.php");
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
    <link rel="stylesheet" href="codetest-plugin-ingelogd.scss">
    <title>CodeTest Avantage</title>
</head>
<body>
    <section class="twee">
        <div class="bestand">
            <h1>Upload hieronder<br>jouw bestand</h1>
            <div class="upload">
                <form action="codetest-plugin-upload.php" method="post" enctype="multipart/form-data">
                <input type="file" name="file">
                <input type="submit" name="submit" value="Upload uw bestand"/>
                </form>
            </div>
        </div>
        <div class="uitloggen">
        <a href="codetest-plugin-inloggen.php">Uitloggen</a>
        </div>
    </section>
</body>
</html>