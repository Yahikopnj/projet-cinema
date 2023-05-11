<?php 
$id_movie = $_GET["id"];


$host="localhost";
$dbname= "cinema";
$port= "3306";
$charset= "UTF8";

$dsn ="mysql:host=".$host.";dbname=".$dbname.";port=".$port.";charset=".$charset;


try{

    $dbh = new PDO($dsn, "root","");

    $stmt = $dbh->prepare("SELECT * FROM movie WHERE id_movie= ?");
    $stmt->bindParam(1, $id_movie);
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
    <form action="UpdateMovie.php" method="post" enctype="multipart/form-data">

    <input type="hidden" value="<?= $movie["id_movie"]?>" name="id_movie">

<label for="name">Enter your movie name</label>
<input type="text" name="name" placeholder="movie name" id="name" value="<?= $movie["name"]?>">

<label for="time">time</label>
<input type="number" name="time" id="time" value="<?= $movie["time"]?>">

<label for="category">category</label>
<input type="text" name="category" placeholder="category" required id="category" value="<?= $movie["category"]?>">

<label for="director">director</label>
<input type="text" name="director" id="director" required value="<?= $movie["director"]?>">

<label for="rated">enter your birthday</label>
<input type="number" name="rated" id="rated" value="<?= $movie["rated"]?>">

<label for="studio">studio</label>
<input type="text" name="studio" id="studio" value="<?= $movie["studio"]?>">

<label for="language">language</label>
<select class="language" name="language" id="language" value="<?= $movie["language"]?>">
    <option disabled selected>language</option>
    <option value="vo">Vo</option>
    <option value="vostfr">Vostfr</option>
    <option value="vf">Vf</option>
</select>

<label for="plot">plot</label>
<input type="textarea" cols="150" rows="150" name="plot" id="plot" placeholder="plot" required value="<?= $movie["plot"]?>">

<label for="poster"></label>
<input type="file" name="poster" id="poster" value="<?= $movie["poster"]?>">

<input type="checkbox" required>
    <label for="checkbox"> I have read and I agree to the Terms & Conditions.</label>

<input type="submit">
    </form>
</body>
</html>