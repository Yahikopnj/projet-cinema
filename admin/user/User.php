<?php 

class User{

private $lastname;
private $firstname;
private $email;
private $password;
private $birthday;



function __construct($lastname, $firstname, $email, $birthday, $password)
{
    $this->lastname = $lastname;
    $this->firstname=$firstname;
    $this->email=$email;
    $this->birthday=$birthday;
    $this->password=$password;

}

public function setLastname($param){
    $this->lastname = $param;
}

public function getLastname(){
    return $this->lastname;
}


public function setFirstname($param){
    $this->lastname = $param;
}

public function getFirstname(){
    return $this->lastname;
}


public function setEmail($param){
    $this->lastname = $param;
}

public function getEmail(){
    return $this->lastname;
}


public function setBirthday($param){
    $this->lastname = $param;
}

public function getBirthday(){
    return $this->lastname;
}


public function setPassword($param){
    $this->lastname = $param;
}

public function getPassword(){
    return $this->lastname;
}

// public function createuser(){

// }
// // Affiche pour total, billing, date

// public function readuser(){

// }
// address pour zip,city, address

// public function readAlluser(){

// }

// public function updateuser(){

// }

// public function deleteuser(){

// }



}


?>