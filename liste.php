<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des etudiants</title>
    <link rel="stylesheet" href="style/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<div class="container-fluid s0">
    <div class="row ">
      <div class="col-md-4 col-sm-4 s2">
        <h2 class="a1">Université-Joseph-Ki-Zerbo</h2>
        <h4 class="a2">UFR : Sciences de la Santé</h4>
      </div>
      <div class="col-md-4 col-sm-4 s3">
        <img src="images/logo ujkz1.png" alt="logo" white="100px" height="100px">
      </div>
      <div class="col-md-4 col-sm-4 s4">
        <h2 class="b1">Burkina-Faso</h2>
        <h6 class="b2">Unité-Progrès-justice</h6>
      </div>
    </div>
  </div>
  <div class="container-fluid s5">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <h3 class="c1">Liste des étudiants inscrits</h3>
      </div>
    </div>
  </div>

    <?php
    // Connexion à la base de données
    include('connexion.php');
    // Requête SQL pour sélectionner les noms, prenoms, dates de naissance et mots de passe des utilisateurs
    $sql = "SELECT nom, prenom, date_de_naissance, genre, date_d_adhesion, personne_a_prevenir FROM etudiant";

    // Exécution de la requête
    $stmt = $bdd->query($sql);

    // Traitement des résultats
    echo "<table class='table '>";
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
 <a href="index.php"><button type="button" class="text-white rounded liste">Revenir a la page d'accueil</button></a>
   <div class="container-fluid footer  mt-3">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <p class="text-white">&copy;Copyright 2023.Tous droit Réservées</p>
      </div>
    

</body>
</html>