<h1>Exercice Hotel POO</h1>

<?php

spl_autoload_register(function($class){ //permet d'indiquer le chemin des classes utiliser.
    require 'classes/'.$class.'.php';
});

$hilton = new Hotel("Hilton","****","10 route de la gare",67000,"Strasbourg");
$chambreA = new Chambre(42,22.55,3,true,$hilton,);
$chambreB = new Chambre(12,2.14,2,'',$hilton,);
$chambreC = new Chambre(25,60.30,6,'',$hilton);
$chambreD = new Chambre(4,10,4,true,$hilton);
$firstReservation = new Reserv($chambreA,"14-02-2024","15-02-2024",$hilton, $client1);
//$client1 = new Client("Albus","Clara",$firstReservation);

$secondReservation = new Reserv($chambreB,"16-02-2024","15-06-2025",$hilton,$client1);



echo $hilton->showInfo();
echo $chambreA->__toString();
echo $chambreB->__toString();
echo $chambreC->__toString();
echo $chambreD->__toString();
echo "<br><br>".$firstReservation->__toString();
echo "<br><br>".$secondReservation->__toString();
