<?php

require 'models/modelDatabase.php';
require 'models/modelPatients.php';
require 'models/modelAppointments.php';

//on instancie un nouvel objet patientsObj
$patientsObj = new patients();
//on reprends l'objet rdv pour pouvoir utiliser la fonction et pouvoir afficher details du rdv
$detailAppointmentObj = new appointments();


if (isset($_GET['id'])) {
    $patientsObj->id = $_GET['id'];
    $detailAppointmentObj->id = $_GET['id'];
    $arrayProfilePatient = $patientsObj->lastInsertId();
    $appointment = $detailAppointmentObj->displayAppointmentByIdPatient();
}


