<h1>Exercice Hotel POO</h1>

<?php

spl_autoload_register(function($class){ //permet d'indiquer le chemin des classes utiliser.
    require 'classes/'.$class.'.php';
});

$hilton = new Hotel("Hilton","****","10 route de la gare",67000,"Strasbourg");
$chambreA = new Chambre(42,1,22.55,3,$hilton,true,true);
$chambreB = new Chambre(12,1,2.14,2,$hilton,true,false);
$firstReservation = new Reserv($chambreA,"14-02-2024","15-02-2024");
$secondReservation = new Reserv($chambreB,"16-02-2024","15-06-2025");

echo $hilton->showInfo();
echo $chambreA->__toString();
echo $chambreB->__toString();
echo "<br>".$firstReservation->__toString();
echo "<br>".$secondReservation->__toString();