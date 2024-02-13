<?php

class Client{

    private string $firstName;
    private string $lastName;
    private array $reserv;
    // private Chambre $chambre;
    // private Hotel $hotel;


    public function __construct(string $firstName, string $lastName){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->reserv =[];
        // $this->hotel = $hotel;
        // $this->hotel->addClients($this);
    }


    public function getFirstName(): string {
        return $this->firstName;
    }


    public function setFirstName(string $firstName): self {
        $this->firstName = $firstName;
        return $this;
    }


    public function getLastName(): string {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self {
        $this->lastName = $lastName;
        return $this;
    }


    public function getReserv(): array {
        return $this->reserv;
    }

    public function setReserv(array $reserv): self {
        $this->reserv = $reserv;
        return $this;
    }
 
    // public function getChambre(): Chambre {
    //     return $this->chambre;
    // }


    // public function setChambre(Chambre $chambre): self {
    //     $this->chambre = $chambre;
    //     return $this;
    // }

    // public function getHotel(): Hotel {
    //     return $this->hotel;
    // }


    // public function setHotel(Hotel $hotel): self {
    //     $this->hotel = $hotel;
    //     return $this;
    // }

    public function __toString()
    {
        return $this->getFirstName()." ". $this->getLastName();
    }

}