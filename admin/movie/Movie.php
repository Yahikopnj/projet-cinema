<?php 

class Movie{

public $time;
public $category;
public $director;
public $rated;
public $studio;
public $language;



function __construct($time, $category, $director, $rated, $studio, $language)
{
    $this->time = $time;
    $this->category=$category;
    $this->director=$director;
    $this->rated=$rated;
    $this->studio=$studio;
    $this->language=$language;

}


public function createmovie(){

}
// Affiche pour total, billing, date

public function readmovie(){

}
// address pour zip,city, address

public function readAllmovie(){

}

public function updatemovie(){

}

public function deletemovie(){

}

}


Movie::createmovie();


?>