<?php
require_once("connect.php");


if(isset($_Get["ID_barrage"]))
{
    $ID_barrage=$_Get["ID_barrage"];
    $req=$con->query("SELECT FROM barrages WHERE ID_barrage= ?");
    $mod=$req->fetch();
}
?>
    <h2>Modification des barrages</h2>

    <form action="" method="post">

    <label for="">ID_barrage</label><input value="<?php echo $mod['ID_barrage']; ?>" type="number" name="ID_barrage" autocomplete="off"> <br>
    <label for="">Code_barrage</label><input value="<?php echo $mod['Code_barrage']; ?>" type="float" name="Code_barrage" autocomplete="off"> <br>
    <label for="">Dig</label><input value="<?php echo $mod['Dig']; ?>" type="float" name="Dig" > <br>
    <label for="">Etat</label><input value="<?php echo $mod['Etat']; ?>" type="text" name="Etat" > <br>
    <label for="">Capacité</label><input value="<?php echo $mod['Capacité']; ?>" type="float" name="Capacité" > <br>
    <label for="">Latitude</label><input value="<?php echo $mod['Latitude']; ?>" type="float" name="Latitude" > <br>
    <label for="">Langitude</label><input value="<?php echo $mod['Langitude']; ?>" type="float" name="Langitude" > <br>
    <label for="">Disignation</label><input value="<?php echo $mod['Disignation']; ?>" type="text" name="Disignation" > <br>
    <label for="">Adresse</label><input value="<?php echo $mod['Adresse']; ?>" type="text" name="Adresse" > <br>
    <label for="">Hauteur</label><input value="<?php echo $mod['Hauteur']; ?>" type="float" name="Hauteur" > <br>
    <label for="">Longeur</label><input value="<?php echo $mod['Longeur']; ?>" type="float" name="Longeur" > <br>
    <label for="">Superficie</label><input value="<?php echo $mod['Superficie']; ?>" type="float" name="Superficie" > <br>
    <label for="">Profondeur_Max</label><input value="<?php echo $mod['Profondeur_Max']; ?>" type="float" name="Profondeur_Max" > <br>
    <label for="">Profndeur_Moyenne</label><input value="<?php echo $mod['Profndeur_Moyenne']; ?>" type="float" name="Profndeur_Moyenne" > <br>
    <label for="">Région_Hydraulique</label><input value="<?php echo $mod['Région_Hydraulique']; ?>" type="text" name="Région_Hydraulique" > <br>
    <label for="">Surface_BV</label><input value="<?php echo $mod['Surface_BV']; ?>" type="float" name="Surface_BV" > <br>
    <label for="">Cote_PHE</label><input value="<?php echo $mod['Cote_PHE']; ?>" type="float" name="Cote_PHE" > <br>
    <label for="">Code_Commune</label><input value="<?php echo $mod['Code_Commune']; ?>" type="text" name="Code_Commune" > <br>
    <label for="">Capacité_Initiale</label><input value="<?php echo $mod['Capacité_Initiale']; ?>" type="float" name="Capacité_Initiale" > <br>
        
    <button type="Submit" name="modifier">Enregistrer les modifications</button>
</form>

