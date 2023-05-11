<?php

$host="localhost";
$dbname= "cinema";
$port= "3306";
$charset= "UTF8";

$dsn ="mysql:host=".$host.";dbname=".$dbname.";port=".$port.";charset=".$charset;

try{
    
    $dbh = new PDO($dsn, "root","");

    $stmt = $dbh->query("SELECT * FROM bill;");

    $bills = $stmt->fetchAll();

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
        <?php foreach($bills as $bill): ?>
            <div>
                <ul>
                    <li><?= $bill["user"];?></li>
                    <li><?= $bill["address"];?></li>
                    <li><?= $bill["zip"];?></li>
                    <li><?= $bill["city"];?></li>
                    <li><?= $bill["total"];?></li>
                    <li><?= $bill["billing"];?></li>
                    <li><?= $bill["date"];?></li>
                </ul>
                <a href="./readBill.php?id=<?= $bill["id_bill"]?>">la detail</a>
                <a href="./formUpdateBill.php?id=<?= $bill["id_bill"]?>">change de perso</a>
                <a href="./deleteBill.php?id=<?= $bill["id_bill"]?>">Suppr</a>
            </div>
            <?php endforeach; ?>
    </section>
    
</body>
</html>