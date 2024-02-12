<?php

class Reserv{

    private Client $client;

    public function __construct(Client $client){
        $this->client = $client;
    }


    public function getClient(): Client {
        return $this->client;
    }

    public function setClient(Client $client): self {
        $this->client = $client;
        return $this;
    }


}