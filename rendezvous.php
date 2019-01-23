<?php
include_once('controllers/controllerrendezvous.php');
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
        <title>exercice_7 partie 2- PDO</title>  
    </head>
    <body>
        <?php
        include_once('navbar.php');
        ?>

<!--        <p>Créer la page rendezvous.php. Elle doit permettre d'afficher toutes les informations d'un rendez-vous. Elle doit être accessible depuis la page liste-rendezvous.php
et afficher les informations du rendez-vous sélectionné.</p> -->

        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card" id="patient">
                        <div class="card-body">
                            <p>Détail du Rendez-vous</p>
                            <div class="closebutton">
                                <a href="index1.php">Fermer</a>
                            </div>
                            <!--                            nous utilisons Fetch pour afficher une ligne donc pas besoin de faire un foreach 
                                                        il faut juste appeller le nom des colonnes dateHour, lastname,.....;-->
                            <div class="card-id">Numéro patient : <?= $arrayDetailsAppointment->id ?></div>
                            <p class="card-title">RDV : <?= $arrayDetailsAppointment->date . ' ' . $arrayDetailsAppointment->hour ?></p>
                            <p class="card-title">Nom : <?= $arrayDetailsAppointment->lastname ?></p>
                            <p class="card-subtitle mb-2 text-muted">Prénom : <?= $arrayDetailsAppointment->firstname ?></p>
                            <p class="card-text">Tel : <?= $arrayDetailsAppointment->phone ?></p>
                            <p class="card-text"> Mail : <?= $arrayDetailsAppointment->mail ?></p>
                            <a href="modifyappointment.php?idAppointment=<?= $arrayDetailsAppointment->idAppointment ?>" class="card-link">Modifier le RDV</a>
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
