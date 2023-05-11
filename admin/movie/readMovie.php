<?php 
$id = $_GET["id"];

$host="localhost";
$dbname="cinema";
$port="3306";
$charset="UTF8";

$dsn ="mysql:host=".$host.";dbname=".$dbname.";port=".$port.";charset=".$charset;

try{
    
    $dbh = new PDO($dsn, "root","");
    
    $stmt = $dbh->prepare("SELECT * FROM `movie` WHERE id_movie= ?");

    $stmt->bindParam(1, $id);
    $stmt->execute();

    $movie = $stmt->fetch();
}
catch(PDOException $error){
    echo $error->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <div>
            <ul>
                <li><?= $movie["name"]?></li>
                <a href="./formUpdateMovie.php?id=<?= $movie["id_movie"]?>">modifier</a>
            </ul>
        </div>
    </section>
</body>
</html>
