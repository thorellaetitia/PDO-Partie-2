<?php

require 'models/modelDatabase.php';
require 'models/modelPatients.php';

//on instancie un nouvel objet clients
$ListpatientsObj = new patients();
$Arraypatients = $ListpatientsObj->ShowAllPatients();