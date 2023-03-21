<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
    
<?php
include 'functions.php';
?>

<form method="get">
  <label for="lunghezza">Lunghezza della password:</label>
  <input type="number" id="lunghezza" name="lunghezza" min="1" max="20">
  <br>
  <br>
  <input type="submit" value="Genera Password">
</form>

</body>
</html>

