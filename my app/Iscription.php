<?php 
    include("connect.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'identifier</title>
    <link rel="stylesheet" href="inscription.css">
</head>
<body>
    
    <h1 class="logo"> <b>GSBRA</b> </h1>
    <div class="background-img"></div>
    <!-- se connecter form --> 
    
        <div class="box-form-box">
            <div class="titre">S'identifier</div>
            
            <form action="barrage.html" method="post">
                <div class="field-input">
                <div>
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" autocomplete="off" required>
                </div>
                <div>
                    <label for="prenom">Prenom</label>
                    <input type="text" name="prenom" id="prenom" autocomplete="off" required>
                </div>
                <div>
                    <label for="adresse">Adresse</label>
                    <input type="text" name="adresse" id="adresse" autocomplete="off" required>
                </div>
            
                <div>
                    <label for="telephone">Telephone</label>
                    <input type="text" name="telephone" id="telephone" autocomplete="off" required>
                </div>
                <div>
                    <label for="fonctio">Fonction </label>
                    <input type="text" name="Fonction" id="Fonction" autocomplete="off" required>
                </div>
                <div>
                    <label for="type">Type</label>
                        <select name="type" id="type" required>
                             <option value="">Choisissez un type</option>
                             <option value="admin">Admin</option>
                             <option value="gestionnaire">Gestionnaire</option>
                             <option value="visiteur">Visiteur</option>
                        </select>
                </div>


                <div >
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>
           
                <div >
                    <label for="mot de passe">Mot de passe</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Se connecter" required>
                </div>
                <div class="links"> Déja member? <a href="connexion.php">Connexion</a><div class="links">
                   
                </div>
                </div>
            </form>
        </div>
      
</body>
</html>
