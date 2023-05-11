<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="createTicket.php" method="post">

    <label for="price">Prix</label>
        <input name="price" id="price" type="number" required>

        <label for="quantity">quantity</label>
        <input type="number" name="quantity" id="quantity" required>

        <label for="discount">discount</label>
        <input type="text" name="discount" id="discount">

        <label for="seat">seat</label>
        <input type="text" name="seat" id="seat">

        <label for="movie">movie</label>
        <input type="text" name="movie" id="movie" placeholder="movie">

        <label for="hourly">hourly</label>
        <input type="text" name="hourly" id="hourly" placeholder="movie" required>

        <label for="checkbox"> I have read and I agree to the Terms & Conditions.</label>
        <input type="checkbox" name="chackbox" required>

        <input type="submit">
    </form>
</body>
</html>