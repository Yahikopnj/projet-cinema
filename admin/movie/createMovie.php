<?php
$name = $_POST["name"];
$time = $_POST["time"];
$category = $_POST["category"];
$director = $_POST["director"];
$rated = $_POST["rated"];
$studio = $_POST["studio"];
$language = $_POST["language"];
$plot = $_POST["plot"];


$poster = $_FILES['poster']['name'];
$image_tmp = $_FILES['poster']['tmp_name'];



$host = "localhost";
$dbname= "cinema";
$port="3306";
$dsn = "mysql:host=".$host.";dbname=".$dbname.";port=".$port.";charset=utf8";

try{
    $dbh = new PDO($dsn, "root", "");
    $requete = $dbh->prepare("INSERT INTO`movie`(`name`,`time`,`category`,`director`,`rated`,`studio`, `language`,`plot`,`poster`)
    VALUES(?, ?, ?, ?, ?, ?, ?, ?, ? )");
    
    $requete->bindParam(1, $name);
    $requete->bindParam(2, $time);
    $requete->bindParam(3, $category);
    $requete->bindParam(4, $director);
    $requete->bindParam(5, $rated);
    $requete->bindParam(6, $studio);
    $requete->bindParam(7, $language);
    $requete->bindParam(8, $plot);
    $requete->bindParam(9, $poster);

    $requete->execute();
}catch(PDOException $exception){
echo $exception->getMessage();
}



?>