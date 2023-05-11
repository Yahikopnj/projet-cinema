<?php 

$id_ticket = $_GET["id"];

$host="localhost";
$dbname= "cinema";
$port= "3306";
$charset= "UTF8";

$dsn ="mysql:host=".$host.";dbname=".$dbname.";port=".$port.";charset=".$charset;


try{
    
    $dbh = new PDO($dsn, "root","");
    $stmt = $dbh->prepare("SELECT * FROM ticket WHERE id_ticket=?;");

    $stmt->bindParam(1, $id_ticket);
    $stmt->execute();

    $tickets = $stmt->fetch();

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
    <form action="UpdateTicket.php" method="post" >
<input type="hidden" value="<?= $tickets["id_ticket"]?>" name="id">
    <label for="price">Prix</label>
        <input name="price" id="price" type="number" required value="<?= $tickets["price"]?>">

        <label for="quantity">quantity</label>
        <input type="number" name="quantity" id="quantity" required value="<?= $tickets["quantity"]?>">

        <label for="discount">discount</label>
        <input type="text" name="discount" id="discount" value="<?= $tickets["discount"]?>">

        <label for="seat">seat</label>
        <input type="text" name="seat" id="seat" value="<?= $tickets["seat"]?>">

        <label for="movie">movie</label>
        <input type="text" name="movie" id="movie" placeholder="movie" value="<?= $tickets["movie"]?>">

        <label for="hourly">hourly</label>
        <input type="text" name="hourly" id="hourly" placeholder="movie" required value="<?= $tickets["hourly"]?>">

        <label for="checkbox"> I have read and I agree to the Terms & Conditions.</label>
        <input type="checkbox" name="chackbox" required>

        <input type="submit">
    </form>
</body>
</html>