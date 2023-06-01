<?php 



    $servername= "localhost";
    $username='root';
    $password='';
    $db_name='suivi des barrages';
    $con= new mysqli($servername,$username,$password ,$db_name);
    if ($con->connect_errno){
      die("Connection failed:".$con->connect_errno);
    }
?>