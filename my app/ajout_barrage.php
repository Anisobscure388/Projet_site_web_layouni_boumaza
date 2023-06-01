<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="ajoute.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <title>PHP - AJOUTER, MODIFIER, SUPPRIMER</title>
</head>
<body>


<div class="imgtop">
    <img src="b.jpg" alt="" width="100%" height="200">
</div>         
<div class="title"><h3 class="title"><b>Ajoute barrage</b> </h3> </div>

<form action="add.php" method="post">
    <label for="">ID_barrage</label><input type="number" name="ID_barrage"autocomplete="off"> <br>
    <label for="">Code_barrage</label><input type="float" name="Code_barrage" autocomplete="off"> <br>
    <label for="">Dig</label><input type="float" name="Dig" > <br>
    <label for="">Etat</label><input type="text" name="Etat" > <br>
    <label for="">Capacité</label><input type="float" name="Capacité" > <br>
    <label for="">Latitude</label><input type="float" name="Latitude" > <br>
    <label for="">Langitude</label><input type="float" name="Langitude" > <br>
    <label for="">Disignation</label><input type="text" name="Disignation" > <br>
    <label for="">Adresse</label><input type="text" name="Adresse" > <br>
    <label for="">Hauteur</label><input type="float" name="Hauteur" > <br>
    <label for="">Longeur</label><input type="float" name="Longeur" > <br>
    <label for="">Superficie</label><input type="float" name="Superficie" > <br>
    <label for="">Profondeur_Max</label><input type="float" name="Profondeur_Max" > <br>
    <label for="">Profndeur_Moyenne</label><input type="float" name="Profndeur_Moyenne" > <br>
    <label for="">Région_Hydraulique</label><input type="text" name="Région_Hydraulique" > <br>
    <label for="">Surface_BV</label><input type="float" name="Surface_BV" > <br>
    <label for="">Cote_PHE</label><input type="float" name="Cote_PHE" > <br>
    <label for="">Code_Commune</label><input type="text" name="Code_Commune" > <br>
    <label for="">Capacité_Initiale</label><input type="float" name="Capacité_Initiale" > <br>

    <button type="Submit" name="enregistrer">Enregistrer</button>
</form>
</body>
</html>
