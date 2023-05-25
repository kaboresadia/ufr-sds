<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>gestion de l'ufr/sds</title>
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
        <h3 class="c1">Bienvenue dans votre plateforme de gestionnaire de compte d'étudiants</h3>
      </div>
    </div>
  </div>
  <div class="container mt-3 offset-1">
    <div class="row">
      <div class="col-md-5 col-sm-5 s7 rounded">

        <form action="enregistrement.php" method="post">
          <h2 class="text-white text-center pt-2">INSCRIPTION</h2>
          <label for="nom">Nom :</label>
          <input type="text" class="form-control" id="nom" name="nom" required><br />

          <label for="prenom">Prénom :</label>
          <input type="text" class="form-control" id="prenom" name="prenom" required><br />

          <label for="date_de_naissance">Date de naissance :</label>
          <input type="date" class="form-control" id="date_de_naissance" name="date_de_naissance" required><br />

          <label for="genre">Genre :</label>
          <select id="genre" name="genre" class="form-control" required>
            <option value="">Sélectionnez</option>
            <option value="homme">Homme</option>
            <option value="femme">Femme</option>
          
          </select><br />

          <label for="date_d_adhesion">Date d'adhésion :</label>
          <input type="date" class="form-control" id="date_d_adhesion" name="date_d_adhesion" required><br />

          <label for="personne_a_prevenir">Personne à prévenir :</label>
          <input type="text" class="form-control" id="personne_a_prevenir" name="personne_a_prevenir" required><br />

          <input type="submit" class="rounded send " value="Enregistrer">
        </form>
      </div>
      <div class="col-md-6 col-sm-6">
        <a href="liste.php"><button type="button" class="text-white rounded liste">liste des étudiants</button></a>
      </div>
    </div>
  </div>
  <div class="container-fluid footer  mt-3">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <p class="text-white">&copy;Copyright 2023.Tous droit Réservées</p>
      </div>
    </div>
  </div>
</body>

</html>