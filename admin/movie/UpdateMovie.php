<?php 

$id_movie = $_POST["id_movie"];
$name = $_POST["name"];
$time = $_POST["time"];
$category = $_POST["category"];
$director = $_POST["director"];
$rated = $_POST["rated"];
$studio = $_POST["studio"];
//$language = $_POST["language"];
$plot = $_POST["plot"];
//$poster = $_FILES["poster"];


$host = "localhost";
$dbname= "cinema";
$port="3306";
$dsn = "mysql:host=".$host.";dbname=".$dbname.";port=".$port.";charset=utf8";

try{
    $dbh = new PDO($dsn, "root", "");
    $requete = $dbh->prepare("UPDATE`movie`SET `name` = ?, `time` = ?, category = ?, `director`= ?, rated = ?, studio = ?, `language` = ?, plot = ?, poster = ?
     WHERE id_movie = ?");
    
    $requete->bindParam(1, $name);
    $requete->bindParam(2, $time);
    $requete->bindParam(3, $category);
    $requete->bindParam(4, $director);
    $requete->bindParam(5, $rated);
    $requete->bindParam(6, $studio);
    //$requete->bindParam(7, $language);
    $requete->bindParam(8, $plot);
    //$requete->bindParam(9, $poster);
    $requete->bindParam(10, $id_movie);


    $requete->execute();
}catch(PDOException $exception){
echo $exception->getMessage();
}



?>