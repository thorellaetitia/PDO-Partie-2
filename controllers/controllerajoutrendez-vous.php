<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'models/modelDatabase.php';
require 'models/modelAppointments.php';
require 'models/modelPatients.php';

//on instancie un nouvel objet appointments / clients pour faire le lien entre les 2 models 
$appointmentObj = new appointments();
$ListpatientsObj = new patients();

$Arraypatients = $ListpatientsObj->ShowAllPatients();
// On édite les regex

//$regexdate = '/^(0[1-9]|([1-9])|[12][0-9]|3[01])-(0[1-9]|1[0-2])-(20(1[89]|2[0-2]))$/'; //autorise le format date ex 12/01/2018
//regex format date américaine car format exigé pour la bdd 
$regexdate = '/^(20(1[89]|2[0-2]))-(0[1-9]|1[0-2])-(0[1-9]|([1-9])|[12][0-9]|3[01])$/';
$regextime = '/^[0-9][0-9]:[0-3][0]:[0][0]$/'; // autorise les chiffres
//
$showform=true;
        
//on déclare un tableau d'erreurs vide
$errorsArray = [];


if (isset($_POST['date'])) {
    $date= htmlspecialchars($_POST['date']);
    if (!preg_match($regexdate, $date)) {
        $errorsArray['date'] = 'Merci de saisir une date au format JJ/MM/YYYY';
    }
    if (empty($date)) {
        $errorsArray['date'] = 'Merci de saisir une date svp';
    }
}

if (isset($_POST['hour'])) {
    $hour = htmlspecialchars($_POST['hour']);
    if (!preg_match($regextime, $hour)) {
        $errorsArray['hour'] = 'Merci de choisir un rendez-vous';
    }
    if (empty($hour)) {
        $errorsArray['hour'] = 'Merci de sélectionner un créneau svp';
    }
}

if (isset($_POST['idpatients'])) {
    $idpatients = htmlspecialchars($_POST['idpatients']);
    if (is_nan($idpatients)) {
        $errorsArray['idpatients'] = 'Merci de choisir un patient';
    }
    if (empty($idpatients)) {
        $errorsArray['idpatients'] = 'Merci de sélectionner un patient svp';
    }
}


if (isset($_POST['submit']) && count($errorsArray) == 0) {
    //$newDate = str_replace('/', '-', $date);
   // $dateEN = date('Y-m-d', strtotime($newDate));
    //je récupère les données du formulaire pour modifier les attributs de l'objet patientObj
    
    $appointmentObj->dateHour = $date . ' ' .$hour;
    $appointmentObj->idpatients = $idpatients;
        //j'éxécute la méthode create patients avec les attributs précedement stockés
    $appointmentObj->CreateAppointment();
    $showform=false;
}