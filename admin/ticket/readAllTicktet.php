<?php

$host="localhost";
$dbname= "cinema";
$port= "3306";
$charset= "UTF8";

$dsn ="mysql:host=".$host.";dbname=".$dbname.";port=".$port.";charset=".$charset;

try{

    $dbh = new PDO($dsn, "root","");

    $stmt = $dbh->query("SELECT * FROM ticket;");

    $tickets = $stmt->fetchAll();

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

</body>
</html>
<?php

$host="localhost";
$dbname= "cinema";
$port= "3306";
$charset= "UTF8";

$dsn ="mysql:host=".$host.";dbname=".$dbname.";port=".$port.";charset=".$charset;

try{

    $dbh = new PDO($dsn, "root","");

    $stmt = $dbh->query("SELECT * FROM ticket;");

    $tickets = $stmt->fetchAll();

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
        <?php foreach($tickets as $ticket): ?>
            <div>
                <ul>
                    <li><?= $ticket["price"];?></li>
                    <li><?= $ticket["quantity"];?></li>
                    <li><?= $ticket["discount"];?></li>
                    <li><?= $ticket["seat"];?></li>
                    <li><?= $ticket["movie"];?></li>
                    <li><?= $ticket["hourly"];?></li>
                </ul>
                <a href="./readTicket.php?id=<?= $ticket["id_ticket"]?>">Voir detail</a>
                <a href="./formUpdateTicket.php?id=<?= $ticket["id_ticket"]?>">update</a>
                <a href="./deleteTicket.php?id=<?= $ticket["id_ticket"]?>">sppr</a>
            </div>
            <?php endforeach; ?>
    </section>

</body>
</html>