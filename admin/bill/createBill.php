<?php
if(isset($_POST["submit"])){
$user =$_POST["user"];
$address =$_POST["address"];
$zip =$_POST["zip"];
$city =$_POST["city"];
$total =$_POST["total"];
$billing =$_POST["billing"];
$date =$_POST["date"];
$user =(int)$user;
$total =(int)$total;






$host="localhost";
$dbname= "cinema";
$port= "3306";
$charset= "UTF8";

$dsn ="mysql:host=".$host.";dbname=".$dbname.";port=".$port.";charset=".$charset;


try{
    //essaie de te connecter en utilisant PDO
    $dbh = new PDO($dsn, "root","");

    //prepapre ma requete pour inserer donnÃ©e
    $requete = $dbh->prepare("INSERT INTO `bill` (`user`, `address`, `zip`, `city`, `total`, `billing`, `date`) 
    VALUES (?, ?, ?, ?, ?, ?, ?)");
    
    //remplace les ? de la requete par la valeur de chaque variable
    $requete->bindParam(1, $user);
    $requete->bindParam(2, $address);
    $requete->bindParam(3, $zip);
    $requete->bindParam(4, $city);
    $requete->bindParam(5, $total);
    $requete->bindParam(6, $billing);
    $requete->bindParam(7, $date);
    

    //execute la requete
    $requete->execute();
    
}catch(PDOException $erreur){
    echo $erreur->getMessage();
}}