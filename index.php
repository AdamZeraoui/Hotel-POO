<h1>Exercice Hotel POO</h1>

<?php

spl_autoload_register(function($class){ //permet d'indiquer le chemin des classes utiliser.
    require 'classes/'.$class.'.php';
});

$hilton = new Hotel("Hilton","****","10 route de la gare",67000,"Strasbourg");
$chambreA = new Chambre(1,22.55,3,$hilton,true,true);
$chambreB = new Chambre(1,2.14,1,$hilton,true,'');
$firstReservation = new Reserv($chambreA,"14-02-2024","15-02-2024");

echo $hilton->showInfo();
echo $chambreA->__toString();
//je dois lier les class entre elle
echo "<br>".$firstReservation->__toString();
echo "<br>".$chambreA->testVu();