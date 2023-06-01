<?php 
    include("connect.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="cnx.css">
</head>
<body>
    <h1 class="logo"> <b>GSBRA</b> </h1>
    <div class="background-img"></div>

    <div class="box-form-box">
        <div class="titre">Connexion</div>
        
        <form action="barrage.html" method="POST">

            <div class="field input">
                <div>
                    <label for="User_name">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>
                <div>
                    <label for="mot de passe">Mot de passe</label>
                    <input type="password" name="password" id="mot de passe" autocomplete="off" required>
                </div>
                <div >
                    <label for="matricule">Matricule</label>
                    <input type="text" name="matricule" id="matricule" autocomplete="off" required>
                </div>

                <div class="field">
                    <a href="barrage.html">
                    <input type="submit" class="btn" name="submit" value="Se connecter" required>
                    </a>
                     </div>
            </div>
            <div class="links">
                Cliquez Ici pour Ajouter un nouveau compte. <a href="inscription.php">S'inscrire</a>
            </div>
        </form>
    </div>
    
</body>
</html>
