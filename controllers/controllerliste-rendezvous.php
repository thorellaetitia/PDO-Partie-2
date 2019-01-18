<?php

require 'models/modelDatabase.php';
require 'models/modelAppointments.php';

//on instancie un nouvel objet clients
$ListappointmentsObj = new appointments();
$arrayAllAppointments= $ListappointmentsObj->ShowAllAppointments();

