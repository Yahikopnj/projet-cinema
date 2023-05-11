<?php 
$id = $_GET["id"];


$host="localhost";
$dbname= "cinema";
$port= "3306";
$charset= "UTF8";

$dsn ="mysql:host=".$host.";dbname=".$dbname.";port=".$port.";charset=".$charset;


try{

    $dbh = new PDO($dsn, "root","");

    $stmt = $dbh->prepare("SELECT * FROM user WHERE id_user= ?");
    $stmt->bindParam(1, $id);
    $stmt->execute();

    $user = $stmt->fetch();
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
    <form action="UpdateUser.php" method="post">

<input type="hidden" name="id_user" value="<?= $user["id_user"]?>">

<label for="lastname">Enter your lastname</label>
<input type="text" name="lastname" placeholder="your lastname" id="lastname" value="<?= $user["lastname"]?>">

<label for="firstname">enter your firstname</label>
<input type="text" name="firstname" placeholder="your firstname" id="firstname"value="<?= $user["firstname"]?>">

<label for="email">Enter your email</label>
<input type="mail" name="email" placeholder="enter your mail" required id="email"value="<?= $user["email"]?>">

<label for="password">enter your password</label>
<input type="password" name="password" id="password" placeholder="enter your password" required value="<?= $user["password"]?>">

<label for="birthday">enter your birthday</label>
<input type="number" name="birthday" id="birthday" value="<?= $user["birthday"]?>">

<input type="checkbox" required>
    <label for="checkbox"> I have read and I agree to the Terms & Conditions.</label>

<label for="button"></label>
<input type="submit" value="register">

    </form>
</body>
</html>

