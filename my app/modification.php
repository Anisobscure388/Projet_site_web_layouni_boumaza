<?php
require_once("connect.php");
session_start();

if (isset($_GET["ID_barrage"])) {
    $ID_barrage = $_GET["ID_barrage"];

    // Vérifier si le formulaire de modification a été soumis
    if (isset($_POST["submit"])) {
        // Récupérer les nouvelles valeurs des champs
        $Code_barrage = $_POST["Code_barrage"];
        $Dig = $_POST["Dig"];
        $Etat = $_POST["Etat"];
        $Capacité = $_POST["Capacité"];
        $Latitude = $_POST["Latitude"];
        $Longitude = $_POST["Longitude"];
        $Designation = $_POST["Designation"];
        $Adresse = $_POST["Adresse"];
        $Hauteur = $_POST["Hauteur"];
        $Longueur = $_POST["Longueur"];
        $Superficie = $_POST["Superficie"];
        $Profondeur_Max = $_POST["Profondeur_Max"];
        $Profondeur_Moyenne = $_POST["Profondeur_Moyenne"];
        $Region_Hydraulique = $_POST["Region_Hydraulique"];
        $Surface_BV = $_POST["Surface_BV"];
        $Cote_PHE = $_POST["Cote_PHE"];
        $Code_Commune = $_POST["Code_Commune"];
        $Capacite_Initiale = $_POST["Capacite_Initiale"];

        // Effectuer la mise à jour dans la base de données
        $query = "UPDATE barrages SET Code_barrage = '$Code_barrage', Dig = '$Dig', Etat = '$Etat', Capacité = '$Capacité', Latitude = '$Latitude', Langitude = '$Longitude', Disignation = '$Designation', Adresse = '$Adresse', Hauteur = '$Hauteur', Longeur = '$Longueur', Superficie = '$Superficie', Profondeur_Max = '$Profondeur_Max', Profndeur_Moyenne = '$Profondeur_Moyenne', Région_Hydraulique = '$Region_Hydraulique', Surface_BV = '$Surface_BV', Cote_PHE = '$Cote_PHE', Code_Commune = '$Code_Commune', Capacité_Initiale = '$Capacite_Initiale' WHERE ID_barrage = '$ID_barrage'";

        $result = mysqli_query($con, $query);

        if ($result) {
            // Rediriger vers la page d'affichage après la modification
            header("Location: affichage.php");
            exit();
        } else {
            echo "Erreur lors de la mise à jour des informations du barrage : " . mysqli_error($con);
        }
    }

    // Récupérer les informations actuelles du barrage à modifier
    $query = "SELECT * FROM barrages WHERE ID_barrage = '$ID_barrage'";
    $result = mysqli_query($con, $query);
    $barrage = mysqli_fetch_assoc($result);

} else {
    echo "ID_barrage non spécifié.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ajoute.css">
    <title>Modification du barrage</title>
</head>
<body>
<div class="imgtop">
    <img src="b.jpg" alt="" width="100%" height="200">
</div>   
<div class="title"><h3 class="title"><b>Modification du barrage</b> </h3> </div>
    
    <form action="modification.php?ID_barrage=<?php echo $ID_barrage; ?>" method="POST">
        <label for="Code_barrage">Code_barrage:</label>
        <input type="text" name="Code_barrage" value="<?php echo $barrage['Code_barrage'] ?? ''; ?>"><br>

        <!-- Ajouter les autres champs de formulaire pour les autres informations du barrage -->
        <label for="Dig">Dig:</label>
        <input type="text" name="Dig" value="<?php echo $barrage['Dig'] ?? ''; ?>"><br>

        <label for="Etat">Etat:</label>
        <input type="text" name="Etat" value="<?php echo $barrage['Etat'] ?? ''; ?>"><br>

        <label for="Capacité">Capacité:</label>
        <input type="text" name="Capacité" value="<?php echo $barrage['Capacite'] ?? ''; ?>"><br>

        <label for="Latitude">Latitude:</label>
        <input type="text" name="Latitude" value="<?php echo $barrage['Latitude'] ?? ''; ?>"><br>

        <label for="Longitude">Longitude:</label>
        <input type="text" name="Longitude" value="<?php echo $barrage['Longitude'] ?? ''; ?>"><br>

        <label for="Designation">Designation:</label>
        <input type="text" name="Designation" value="<?php echo $barrage['Designation'] ?? ''; ?>"><br>

        <label for="Adresse">Adresse:</label>
        <input type="text" name="Adresse" value="<?php echo $barrage['Adresse'] ?? ''; ?>"><br>

        <label for="Hauteur">Hauteur:</label>
        <input type="text" name="Hauteur" value="<?php echo $barrage['Hauteur'] ?? ''; ?>"><br>

        <label for="Longueur">Longueur:</label>
        <input type="text" name="Longueur" value="<?php echo $barrage['Longueur'] ?? ''; ?>"><br>

        <label for="Superficie">Superficie:</label>
        <input type="text" name="Superficie" value="<?php echo $barrage['Superficie'] ?? ''; ?>"><br>

        <label for="Profondeur_Max">Profondeur_Max:</label>
        <input type="text" name="Profondeur_Max" value="<?php echo $barrage['Profondeur_Max'] ?? ''; ?>"><br>

        <label for="Profondeur_Moyenne">Profondeur_Moyenne:</label>
        <input type="text" name="Profondeur_Moyenne" value="<?php echo $barrage['Profondeur_Moyenne'] ?? ''; ?>"><br>

        <label for="Region_Hydraulique">Region_Hydraulique:</label>
        <input type="text" name="Region_Hydraulique" value="<?php echo $barrage['Region_Hydraulique'] ?? ''; ?>"><br>

        <label for="Surface_BV">Surface_BV:</label>
        <input type="text" name="Surface_BV" value="<?php echo $barrage['Surface_BV'] ?? ''; ?>"><br>

        <label for="Cote_PHE">Cote_PHE:</label>
        <input type="text" name="Cote_PHE" value="<?php echo $barrage['Cote_PHE'] ?? ''; ?>"><br>

        <label for="Code_Commune">Code_Commune:</label>
        <input type="text" name="Code_Commune" value="<?php echo $barrage['Code_Commune'] ?? ''; ?>"><br>

        <label for="Capacite_Initiale">Capacite_Initiale:</label>
        <input type="text" name="Capacite_Initiale" value="<?php echo $barrage['Capacite_Initiale'] ?? ''; ?>"><br>

        <input type="submit" name="submit" value="Enregistrer">
    </form>
</body>
</html>
