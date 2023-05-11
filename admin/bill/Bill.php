<?php 

class Bill{

public $user;
public $address;
public $zip;
public $city;
public $total;
public $billing;
public $date;


function __construct($user, $address, $zip, $city, $total, $billing, $date)
{
    $this->user = $user;
    $this->address=$address;
    $this->zip=$zip;
    $this->city=$city;
    $this->total=$total;
    $this->billing=$billing;
    $this->date=$date;
}


public function createbill(){

}
// Affiche pour total, billing, date

public function readbill(){

}
// address pour zip,city, address

public function readAllbill(){

}

public function updatebill(){

}

public function deletebill(){

}

}


?>