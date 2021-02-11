<?php
class VODService {
    private string $name;
    private int $price;

    public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }

    // NAME
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): VODService
    {
        $this->name = $name;
        return $this;
    }

    // PRICE
    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price): VODService
    {
        $this->price = $price;
        return $this;
    }

}