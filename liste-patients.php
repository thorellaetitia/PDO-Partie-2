<?php
include_once('controllers/controllerindex2.php');
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
        <title>exercice_2 partie 2- PDO</title>  
    </head>
    <body>
        <?php
        include_once('navbar.php');
        ?>

        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-12" id="patient">
                    <div>
                        <table class="table table-striped" >
                            <div class="closebutton">
                                <a href="index1.php">Fermer</a>
                            </div>
                            <caption>Liste des patients</caption>
                            <tr>
                                <th> N° patient </th>
                                <th> Prénom </th>
                                <th>  Nom </th>
                                <th>Profil patient</th>
                            </tr>
                            <?php
                            foreach ($Arraypatients as $patients) {
                                ?>
                                <tr>
                                    <td><?= $patients->id ?></td>
                                    <td><?= $patients->firstname ?></td>
                                    <td> <?= $patients->lastname ?></td>
                                    <td><a class="card-link" href="profil-patients.php?id=<?= $patients->id ?>">Voir</a></td>
                                </tr>
                                <?php
                            }
                            ?>
                        </table>



                        <div class="form-group">
                            Service : <select required name="department">
                                <?php foreach ($Arraypatients as $patients) { ?>

                                    <option value="<?= $patients->id ?>"><?= $patients->firstname ?></option>
                                    <?php
                                }
                                ?>  
                            </select>

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