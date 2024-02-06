<?php

class Hotel{

    private string $name;
    private string $star;
    private string $address;
    private int $postalCode;
    private string $town;
    
    
    public function __construct(string $name, string $star, string $address,int $postalCode, string $town)
    {
        $this->name = $name;
        $this->star = $star;
        $this->address =$address;
        $this->postalCode = $postalCode;
        $this->town = $town;

    }


    public function getName(): string {
        return $this->name;
    }

  
    public function setName(string $name): self {
        $this->name = $name;
        return $this;
    }

    public function getStar(): string {
        return $this->star;
    }

    public function setStar(string $star): self {
        $this->star = $star;
        return $this;
    }

    public function getAddress(): string {
        return $this->address;
    }

    public function setAddress(string $address): self {
        $this->address = $address;
        return $this;
    }

    public function getPostalCode(): int {
        return $this->postalCode;
    }

    public function setPostalCode(int $postalCode): self {
        $this->postalCode = $postalCode;
        return $this;
    }

    public function getTown(): string {
        return $this->town;
    }

    public function setTown(string $town): self {
        $this->town = $town;
        return $this;
    }

    public function getInfo(){
        return "<h3>".$this->name." ".$this->star." ".$this->town."</h3> ".$this->address." ".$this->postalCode." ". $this->town;
    }


}