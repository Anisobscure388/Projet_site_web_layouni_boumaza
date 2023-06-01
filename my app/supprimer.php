<?php
require_once("connect.php");
session_start();

if(isset($_POST["ID_barrage"]))
{
    $ID_barrage = $_POST["ID_barrage"];
    $query = "DELETE FROM barrages WHERE ID_barrage = $ID_barrage";
    $result = mysqli_query($con, $query);
    if($result)
    {
        header("location: affichage.php");
        exit();
    }
}
?>