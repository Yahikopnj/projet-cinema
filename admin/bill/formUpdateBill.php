<?php 

$id_bill = $_GET["id"];

$host="localhost";
$dbname= "cinema";
$port= "3306";
$charset= "UTF8";

$dsn ="mysql:host=".$host.";dbname=".$dbname.";port=".$port.";charset=".$charset;


try{
    
    $dbh = new PDO($dsn, "root","");
    $stmt = $dbh->prepare("SELECT * FROM bill WHERE id_bill=?;");

    $stmt->bindParam(1, $id_bill);
    $stmt->execute();

    $bill = $stmt->fetch();

}
catch(PDOException $error){
    echo $error->getMessage();
}

?>

<form action="./updateBill.php" method="post">
<input type="hidden" value="<?= $bill["id_bill"]?>" name="id">
<label for="user">user</label>
    <input type="number" name="user" id="user"
    placeholder="user" value="<?= $bill["user"]?>">

    <label for="adress">adress</label>
    <input type="text" name="address" id="address"
    placeholder="address" value="<?= $bill["address"]?>">

    <label for="zip">zip</label>
    <input type="text" name="zip" id="zip" 
    placeholder="zip" value="<?= $bill["zip"]?>">

    <label for="city">city</label>
    <input type="text" name="city" id="city"
    placeholder="city" value="<?= $bill["city"]?>">

    <label for="total">total</label>
    <input type="number" name="total" id="total"
    placeholder="total" value="<?= $bill["total"]?>">

    <label for="billing">billing</label>
    <input type="textarea" cols="150" row="150" name="billing" id="billing"
    placeholder="billing" value="<?= $bill["billing"]?>">

    <label for="date">date</label>
    <input type="date" name="date" id="date"
    placeholder="date" value="<?= $bill["date"]?>">


    <label for="button"></label>
    <input type="submit" name="submit" value="update">
    
</form>