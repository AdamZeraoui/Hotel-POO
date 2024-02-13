<?php

class Chambre{

    private string $numberChambre;
    private float $price;
    private bool $available;
    private bool $wifi;
    private int $bed;
    private Hotel $hotel;
    private array $reservs;
    // private array $clients;
   

    public function __construct(string $numberChambre, float $price, int $bed, bool $wifi, Hotel $hotel)
    {

        $this->price= $price;
        $this->available = true;
        $this->wifi = $wifi;
        $this->bed = $bed;
        $this->hotel = $hotel;
        $this->hotel -> addChambres($this);
        $this->reservs = [];
   //     $this->clients = [];
        $this->numberChambre = $numberChambre;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function setPrice(float $price): self {
        $this->price = $price;
        return $this;
    }


    public function getAvailable(): bool {
        return $this->available;
    }


    public function setAvailable(bool $available): self {
        $this->available = $available;
        return $this;
    }


    public function getWifi(): bool {
        return $this->wifi;
    }


    public function setWifi(bool $wifi): self {
        $this->wifi = $wifi;
        return $this;
    }

    public function getHotel(): Hotel {
        return $this->hotel;
    }

    public function setHotel(Hotel $hotel): self {
        $this->hotel = $hotel;
        return $this;
    }


    public function getBed(): int {
        return $this->bed;
    }


    public function setBed(int $bed): self {
        $this->bed = $bed;
        return $this;
    }

    public function getReservs(): array {
        return $this->reservs;
    }


    public function setReservs(array $reservs): self {
        $this->reservs = $reservs;
        return $this;
    }


    //public function getClients(): array {
    //    return $this->clients;
    //}

    //public function setClients(array $clients): self {
    //    $this->clients = $clients;
    //    return $this;
    //}


    public function getNumberChambre(): string {
        return $this->numberChambre;
    }

    public function setNumberChambre(string $numberChambre): self {
        $this->numberChambre = $numberChambre;
        return $this;
    }

    
    public function connectedWifi($wifi){
        if($wifi == true){
            return "chambre avec Wifi";
        }else return "chambre sans Wifi";

    }

    public function availability($available){
        if($available == true){
            return "chambre est disponible";
        }else return "chambre est réservée" ;

    }

    public function addReservs(Reserv $reserv){
        return $this->reservs[] = $reserv;
    
    }


    
    public function __toString()
    {
        return "Chambre ".$this->getNumberChambre();
    }

}
// .", ".$this->getBed()." lits, ".$this->connectedWifi($this->wifi).", la ".$this->availability($this->available)