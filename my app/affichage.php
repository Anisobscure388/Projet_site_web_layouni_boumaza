<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="affiche.css">
    <title>Nos Barrages</title>
</head>

<body>

<div class="imgtop">
    <img src="b.jpg" alt="" width="2250" height="200">
</div>         
<div class="title"><h3 class="title"><b>Modifier ou Supprimer barrage </b> </h3> </div>
 

<table>

<th>ID_barrage</th>
<th>Code_barrage</th>
<th>Dig</th>
<th>Etat</th>
<th>Capacité</th>
<th>Latitude</th>
<th>Longitude</th>
<th>Designation</th>
<th>Adresse</th>
<th>Hauteur</th>
<th>Longueur</th>
<th>Superficie</th>
<th>Profondeur_Max</th>
<th>Profndeur_Moyenne</th>
<th>Région_Hydraulique</th>
<th>Surface_BV</th>
<th>Cote_PHE</th>
<th>Code_Commune</th>
<th>Capacité_Initiale</th>
<th>Actions</th>

<?php
        $servername = "localhost";
        $username = 'root';
        $password = '';
        $db_name = 'suivi des barrages';
        $con = new mysqli($servername, $username, $password, $db_name);
        if ($con->connect_errno) {
            die("Connection failed: " . $con->connect_errno);
        }

        $req = $con->query("SELECT * FROM barrages");
        while ($aff = $req->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $aff['ID_barrage']; ?></td>
                <td><?php echo $aff['Code_barrage']; ?></td>
                <td><?php echo $aff['Dig']; ?></td>
                <td><?php echo $aff['Etat']; ?></td>
                <td><?php echo $aff['Capacité']; ?></td>
                <td><?php echo $aff['Latitude']; ?></td>
                <td><?php echo $aff['Langitude']; ?></td>
                <td><?php echo $aff['Disignation']; ?></td>
                <td><?php echo $aff['Adresse']; ?></td>
                <td><?php echo $aff['Hauteur']; ?></td>
                <td><?php echo $aff['Longeur']; ?></td>
                <td><?php echo $aff['Superficie']; ?></td>
                <td><?php echo $aff['Profondeur_Max']; ?></td>
                <td><?php echo $aff['Profndeur_Moyenne']; ?></td>
                <td><?php echo $aff['Région_Hydraulique']; ?></td>
                <td><?php echo $aff['Surface_BV']; ?></td>
                <td><?php echo $aff['Cote_PHE']; ?></td>
                <td><?php echo $aff['Code_Commune']; ?></td>
                <td><?php echo $aff['Capacité_Initiale']; ?></td>
                <td>
                <form action="modification.php?ID_barrage=$ID_barrage" method="POST">
                    <!-- Pass the ID as a hidden input field -->
                    <input type="hidden" name="ID_barrage" value="<?php echo $aff['ID_barrage']; ?>">
                    <input type="submit" class="text-button" value="Modifier">
                </form>
                <form action="supprimer.php?ID_barrage=$ID_barrage" method="POST">
                    <input type="hidden" name="ID_barrage" value="<?php echo $aff['ID_barrage']; ?>">
                    <input type="submit" class="text-button1" value="Supprimer">
                </form>

                </td>
            </tr>
        <?php } ?>
</table>

</body 