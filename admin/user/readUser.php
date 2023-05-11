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
    <section>
        <div>
            <ul>
                <li><?= $user["lastname"]?></li>
                <a href="./formUpdateUser.php?id=<?= $user["id_user"]?>"> modifier</a>
                <a href="./deleteUser.php?id=<?= $user["id_user"]?>"> suppr</a>
            </ul>
        </div>
    </section>
</body>
</html>