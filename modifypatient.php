<?php
include_once('controllers/controllermodifypatient.php');
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
        <title>exercice_4 partie 2- PDO</title>  
    </head>
    <body>
        <?php
        include_once('navbar.php');
        ?>
        <h1>Modifier un patient</h1>
<!--        <p>Depuis la page de profil d'un patient, permettre la modification de ce patient.</p> -->

        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="card" id="patient">
                        <div class="closebutton">
                            <a href="index1.php">Fermer</a>
                        </div>
                        <?= isset($messagemodifvalidee) ? $messagemodifvalidee : '' ?>
                        <form method="post" action="#" enctype="multipart/form-data">

                            <div class="form-group">
                                Civilité : <select required name="civilite">
                                    <option value="" disabled selected>Veuillez faire votre choix</option>   
                                    <option value="Monsieur">Monsieur</option>
                                    <option value="Madame">Madame</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="lastName">Votre nom : </label>
                                <input type="text" name="lastName" id="lastName" placeholder="ex : Dupont" value="<?= (isset($resultQueryModifyPatient->lastname)) ? $resultQueryModifyPatient->lastname : ''; ?>" required /><br>
                                <span class="error"><?= isset($errorsArray['lastName']) ? $errorsArray['lastName'] : ''; ?></span>
                            </div>
                            <div class="form-group">
                                <label for="firstName">Votre prénom :</label> 
                                <input type="text" name="firstName" id="firstName" placeholder="ex : Stéphane" value="<?= (isset($resultQueryModifyPatient->firstname)) ? $resultQueryModifyPatient->firstname : ''; ?>" required /><br>
                                <span class="error"><?= isset($errorsArray['firstName']) ? $errorsArray['firstName'] : ''; ?></span>
                            </div>
                            <div class="form-group">
                                <label for="birthDate">Date de naissance : </label> 
                                <input type="text" name="birthDate" id="birthDate" placeholder="ex. 25/12/2000" value="<?= (isset($resultQueryModifyPatient->birthdate)) ? $resultQueryModifyPatient->birthdate : ''; ?>" required /><br>
                                <span class="error"><?= isset($errorsArray['birthDate']) ? $errorsArray['birthDate'] : ''; ?></span>
                            </div>
                            <div class="form-group">
                                <label for="phone">Téléphone : </label> 
                                <input type="text" name="phone" id="phone" placeholder="06.XX.XX.XX.XX" value="<?= (isset($resultQueryModifyPatient->phone)) ? $resultQueryModifyPatient->phone : ''; ?>" required /><br>
                                <span class="error"><?= isset($errorsArray['phone']) ? $errorsArray['phone'] : ''; ?></span>
                            </div>                              
                            <div class="form-group">
                                <label for="mail">Votre mail : </label> 
                                <input type="text" name="mail" id="age" placeholder="monsieurtruc@gmail.com" value="<?= (isset($resultQueryModifyPatient->mail)) ? $resultQueryModifyPatient->mail : ''; ?>" required /><br>
                                <span class="error"><?= isset($errorsArray['mail']) ? $errorsArray['mail'] : ''; ?></span>
                            </div> 
                            <div class="centerdiv">
                                <input class="btn btn-info" type="submit" name="submit" value="Modifier un patient"/>
                            </div>

                        </form>
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