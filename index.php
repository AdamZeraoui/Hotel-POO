<h1>Exercice Hotel POO</h1>

<?php

spl_autoload_register(function($class){ //permet d'indiquer le chemin des classes utiliser.
    require 'classes/'.$class.'.php';
});

$hilton = new Hotel("Hilton","****","10 route de la gare",67000,"Strasbourg");
$chambreA = new Chambre(1,22.55);

echo $hilton->getInfo();
//echo $chambreA->addRoom($this);
echo "<br>".$chambre->getRooms();

//je dois lier les class entre elle