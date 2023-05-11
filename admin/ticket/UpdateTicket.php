<?php

$id_ticket = $_POST["id"];
$price = $_POST["price"];
$quantity = $_POST["quantity"];
$discount = $_POST["discount"];
$seat = $_POST["seat"];
$movie = $_POST["movie"];
$hourly = $_POST["hourly"];


$host="localhost";
$dbname= "cinema";
$port= "3306";
$charset= "UTF8";

$dsn ="mysql:host=".$host.";dbname=".$dbname.";port=".$port.";charset=".$charset;


try{
    
    $dbh = new PDO($dsn, "root","");
  
    $stmt = $dbh->prepare("UPDATE ticket SET price=?, quantity=?, discount=?, seat=?, movie=?, hourly=? 
    
    WHERE id_ticket=?");

    $stmt->bindParam(1, $price);
    $stmt->bindParam(2, $quantity);
    $stmt->bindParam(3, $discount);
    $stmt->bindParam(4, $seat);
    $stmt->bindParam(5, $movie);
    $stmt->bindParam(6, $hourly);
    $stmt->bindParam(7, $id_ticket);

    $stmt->execute();
    
}
catch(PDOException $error){
    echo $error->getMessage();
}

?>