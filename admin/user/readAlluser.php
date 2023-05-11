<?php

$host="localhost";
$dbname= "cinema";
$port= "3306";
$charset= "UTF8";

$dsn ="mysql:host=".$host.";dbname=".$dbname.";port=".$port.";charset=".$charset;

try{

    $dbh = new PDO($dsn, "root","");

    $stmt = $dbh->query("SELECT * FROM user;");

    $users = $stmt->fetchAll();

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
        <?php foreach($users as $user): ?>
            <div>
                <ul>
                    <li><?= $user["lastname"];?></li>
                    <li><?= $user["firstname"];?></li>
                    <li><?= $user["email"];?></li>
                    <li><?= $user["password"];?></li>
                    <li><?= $user["birthday"];?></li>
                    <li><?= $user["admin"];?></li>
                </ul>
                <a href="./readUser.php?id=<?= $user["id_user"]?>"> voir les détails</a>
                <a href="./formUpdateUser.php?id=<?= $user["id_user"]?>"> modifier</a>
                <a href="./deleteUser.php?id=<?= $user["id_user"]?>"> suppr</a>
            </div>
            <?php endforeach; ?>
    </section>

</body>
</html>