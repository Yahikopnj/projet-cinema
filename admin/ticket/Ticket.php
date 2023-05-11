<?php 

class Ticket{

public $price;
public $quantity;
public $discount;
public $seat;
public $movie;
public $hourly;



function __construct($price, $quantity, $discount, $seat, $movie, $hourly)
{
    $this->price = $price;
    $this->quantity=$quantity;
    $this->discount=$discount;
    $this->seat=$seat;
    $this->movie=$movie;
    $this->hourly=$hourly;

}


public function createticket(){

}
// Affiche pour total, billing, date

public function readticket(){

}
// address pour zip,city, address

public function readAllticket(){

}

public function updateticket(){

}

public function deleteticket(){

}

}


?>