<?php

class Chambre{

    private int $room;
    private float $price;
    private bool $available;
    private bool $wifi;
    private int $bed;
    private Hotel $hotel;
    private array $reservs;
    private int $numberChambre;

    public function __construct(int $numberChambre,int $room, float $price, int $bed, Hotel $hotel, bool $available, bool $wifi)
    {
        $this->room = $room;
        $this->price= $price;
        $this->available = $available;
        $this->wifi = $wifi;
        $this->bed = $bed;
        $this->hotel = $hotel;
        $this->hotel -> countChambres($this);
        $this->reservs = [];
        $this->numberChambre = $numberChambre;
    }

    public function getRoom(): int {
        return $this->room;
    }


    public function setRoom(int $room): self {
        $this->room = $room;
        return $this;
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

    public function getNumberChambre(): int {
        return $this->numberChambre;
    }

    public function setNumberChambre(int $numberChambre): self {
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
        }else return "chambre est indisponible" ;

    }

    public function countReservs(Reserv $reserv){
        return $this->reservs[] = $reserv;
    }


    
    public function __toString()
    {
        return "<br>Chambre ".$this->getNumberChambre().", ".$this->getBed()." lits, ".$this->connectedWifi($this->wifi).", la ".$this->availability($this->available);
    }

}