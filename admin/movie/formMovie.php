<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="createMovie.php" method="post" enctype="multipart/form-data">

<label for="name">Enter your movie name</label>
<input type="text" name="name" placeholder="movie name" id="name">

<label for="time">time</label>
<input type="number" name="time" id="time">

<label for="category">category</label>
<input type="text" name="category" placeholder="category" required id="category">

<label for="director">director</label>
<input type="text" name="director" id="director" required>

<label for="rated">enter your birthday</label>
<input type="number" name="rated" id="rated">

<label for="studio">studio</label>
<input type="text" name="studio" id="studio">

<label for="language">language</label>
<select class="language" name="language" id="language">
    <option disabled selected value="">language</option>
    <option value="vo">Vo</option>
    <option value="vostfr">Vostfr</option>
    <option value="vf">Vf</option>
</select>

<label for="plot">plot</label>
<input type="textarea" cols="150" rows="150" name="plot" id="plot" placeholder="plot" required>

<label for="poster"></label>
<input type="file" name="poster" id="poster" >

<input type="checkbox" required>
    <label for="checkbox"> I have read and I agree to the Terms & Conditions.</label>

<input type="submit">
    </form>
</body>
</html>