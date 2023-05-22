<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des etudiants</title>
    <link rel="stylesheet" href="style/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    
</head>
<body>
    <!-- <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">Date-de-naissance</th>
                            <th scope="col">Genre</th>
                            <th scope="col">Date_d_adhesion</th>
                            <th scope="col">Personne_a_prevenir</th>
                          </tr>
                        </thead>
                </table>
            </div>
        </div>
    </div> -->
    <?php
    // Connexion à la base de données
    include('connexion.php');
    // Requête SQL pour sélectionner les noms, prenoms, dates de naissance et mots de passe des utilisateurs
    $sql = "SELECT nom, prenom, date_de_naissance, genre, date_d_adhesion, personne_a_prevenir FROM etudiant";

    // Exécution de la requête
    $stmt = $bdd->query($sql);

    // Traitement des résultats
    echo "<table class='table table-hover'>";
    echo "<tr class='bg-secondary text-white'>
    <th scope='col'>nom</th>
    <th scope='col' class=''>prenom</th>
    <th scope='col'>Date-de-naissance</th>
    <th scope='col'>genre</th>
    <th scope='col'>date_d_adhesion</th>
    <th scope='col'>personne_a_prevenir</th>
    </tr>";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['nom']) . "</td>";
        echo "<td>" . htmlspecialchars($row['prenom']) . "</td>";
        echo "<td>" . htmlspecialchars($row['date_de_naissance']) . "</td>";
        echo "<td>" . htmlspecialchars($row['genre']) . "</td>";
        echo "<td>" . htmlspecialchars($row['date_d_adhesion']) . "</td>";
        echo "<td>" . htmlspecialchars($row['personne_a_prevenir']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
?>
   
    

</body>
</html>