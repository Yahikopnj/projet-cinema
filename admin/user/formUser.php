
<!--
$lastname = $_POST["lastname"];
$firstname = $_POST["firstname"];
$email = $_POST["email"];
$password = $_POST["password"];
$birthday = $_POST["birthday"];
$admin = $_POST["admin"];

$host = "localhost";
$dbname= "cinema";
$port="3306";
$dsn = "mysql:host=".$host.";dbname=".$dbname.";port=".$port.";charset=utf8";

try{
    $dbh = new PDO($dbh, "root", "");
    $requete = $dbh->prepare("INSERT INTO`user`(`lastname`,`firstname`,`email`,`password`,`birthday`,`admin`)
    VALUES(?, ?, ?, ?, ?, ? )");
    
    $requete->bindParam(1, $lastname);
    $requete->bindParam(2, $firstname);
    $requete->bindParam(3, $email);
    $requete->bindParam(4, $password);
    $requete->bindParam(5, $birthday);
    $requete->bindParam(6, $admin);

    $requete->execute();
}catch(PDOException $exception){
echo $exception->getMessage();
}-->

<?php 

require_once("./User.php");

$usera = new User("edouare","gros","edou@gmail.com",18,"root");

$userb = new User("patrick","gros","pate@gmail.com",47,"ui");

$usera->setLastname("pierro");

echo $usera->getLastname();

try{

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



    <form action="createUser.php" method="post">

<label for="lastname">Enter your lastname</label>
<input type="text" name="lastname" placeholder="your lastname" id="lastname">

<label for="firstname">enter your firstname</label>
<input type="text" name="firstname" placeholder="your firstname" id="firstname">

<label for="email">Enter your email</label>
<input type="mail" name="email" placeholder="enter your mail" required id="email">

<label for="password">enter your password</label>
<input type="password" name="password" id="password" placeholder="enter your password" required>

<label for="birthday">enter your birthday</label>
<input type="number" name="birthday" id="birthday">

<input type="checkbox" required>
    <label for="checkbox"> I have read and I agree to the Terms & Conditions.</label>

<label for="button"></label>
<input type="submit" value="register">
<p>Déjà inscrit ? <a id="colorg" href="#"></a></p>
    </form>
</body>
</html>