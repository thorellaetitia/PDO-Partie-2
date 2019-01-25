<?php

require 'models/modelDatabase.php';
require 'models/modelAppointments.php';

//on instancie un nouvel objet clients
$ListappointmentsObj = new appointments();
$arrayAllAppointments = $ListappointmentsObj->ShowAllAppointments();

//on instancie un nouvel objet suppressionrdv pour executer la fonction suppression des rdv
$deleteAppointmentObj = new appointments();

if (isset($_GET['id'])) {
    $ListappointmentsObj->id = $_GET['id'];
}

if (isset($_GET['idAppointment'])) {
    $deleteAppointmentObj->id = $_GET['idAppointment'];
    $deleteAppointmentObj->deleteAppointment();
}
