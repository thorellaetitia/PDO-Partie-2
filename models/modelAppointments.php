
<?php

class appointments extends database { //on crée une class appointments dont le parent est database donc appointments héritent des attributs et methodes de database
//on définit les attributs de la table appointments car ils n'existent pas dans database

    public $id;
    public $date;
    public $idpatients;
    public $hour;
    public $dateHour;

    //exercice5
    //on crée une fonction qui va nous permettre de créer les RDV
    public function CreateAppointment() {
        $query = 'INSERT INTO `appointments` SET `idPatients` = :idpatients,`dateHour` = :dateHour';
        //injection d'éléments dans la base de données (lastName,fistName...)donc on prépare la requête
        //besoin de bindvalue pour faire le lien entre les éléments que l'on va rentrer dans la base et 
        //les éléments du formulaire.
        $appointmentsList = $this->database->prepare($query);
        //les bindvalue sécurisent l'injection d'éléments dans la base en spécifiant les valeurs sring entiers...
        $appointmentsList->bindValue(':idpatients', $this->idpatients, PDO::PARAM_INT);
        $appointmentsList->bindValue(':dateHour', $this->dateHour, PDO::PARAM_STR);
        //lorsque l'on prépare la requete on doit l'éxécuter
        return $appointmentsList->execute();
    }

   //exercice6
    //on crée une fonction qui va nous permettre d'afficher les RDV
    //pas d'injection d'éléments donc pas besoin de préparer ni éxécuter ni de bindvalue
    //je crée ma fonction ShowAllAppointments
    public function ShowAllAppointments() {
        //je stock ma requête dans une variable $query
        $query = 'SELECT * FROM appointments';
        //le résultat de ma requête je le stocke dans $resultQueryAllPatients
        //$this = correspond aux attributs de ma classe ex patients, à l'élément de ma classe (table patients) 
        $resultQueryAllAppointments = $this->database->query($query);
        //avec le this il faut cibler l'élément de ma classe
        //le fetchall permet de récupérer toutes les infos de la requete et les transformer ds un tableau d'objets
        $arrayAllAppointments = $resultQueryAllAppointments->fetchALL(PDO::FETCH_OBJ);
        return $arrayAllAppointments;
        //le résultat = on lui demande d'aller chercher les éléments firstname,lastname...etc donc il faut 
        //faire un fetchALL en utilisant l'objet PDO.
    } 
    
    
}