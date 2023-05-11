<?php
$lastname = $_POST["lastname"];
$firstname = $_POST["firstname"];
$email = $_POST["email"];
$password = $_POST["password"];
$birthday = $_POST["birthday"];


$host = "localhost";
$dbname= "cinema";
$port="3306";
$dsn = "mysql:host=".$host.";dbname=".$dbname.";port=".$port.";charset=utf8";

try{
    $dbh = new PDO($dsn, "root", "");
    $requete = $dbh->prepare("INSERT INTO`user`(`lastname`,`firstname`,`email`,`password`,`birthday`)
    VALUES(?, ?, ?, ?, ? )");
    
    $requete->bindParam(1, $lastname);
    $requete->bindParam(2, $firstname);
    $requete->bindParam(3, $email);
    $requete->bindParam(4, $password);
    $requete->bindParam(5, $birthday);


    $requete->execute();
}catch(PDOException $exception){
echo $exception->getMessage();
}



?>
