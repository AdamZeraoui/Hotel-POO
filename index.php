<h1>Exercice Hotel POO</h1>

<?php

spl_autoload_register(function($class){ //permet d'indiquer le chemin des classes utiliser.
    require 'classes/'.$class.'.php';
});

$hilton = new Hotel("Hilton","****","10 route de la gare","67000","Strasbourg");
$chambreA = new Chambre("42",22.55,3,true,$hilton,);
$chambreB = new Chambre("12",2.14,2,'',$hilton,);
$chambreC = new Chambre("25",60.30,6,'',$hilton);
$chambreD = new Chambre("4",10,4,true,$hilton);
$client1= new Client("Albus","Clara");
$client2= new Client("Avinne","Shanon");
$reservationAlbus = new Reserv($chambreA,$client1,"14-02-2024","15-02-2024");
$reservationAlbus2 = new Reserv($chambreB,$client1,"16-02-2024","15-03-2024");
$reservationAvinne = new Reserv($chambreC,$client2,"14-02-2024","16-02-2024");
//format d'une reservation (Chambre chambre, Client client, datedebut, datefin)



echo "<h2>".$hilton->__toString()."</h2>";
echo $hilton->showHotel();
echo "<h3>Réservation de ".$hilton->__toString()."</h3>";

$reservationsCount = count($hilton->getReservs());
//$resaCount=count(getClient()->getReservs());

echo "<p>".($reservationsCount > 0 ? "$reservationsCount réservations" : "Il n'y a pas de réservation")."</p>";

foreach([$client1, $client2] as $client) {
    echo $client->showReservs();
}

// echo $client1->showReservs($hilton);
// echo $client2->showReservs($hilton);


// foreach([$client1, $client2] as $client) {
//     $resaCount=count($client->getReservs());
//     if($client==$client1){

//         echo "<h3>Reservation de ".$client1->__toString()."</h3>";
//         echo($resaCount > 0 ? "$resaCount réservations<br>" : "Il n'y a pas de réservation<br>");
//         echo $reservationAlbus->__toString();
//         echo "<br>".$reservationAlbus2->__toString();
//     }elseif($client == $client2){
//         echo "<h3>Reservation de ".$client2->__toString()."</h3>";
//         echo "<br>".$reservationAvinne->__toString();
//     }
// }
foreach([$client1, $client2] as $client) {
    echo "<h3>Réservations de ".$client->__toString()."</h3>";
    $reservations = $client->getReservs();
    $resaCount = count($reservations);
    echo ($resaCount > 0 ? "$resaCount réservations<br>" : "Il n'y a pas de réservation<br>");
    
    foreach ($reservations as $reservation) {
        echo $reservation->__toString() . "<br>";
    }
}





echo "<h3>Statuts des chambres de ".$hilton->__toString()."</h3>";
echo  $chambreA->__toString().' '. $chambreA->showStat();
echo "<br>".$chambreB->__toString() .' '. $chambreB->showStat();
echo "<br>".$chambreC->__toString().' '. $chambreC->showStat();
echo "<br>".$chambreD->__toString().' '. $chambreD->showStat();

//echo "<br><br>".$secondReservation->__toString();
//echo "<br><br>".$client1->__toString();
