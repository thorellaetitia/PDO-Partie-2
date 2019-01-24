<?php
include_once('controllers/controllermodifyappointment.php');
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="modal-body">
                        <!--form-->
                        <div class="closebutton">
                            <a href="index1.php">Fermer</a>
                        </div>
                        <?php if ($showform) { ?>
                            <div class="modal-body">
                                <form method="post" action="modifyappointment.php?idAppointment=<?= $arrayDetailsAppointment->idAppointment ?>">
                                    <div><p><strong>Modifier un rendez-vous</strong></p></div>

                                    <div class="form-group">
                                        Patient: <select required name="idpatients" value="">
                                            <option selected value="<?=(isset($arrayDetailsAppointment->idPatients)) ? $arrayDetailsAppointment->idPatients : ''; ?>"><?=(isset($arrayDetailsAppointment->lastname)) ? $arrayDetailsAppointment->lastname . '  ' . $arrayDetailsAppointment->firstname : 'choisir un patient'; ?></option>
                                            <?php foreach ($Arraypatients as $patients) { ?>
                                                <option value="<?= $patients->id ?>"><?= $patients->id ?> <?= $patients->lastname ?> <?= $patients->firstname ?></option>
                                               <?php
                                            }
                                            ?>  
                                            <span class="error"><?= isset($errorsArray['idpatients']) ? $errorsArray['idpatients'] : ''; ?></span>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="date">Date : </label> 
                                        <input type="date" name="date" id="date" placeholder="ex jj/mm/yyyy" value="<?= (isset($arrayDetailsAppointment->date)) ? $arrayDetailsAppointment->date : ''; ?>" required /><br>
                                        <span class="error"><?= isset($errorsArray['date']) ? $errorsArray['date'] : ''; ?></span>
                                    </div> 
                                    <div class="form-group">
                                        Heure : <select name="hour" >
                                            <option value="<?= (isset($arrayDetailsAppointment->hour)) ? $arrayDetailsAppointment->hour : ''; ?>" selected><?= (isset($arrayDetailsAppointment->hour)) ? $arrayDetailsAppointment->hour : 'Veuillez choisir un créneau'; ?></option> 
                                            <option value="08:30:00">08h30</option>
                                            <option value="09:00:00">09h00</option>
                                            <option value="09:30:00">09h30</option>
                                            <option value="10:00:00">10h00</option>
                                            <option value="10:30:00">10h30</option>
                                            <option value="11:00:00">11h00</option>
                                            <option value="11:30:00">11h30</option>
                                            <option value="12:00:00">12h00</option>
                                            <option value="14:00:00">14h00</option>
                                            <option value="14:30:00">14h30</option>
                                            <option value="15:00:00">15h00</option>
                                            <option value="15:30:00">15h30</option>
                                            <option value="16:00:00">16h00</option>
                                            <option value="16:30:00">16h30</option>
                                            <option value="17:00:00">17h00</option>
                                            <option value="17:30:00">17h30</option>
                                            <option value="18:00:00">18h00</option>
                                            <option value="18:30:00">18h30</option>
                                        </select>
                                        <span class="error"><?= isset($errorsArray['hour']) ? $errorsArray['hour'] : ''; ?></span>
                                    </div>
                                    <div class="centerdiv">
                                        <input class="btn btn-info" type="submit" name="submit" value="Modifier le rendez-vous"/>
                                    </div>
                                </form>
                            <?php } else { ?>
                                <p>Modification du RDV pris en compte</p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!--fin du form-->


    </body>
    <script src="http://tympanus.net/Blueprints/FullWidthTabs/js/cbpFWTabs.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="script_1.js"></script>
</body>
</html>
