<?php
require_once("connect.php");
session_start();

if (isset($_POST['enregistrer'])) {
    $ID_barrage = $_POST['ID_barrage'];
    $Code_barrage = $_POST['Code_barrage'];
    $Dig = $_POST['Dig'];
    $Etat = $_POST['Etat'];
    $Capacité = $_POST['Capacité'];
    $Latitude = $_POST['Latitude'];
    $Langitude = $_POST['Langitude'];
    $Disignation = $_POST['Disignation'];
    $Adresse = $_POST['Adresse'];
    $Hauteur = $_POST['Hauteur'];
    $Longeur = $_POST['Longeur'];
    $Superficie = $_POST['Superficie'];
    $Profondeur_Max = $_POST['Profondeur_Max'];
    $Profndeur_Moyenne = $_POST['Profndeur_Moyenne'];
    $Région_Hydraulique = $_POST['Région_Hydraulique'];
    $Surface_BV = $_POST['Surface_BV'];
    $Cote_PHE = $_POST['Cote_PHE'];
    $Code_Commune = $_POST['Code_Commune'];
    $Capacité_Initiale = $_POST['Capacité_Initiale'];

    if (!empty($ID_barrage) && !empty($Code_barrage) && !empty($Dig) && !empty($Etat) && !empty($Capacité) && !empty($Latitude) && !empty($Langitude) && !empty($Disignation) && !empty($Adresse) && !empty($Hauteur) && !empty($Longeur) && !empty($Superficie) && !empty($Profondeur_Max) && !empty($Profndeur_Moyenne) && !empty($Région_Hydraulique) && !empty($Surface_BV) && !empty($Cote_PHE) && !empty($Code_Commune) && !empty($Capacité_Initiale)) {
        if (strlen($ID_barrage) <= 3) {
            echo "L'ID doit avoir au plus 3 caractères.";
        } else {
            $req = $con->prepare("INSERT INTO barrages(ID_barrage, Code_barrage, Dig, Etat, Capacité, Latitude, Langitude, Disignation, Adresse, Hauteur, Longeur, Superficie, Profondeur_Max, Profndeur_Moyenne, Région_Hydraulique, Surface_BV, Cote_PHE, Code_Commune, Capacité_Initiale) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
            $req->bind_param("sssssssssssssssssss", $ID_barrage, $Code_barrage, $Dig, $Etat, $Capacité, $Latitude, $Langitude, $Disignation, $Adresse, $Hauteur, $Longeur, $Superficie, $Profondeur_Max, $Profndeur_Moyenne, $Région_Hydraulique, $Surface_BV, $Cote_PHE, $Code_Commune, $Capacité_Initiale);
            $req->execute();
            echo "OK";
        }
    } else {
        echo "Veuillez remplir tous les champs pour ajouter un barrage.";
    }
}
?>
