<?php

class Chambre{

    private int $room;
    private float $price;
    private bool $available;
    private bool $wifi;
    private int $bed;
    private Hotel $hotel;

    public function __construct(int $room, float $price, int $bed, Hotel $hotel)
    {
        $this->room = $room;
        $this->price= $price;
        $this->available = true;
        $this->wifi = true;
        $this->bed = $bed;
        $this->hotel = $hotel;
        $this->hotel -> reservedChambres($this);
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

}