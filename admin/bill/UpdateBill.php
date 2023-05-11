<?php
$id_bill = $_POST["id"];
$user =$_POST["user"];
$address =$_POST["address"];
$zip =$_POST["zip"];
$city =$_POST["city"];
$total =$_POST["total"];
$billing = $_POST["billing"];
$date = $_POST["date"];

$host="localhost";
$dbname= "cinema";
$port= "3306";
$charset= "UTF8";

$dsn ="mysql:host=".$host.";dbname=".$dbname.";port=".$port.";charset=".$charset;


try{
    
    $dbh = new PDO($dsn, "root","");
  
    $stmt = $dbh->prepare("UPDATE bill SET user=?, address=?, zip=?, city=?, total=?, billing=?, date=? 
    
    WHERE id_bill=?");

    $stmt->bindParam(1, $user);
    $stmt->bindParam(2, $address);
    $stmt->bindParam(3, $zip);
    $stmt->bindParam(4, $city);
    $stmt->bindParam(5, $total);
    $stmt->bindParam(6, $billing);
    $stmt->bindParam(7, $date);
    $stmt->bindParam(8, $id_bill);

    $stmt->execute();
    
}
catch(PDOException $error){
    echo $error->getMessage();
}

?>