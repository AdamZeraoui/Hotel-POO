<?php

class Chambre{

    private int $room;
    private float $price;
    private bool $available;
    private bool $wifi;
    private array $rooms; //a déplacer dans Hotel

    public function __construct(int $room, float $price)
    {
        $this->room = $room;
        $this->price= $price;
        $this->available = true;
        $this->wifi = true;
        $this->rooms=[];
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

    public function getRooms(): array {
        return $this->rooms;
    }


    public function setRooms(array $rooms): self {
        $this->rooms = $rooms;
        return $this;
    }

//public function addRoom(){
//  return $this->rooms [] = $room;
//}

//public function showRoom(){
////$result = "chambre ".$this->rooms;
////return $result;
//}

}