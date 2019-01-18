<?php
include_once('controllers/controllerajout-patient.php');
?>

<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Shortcut Icon -->
        <link rel="shortcut icon" href="" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" />
        <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="style.css" />
        <title>exercice -1 partie 2 PDO</title>
    </head>
    <body>
        <?php
        include_once('navbar.php');
        ?>      
        <div class="modal-body">
            <!--form-->
            <div class="closebutton">                
                <a href="index1.php">Fermer</a>
            </div>
            <?php if ($showform) { ?>
                <form method="post" action="ajout-patient.php"  id="formulaire" enctype="multipart/form-data">
                    <div><p><strong>Création d'un patient</strong></p></div>

                    <div class="form-group">
                        <label for="lastName">Votre nom : </label>
                        <input type="text" name="lastName" id="lastName" placeholder="ex : Dupont" value="<?= (isset($lastName)) ? $lastName : ''; ?>" required /><br>
                        <span class="error"><?= isset($errorsArray['lastName']) ? $errorsArray['lastName'] : ''; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="firstName">Votre prénom :</label> 
                        <input type="text" name="firstName" id="firstName" placeholder="ex : Stéphane" value="<?= (isset($firstName)) ? $firstName : ''; ?>" required /><br>
                        <span class="error"><?= isset($errorsArray['firstName']) ? $errorsArray['firstName'] : ''; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="birthDate">Date de naissance : </label> 
                        <input type="text" name="birthDate" id="birthDate" placeholder="ex. 25/12/2000" value="<?= (isset($birthDate)) ? $birthDate : ''; ?>" required /><br>
                        <span class="error"><?= isset($errorsArray['birthDate']) ? $errorsArray['birthDate'] : ''; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="phone">Téléphone : </label> 
                        <input type="text" name="phone" id="phone" placeholder="06.XX.XX.XX.XX" value="<?= (isset($phone)) ? $phone : ''; ?>" required /><br>
                        <span class="error"><?= isset($errorsArray['phone']) ? $errorsArray['phone'] : ''; ?></span>
                    </div>                              
                    <div class="form-group">
                        <label for="mail">Votre mail : </label> 
                        <input type="text" name="mail" id="age" placeholder="monsieurtruc@gmail.com" value="<?= (isset($mail)) ? $mail : ''; ?>" required /><br>
                        <span class="error"><?= isset($errorsArray['mail']) ? $errorsArray['mail'] : ''; ?></span>
                    </div> 
                    <div class="centerdiv">
                        <input class="btn btn-info" type="submit" name="submit" value="Créer un patient"/>
                    </div>

                </form>
                <!--fin du form-->

            <?php } else { ?>
                <p>Création du patient validée</p>
            <?php } ?>
        </div>

    </body>
    <script src="http://tympanus.net/Blueprints/FullWidthTabs/js/cbpFWTabs.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="script_1.js"></script>
</body>
</html>
