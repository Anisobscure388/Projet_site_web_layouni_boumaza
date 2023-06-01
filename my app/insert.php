<?php 
include "cnx.php";

if(isset($_GET["ID"]) && isset($_GET["Psuedo"]) && isset($_GET["Mail"]))

{
$ID=$_GET["ID"];
$Psuedo=$_GET["Psuedo"];
$Mail=$_GET["Mail"];

$req= mysqli_query($link,"insert into user(ID,Psuedo,Mail) values ('$ID','$Psuedo','$Mail')");

if($req)
{

    echo "insertion effectuée";
}
else
{

    echo "erreur d'insertion";
}
}

?>

