<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="createBill.php" method="post">
  
<label for="user">user</label>
    <input type="number" name="user" id="user"
    placeholder="user"required>

    <label for="adress">adress</label>
    <input type="text" name="address" id="address"
    placeholder="address"required>

    <label for="zip">zip</label>
    <input type="text" name="zip" id="zip" 
    placeholder="zip"required>

    <label for="city">city</label>
    <input type="text" name="city" id="city"
    placeholder="city"required>

    <label for="total">total</label>
    <input type="number" name="total" id="total"
    placeholder="total" required>

    <label for="billing">billing</label>
    <input type="textarea" cols="150" row="150" name="billing" id="billing"
    placeholder="billing"required>

    <label for="date">date</label>
    <input type="date" name="date" id="date"
    placeholder="date"required>

    <input type="checkbox" required>
    <label for="checkbox">I have read and accept the terms of use</label>

    <label for="button"></label>
    <input type="submit" name="submit" value="Register">
    

    













    </form>
    
</body>
</html>