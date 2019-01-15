<?php
include_once('controllers/controllerajoutrendez-vous.php');
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
        <title>exercice -5 partie 2 PDO</title>
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

            <div><p><strong>Ajouter un rendez-vous</strong></p></div>
            <form method="post" action="ajoutrendez-vous.php" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="lastName">Nom : </label>
                    <input type="text" name="lastName" id="lastName" placeholder="ex : Dupont" value="<?= (isset($lastName)) ? $lastName : ''; ?>" required /><br>
                    <span class="error"><?= isset($errorsArray['lastName']) ? $errorsArray['lastName'] : ''; ?></span>
                </div>
                <div class="form-group">
                    <label for="firstName">Prénom :</label> 
                    <input type="text" name="firstName" id="firstName" placeholder="ex : Stéphane" value="<?= (isset($firstName)) ? $firstName : ''; ?>" required /><br>
                    <span class="error"><?= isset($errorsArray['firstName']) ? $errorsArray['firstName'] : ''; ?></span>
                </div>
                <div class="form-group">
                    <label for="date">Date : </label> 
                    <input type="text" name="date" id="date" placeholder="ex. 25/12/2000" value="<?= (isset($date)) ? $date : ''; ?>" required /><br>
                    <span class="error"><?= isset($errorsArray['date']) ? $errorsArray['date'] : ''; ?></span>
                </div>
                <div class="form-group">
                    <label for="time">Horaire : </label> 
                    <input type="text" name="time" id="phone" placeholder="" value="<?= (isset($time)) ? $time : ''; ?>" required /><br>
                    <span class="error"><?= isset($errorsArray['time']) ? $errorsArray['time'] : ''; ?></span>
                </div>                              
                <div class="form-group">
                    Service : <select required name="department">
                        <option value="" disabled selected>Veuillez faire votre choix</option>   
                        <option value="skinpathologie">Dermatologie</option>
                        <option value="eyespathologie">Ophtalmologie</option>
                    </select>
                </div>
                <div class="centerdiv">
                    <input class="btn btn-info" type="submit" name="submit" value="Créer un rendez-vous"/>
                </div>

            </form>

            <!--fin du form-->
        </div>

    </body>
    <script src="http://tympanus.net/Blueprints/FullWidthTabs/js/cbpFWTabs.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
