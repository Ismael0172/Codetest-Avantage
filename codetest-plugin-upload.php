<?php
if(isset($_POST["Import"]))
{
$host="localhost"; // Host name.
$db_user="root";
$db_password="";
$db='test'; // Database name.
$conn=mysql_connect($host,$db_user,$db_password) or die (mysql_error());
mysql_select_db($db) or die (mysql_error());

echo $filename=$_FILES["file"]["tmp_name"];
//echo $ext=substr($filename,strrpos($filename,"."),(strlen($filename)-strrpos($filename,".")));


 if($_FILES["file"]["size"] > 0)
 {

  $file = fopen($filename, "r");
         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
         {
            print_r($emapData);
            $sql = "INSERT into import(name,address,email,password) values('$emapData[0]','$emapData[1]')";
            mysql_query($sql);
         }
         fclose($file);
         echo "CSV File has been successfully Imported";
 }
 else
 echo "Invalid File:Please Upload CSV File";

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
    <link rel="stylesheet" href="codetest-plugin-upload.scss">
    <title>CodeTest Avantage</title>
</head>
<body>
</body>
</html>