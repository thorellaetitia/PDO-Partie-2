<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'models/modelDatabase.php';
require 'models/modelPatients.php';

//on instancie un nouvel objet clients
$modifypatientObj = new patients();
$modifypatientObj->id = $_GET['id'];
$resultQueryModifyPatient=$modifypatientObj->lastInsertId();

// On édite les regex
$regexLetter = '/^[a-zA-ZÄ-ÿ\-]+$/'; //autorise les lettres alplhabet majuscules et minuscules et les accents
$regextitle = '/^[A-ZÄ-ÿ\-]+$/'; //autorise les lettres de l'alphabet seulement les majuscules et accents
$regexLetternumber = '/^[\wÄ-ÿ\-]+$/'; //autorise les lettres maj et min et accents et chiffres de 0 à 9
$regexNumber = '/^[0-9]{2}+$/'; //autorise uniquement les chiffres et seulement 2 chiffres
$regexPhonenumber = '/^((\+)33|0)[1-9](\d{2}){4}+$/'; //autorise uniquement les chiffres soir +33 ou 0 \d signifie [0-9]
//regexdate autorise pour le JJ j'autorise le 0 et entre 1 et 9 (ex02) ou bien entre 1 et 9 (ex14)ou bien entre 10 et 19 ou bien
//20 et 29 ou bien 30 et 31 pour le MM j'autorise entre 01 et 09 puis 10 à 12 pour le YYYY j'autorise 2018 2019 ou 2020 à 2022//
$regexdate = '/^(0[1-9]|([1-9])|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/(19([1-9][1-9]|2000))$/'; //autorise le format date ex 12/01/2018
$regexMail = '/^[a-z0-9.-_]+@[a-z0-9.-_]+.[a-z]{2,6}$/'; //autorise les lettres et chiffres .-_
//on déclare un tableau d'erreurs vide
$errorsArray = [];
$showform = true;

if (isset($_POST['lastName'])) {
    $lastName = htmlspecialchars($_POST['lastName']);
    if (!preg_match($regexLetter, $lastName)) {
        $errorsArray['lastName'] = 'Merci de saisir une chaîne de caractères';
    }
    if (empty($lastName)) {
        $errorsArray['lastName'] = 'Merci de saisir un nom';
    }
}

if (isset($_POST['firstName'])) {
    $firstName = htmlspecialchars($_POST['firstName']);
    if (!preg_match($regexLetter, $firstName)) {
        $errorsArray['firstName'] = 'Merci de saisir une chaîne de caractères';
    }
    if (empty($firstName)) {
        $errorsArray['firstName'] = 'Merci de saisir un prénom';
    }
}

if (isset($_POST['birthDate'])) {
    $date = htmlspecialchars($_POST['birthDate']);
    if (!preg_match($regexdate, $date)) {
        $errorsArray['birthDate'] = 'Merci de saisir une date au format JJ/MM/YYYY';
    }
    if (empty($date)) {
        $errorsArray['birthDate'] = 'Merci de saisir une date de naissance';
    }
}

if (isset($_POST['phone'])) {
    $phone = htmlspecialchars($_POST['phone']);
    if (!preg_match($regexPhonenumber, $phone)) {
        $errorsArray['phone'] = 'Merci de saisir un numéro de téléphone format nn.nn.nn.nn.nn';
    }
    if (empty($phone)) {
        $errorsArray['phone'] = 'Merci de saisir un numéro de téléphone';
    }
}

if (isset($_POST['mail'])) {
    $mail = htmlspecialchars($_POST['mail']);
    if (!preg_match($regexMail, $mail)) {
        $errorsArray['mail'] = 'Merci de saisir une adresse mail valide';
    }
    if (empty($mail)) {
        $errorsArray['mail'] = 'Merci de saisir votre adresse mail';
    }
}


if (isset($_POST['submit']) && (isset($_GET['id']) && count($errorsArray) == 0 )) {
    //j'éxécute la méthode create patients avec les attributs précedement stockés
    $modifypatientObj->birthDate = $date;
    $modifypatientObj->id = $_GET['id'];
    $modifypatientObj->lastName = $lastName;
    $modifypatientObj->firstName = $firstName;
    $modifypatientObj->phone = $phone;
    $modifypatientObj->mail = $mail;
    $modifypatientObj->modifypatient();
    if ($modifypatientObj->modifypatient() == true) {
        $messagemodifvalidee='la modification a bien été réalisée';
            }
}


