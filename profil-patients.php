<?php
include_once('controllers/controllerprofil-patients.php');
?>
<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <link rel="shortcut icon" href="" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" />
        <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="style.css" />
        <title>exercice_3 partie 2- PDO</title>  
    </head>
    <body>
        <?php
        include_once('navbar.php');
        ?>

<!--        <p>Créer une page profil-patient.php. Elle doit permettre d'afficher
      toutes les informations d'un patient. Elle doit être accessible 
      depuis la page liste-patients.php et afficher les informations du
      patient sélectionné.</p> -->

        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card" id="patient">
                        <div class="card-body">
                            <p>Profil des patients</p>
                            <div class="closebutton">
                                <a href="index1.php">Fermer</a>
                            </div>
                            <div class="card-id">id : <?= $arrayProfilePatient->id ?></div>
                            <p class="card-title" >Nom : <?= $arrayProfilePatient->lastname ?></p>
                            <p class="card-subtitle mb-2 text-muted">Prénom : <?= $arrayProfilePatient->firstname ?></p>
                            <p class="card-text">Date de naissance : <?= $arrayProfilePatient->birthdate ?></p>
                            <p class="card-text">Tel : <?= $arrayProfilePatient->phone ?></p>
                            <p class="card-text"> Mail : <?= $arrayProfilePatient->mail ?></p>
                            <p class="card-text"> RDV : <?= (isset($appointment->dateHour)) ? $appointment->dateHour : 'pas de rdv fixé pour le moment'; ?></p>
                            <a href="modifypatient.php?id=<?= $arrayProfilePatient->id ?>" class="card-link">Modifier le patient</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script src="http://tympanus.net/Blueprints/FullWidthTabs/js/cbpFWTabs.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="script.js"></script>

    </body>
</html>