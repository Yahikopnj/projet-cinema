<?php

$host="localhost";
$dbname="cinema";
$port="3306";
$charset="UTF8";

$dsn ="mysql:host=".$host.";dbname=".$dbname.";port=".$port.";charset=".$charset;

try{
    $dbh = new PDO($dsn, "root","");

    $stmt = $dbh->query("SELECT * FROM movie;");

    $movies = $stmt->fetchAll();
}
catch(PDOException $error){
    echo $error->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
    <body>
        <section>
            <?php foreach($movies as $movie):?>
                <div>
                    <ul>
                        <li><?= $movie["name"];?></li>
                        <li><?= $movie["time"];?></li>
                        <li><?= $movie["category"];?></li>
                        <li><?= $movie["director"];?></li>
                        <li><?= $movie["rated"];?></li>
                        <li><?= $movie["studio"];?></li>
                        <li><?= $movie["language"];?></li>
                        <li><?= $movie["plot"];?></li>
                        <li><?= $movie["poster"];?></li>
                    </ul>
                    <a href="./readMovie.php?id=<?= $movie["id_movie"]?>">voir les details</a>
                    <a href="./formUpdateMovie.php?id=<?= $movie["id_movie"]?>">modifier</a>
                </div>
                <?php endforeach;?>
        </section>
    </body>
</html>