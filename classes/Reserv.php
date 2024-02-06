<?php

class Reserv{

    private Chambre $chambre;
    private Client $client;
    private array $rooms;

    public function __construct(Chambre $chambre,Client $client){
        $this->client = $client;
        $this->chambre = $chambre;
        $this->rooms = [];
    }

    public function getChambre(): Chambre {
        return $this->chambre;
    }


    public function setChambre(Chambre $chambre): self {
        $this->chambre = $chambre;
        return $this;
    }


    public function getClient(): Client {
        return $this->client;
    }

    public function setClient(Client $client): self {
        $this->client = $client;
        return $this;
    }


    public function getRooms(): array {
        return $this->rooms;
    }

    public function setRooms(array $rooms): self {
        $this->rooms = $rooms;
        return $this;
    }

public function addRooms(Chambre $chambre){
  return $this->rooms [] = $chambre;
}

public function showRoom(){
$result = "chambre ".$this->rooms;
return $result;
}

}