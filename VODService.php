<?php
class VODService {
    private string $name;
    private $price;

    public function __construct(){
        $this->getName();
        $this->getPrice();
    }

    // NAME
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    // PRICE
    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price): void
    {
        $this->price = $price;
    }

}