<?php

class database { //on crée une class database

    public $database;    //attribut database

    public function __construct() { //utilisation méthode magique double underscore construct
        //connexion à la base
        try {
            $this->database = new PDO('mysql:host=localhost;dbname=hospitalE2N', 'fiadone', 'fiadone', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); //pour afficher les erreurs sql
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public function __destruct() {  //utilisation méthode magique destruct
        $this->database = NULL;
    }

}