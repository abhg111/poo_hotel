<h1>POO Hotels</h1>

<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});


$hilton = new Hotel ("Hilton", "10 route de la Gare", "Strasbourg", "67100");
$chambre1 = new Chambre ("Chambre 1", " 2 lits", "120", "non", $hilton);





echo $hilton->afficherNbChambre();