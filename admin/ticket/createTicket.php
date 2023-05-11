<?php

$price = $_POST["price"];
$quantity = $_POST["quantity"];
$discount = $_POST["discount"];
$seat = $_POST["seat"];
$movie = $_POST["movie"];
$hourly = $_POST["hourly"];

$host = "localhost";
$dbname= "cinema";
$port="3306";
$dsn = "mysql:host=".$host.";dbname=".$dbname.";port=".$port.";charset=utf8";

try{
    $dbh = new PDO($dsn, "root", "");
$requete = $dbh->prepare("INSERT INTO ticket (price, quantity, discount, seat, movie, hourly) 
    VALUES (?, ?, ?, ?, ?, ?)");
// bind_param();
// execute 

 $userr= $dbh->lastInsertId();

$requete = $dbh->prepare("INSERT INTO  (user, quantity, discount, seat, movie, hourly) 
VALUES (?, ?, ?, ?, ?, ?)");


    $requete->bindParam(1, $price);
    $requete->bindParam(2, $quantity);
    $requete->bindParam(3, $discount);
    $requete->bindParam(4, $seat);
    $requete->bindParam(5, $movie);
    $requete->bindParam(6, $hourly);
    
    $requete->execute();
}catch(PDOException $exception){
echo $exception->getMessage();
}

?>