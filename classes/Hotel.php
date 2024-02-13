<?php

class Hotel{

    private string $name;
    private string $star;
    private string $address;
    private int $postalCode;
    private string $town;
    private array $chambres;
    private array $reservs;
    
    
    public function __construct(string $name, string $star, string $address,int $postalCode, string $town)
    {
        $this->name = $name;
        $this->star = $star;
        $this->address =$address;
        $this->postalCode = $postalCode;
        $this->town = $town;
        $this->chambres = [];
        $this->reservs = [];
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
    
    public function getReservs(): array {
        return $this->reservs;
    }


    public function setReservs(array $reservs): self {
        $this->reservs = $reservs;
        return $this;
    }
    
    public function countChambres(Chambre $chambre){
        return $this->chambres[] = $chambre;
    }

    public function countReservs(Reserv $reserv){
        return $this->reservs[] = $reserv;
    }
    
    public function showInfo(){
        return "<h3>".$this->name." ".$this->star." ".$this->town."</h3> ".$this->address." ".$this->postalCode." ". $this->town."<br> Nombre de chambres : ".count($this->getChambres($this))."  <br>Nombre de chambres libres : <br>Nombre de chambre réserver : ".count($this->getReservs($this));
    }




}