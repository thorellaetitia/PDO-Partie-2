<?php

require 'models/modelDatabase.php';
require 'models/modelPatients.php';
require 'models/modelAppointments.php';

//on instancie un nouvel objet rdv
$detailAppointmentObj = new appointments();

if (isset($_GET['idAppointment'])) {
    $detailAppointmentObj->id = $_GET['idAppointment'];
    $arrayDetailsAppointment = $detailAppointmentObj->displayDetailsAppointmentById();
}

