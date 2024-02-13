<?php

class Client{

    private string $firstName;
    private string $lastName;
    private array $reservs;
    // private Chambre $chambre;
    // private Hotel $hotel;


    public function __construct(string $firstName, string $lastName){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->reservs =[];
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


    public function getReservs(): array {
        return $this->reservs;
    }

    public function setReservs(array $reservs): self {
        $this->reservs = $reservs;
        return $this;
    }

   public function addReservs(Reserv $reserv){
        return $this->reservs[] = $reserv;

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

    public function showReservs(){

        foreach($this->getReservs() as $resa){
 
            return var_dump($resa);
        }
     }
 

    public function __toString()
    {
        return $this->getFirstName()." ". $this->getLastName();
    }

}