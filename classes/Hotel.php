<?php

class Hotel{

    private string $name;
    private string $star;
    private string $address;
    private int $postalCode;
    private string $town;
    private array $chambres;
    private int $chambreMax;
    private int $freeChambre;
    
    
    public function __construct(string $name, string $star, string $address,int $postalCode, string $town, int $chambreMax)
    {
        $this->name = $name;
        $this->star = $star;
        $this->address =$address;
        $this->postalCode = $postalCode;
        $this->town = $town;
        $this->chambres = [];
        $this->chambreMax = $chambreMax;
        $this->freeChambre = 0;
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

    public function getChambres(): array {
        return $this->chambres;
    }

    public function setChambres(array $chambres): self {
        $this->chambres = $chambres;
        return $this;
    }

    public function getChambreMax(): int {
        return $this->chambreMax;
    }


    public function setChambreMax(int $chambreMax): self {
        $this->chambreMax = $chambreMax;
        return $this;
    }

    public function getFreeChambre(): int {
        return $this->freeChambre;
    }

    public function setFreeChambre(int $freeChambre): self {
        $this->freeChambre = $freeChambre;
        return $this;
    }
    
    public function reservedChambres(Chambre $chambre){
        return $this->chambres[] = $chambre;
    }

    public function freeChambres(){
        return $this-> freeChambre = $this->chambreMax - count($this->chambres);

    }


    
    public function showInfo(){
        return "<h3>".$this->name." ".$this->star." ".$this->town."</h3> ".$this->address." ".$this->postalCode." ". $this->town."<br> Nombre de chambres : ". $this->chambreMax."<br>Nombre de chambres réservées : ".count($this->chambres)." <br>Nombre de chambres libres : ". $this->freeChambres();
    }



}