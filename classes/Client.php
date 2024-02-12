<?php

class Client{

    private string $firstName;
    private string $lastName;
    private Reserv $reserv;

    public function __construct(string $firstName, string $lastName, Reserv $reserv){

        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->reserv =$reserv;
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


    public function getReserv(): Reserv {
        return $this->reserv;
    }

    public function setReserv(Reserv $reserv): self {
        $this->reserv = $reserv;
        return $this;
    }
}