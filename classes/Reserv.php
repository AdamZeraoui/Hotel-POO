<?php

class Reserv{

    private Chambre $chambre;
    private DateTime $startReserv;
    private DateTime $endReserv;


    public function __construct(Chambre $chambre,string $startReserv, string $endReserv){
        $this->chambre = $chambre;
        $this->chambre -> countReservs($this);
        $this->startReserv = new DateTime($startReserv);
        $this->endReserv = new DateTime($endReserv);
    }


    public function getChambre(): Chambre {
        return $this->chambre;
    }

    public function setChambre(Chambre $chambre): self {
        $this->chambre = $chambre;
        return $this;
    }

    public function getStartReserv(): DateTime {
        return $this->startReserv;
    }

    public function setStartReserv(DateTime $startReserv): self {
        $this->startReserv = $startReserv;
        return $this;
    }


    public function getEndReserv(): DateTime {
        return $this->endReserv;
    }


    public function setEndReserv(DateTime $endReserv): self {
        $this->endReserv = $endReserv;
        return $this;
    }

    public function __toString()
    {
        return $this->startReserv->format("d/m/y")." au ".$this->endReserv->format("d/m/y");
    }
}