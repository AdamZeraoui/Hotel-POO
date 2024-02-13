<?php

class Reserv{

    private Chambre $chambre;
    private Hotel $hotel;
    //private Client $client;
    private DateTime $startReserv;
    private DateTime $endReserv;
    private array $chambres;


    public function __construct(Chambre $chambre,string $startReserv, string $endReserv,Hotel $hotel, ){
        $this->chambre = $chambre;
        $this->startReserv = new DateTime($startReserv);
        $this->endReserv = new DateTime($endReserv);
        $this->hotel = $hotel;
        $this->hotel -> addReservs($this);
        $this->chambre->setAvailable(false);
        //$this->client = $client;
        //$this->client->__toString();
    }


    public function getChambre(): Chambre {
        return $this->chambre;
    }

    public function setChambre(Chambre $chambre): self {
        $this->chambre = $chambre;
        return $this;
    }

    public function getStartReserv(): DateTime {
        return $this->startReserv;
    }

    public function setStartReserv(DateTime $startReserv): self {
        $this->startReserv = $startReserv;
        return $this;
    }


    public function getEndReserv(): DateTime {
        return $this->endReserv;
    }


    public function setEndReserv(DateTime $endReserv): self {
        $this->endReserv = $endReserv;
        return $this;
    }

    public function getChambres(): array {
        return $this->chambres;
    }


    public function setChambres(array $chambres): self {
        $this->chambres = $chambres;
        return $this;
    }

    public function getHotel(): Hotel {
        return $this->hotel;
    }


    public function setHotel(Hotel $hotel): self {
        $this->hotel = $hotel;
        return $this;
    }

   // public function getClient(): Client {
   //     return $this->client;
   // }


    //public function setClient(Client $client): self {
    //    $this->client = $client;
    //    return $this;
    //}
    public function __toString()
    {
        return "Reservation de  ". $this->chambre." du ".$this->startReserv->format("d/m/y")." au ".$this->endReserv->format("d/m/y");
    }


}