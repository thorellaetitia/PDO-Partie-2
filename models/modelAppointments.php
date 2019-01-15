
/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/
<?php

class appointments extends database { //on crée une class appointments dont le parent est database donc appointments héritent des attributs et methodes de database
//on définit les attributs de la table appointments car ils n'existent pas dans database

    public $id;
    public $date;
    public $firstName;
    public $lastName;
    public $idpatients;
    public $time;
    public $department;

    //exercice5
    //on crée une fonction qui va nous permettre de créer les patients
    public function CreateAppointment() {
        $query = 'INSERT INTO `appointments` SET `lastname` = :lastName,'
                . ' `firstname` = :firstName,'     //:firstname = marqueur nominatif
                . '`idpatients` = :idpatients,'
                . ' `date` = :date,'
                . ' `time` = :time,'
                . ' `department` = :department';
        //injection d'éléments dans la base de données (lastName,fistName...)donc on prépare la requête
        //besoin de bindvalue pour faire le lien entre les éléments que l'on va rentrer dans la base et 
        //les éléments du formulaire.
        $appointmentsList = $this->database->prepare($query);
        //les bindvalue sécurisent l'injection d'éléments dans la base en spécifiant les valeurs sring entiers...
        $appointmentsList->bindValue(':firstName', $this->firstName, PDO::PARAM_STR);
        $appointmentsList->bindValue(':lastName', $this->lastName, PDO::PARAM_STR);
        $appointmentsList->bindValue(':idpatients', $this->idpatients, PDO::PARAM_STR);
        $appointmentsList->bindValue(':date', $this->date, PDO::PARAM_STR);
        $appointmentsList->bindValue(':time', $this->time, PDO::PARAM_STR);
        $appointmentsList->bindValue(':department', $this->department, PDO::PARAM_STR);
        //lorsque l'on prépare la requete on doit l'éxécuter
        return $appointmentsList->execute();
    }

}
