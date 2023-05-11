<?php

$host="localhost";
$dbname= "cinema";
$port= "3306";
$charset= "UTF8";

$dsn ="mysql:host=".$host.";dbname=".$dbname.";port=".$port.";charset=".$charset;

$id_user = $_GET["id"];

try{
    
    $dbh = new PDO($dsn, "root","");
    
    $stmt = $dbh->prepare("DELETE FROM user WHERE id_user=?;");
    
    $stmt->bindParam(1, $id_user);
    $stmt->execute();

    $bill = $stmt->fetch();

  echo "c'est bon c'est supp mon reuf ";
} catch(PDOException $error){
    echo $error->getMessage();
}
?>