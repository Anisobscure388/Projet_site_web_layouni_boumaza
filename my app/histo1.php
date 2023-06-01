<?php
// Connexion à la base de données (remplacez les valeurs par les vôtres)
$serveur = "localhost";
$utilisateur = "root"; // Utilisateur anonyme
$motDePasse = ""; // Mot de passe vide pour l'utilisateur anonyme
$baseDeDonnees = "suivi des barrages";

$connexion = mysqli_connect($serveur, $utilisateur, $motDePasse, $baseDeDonnees);

// Vérifier la connexion
if (!$connexion) {
    die("Échec de la connexion à la base de données : " . mysqli_connect_error());
}

// Récupérer les données des barrages depuis la table "barrages"
$resultat = mysqli_query($connexion, "SELECT Disignation, Capacité FROM barrages");

// Préparer les tableaux pour les labels (Designation) et les valeurs (Capacité)
$labels = [];
$values = [];

// Parcourir les résultats et extraire les données
while ($row = mysqli_fetch_assoc($resultat)) {
    $labels[] = $row['Disignation'];
    $values[] = $row['Capacité'];
}

// Fermer la connexion à la base de données
mysqli_close($connexion);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histogramme</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="myChart"></canvas>

    <script>
        // Utiliser les données récupérées pour l'histogramme
        var labels = <?php echo json_encode($labels); ?>;
        var values = <?php echo json_encode($values); ?>;

        // Créer un contexte pour le graphique
        var ctx = document.getElementById('myChart').getContext('2d');

        // Créer l'objet du graphique en barres
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Capacité des barrages',
                    data: values,
                    backgroundColor: 'rgba(0, 123, 255, 0.5)' // Couleur de fond des barres
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true // L'axe y commence à 0
                    }
                }
            }
        });
    </script>
</body>
</html>
