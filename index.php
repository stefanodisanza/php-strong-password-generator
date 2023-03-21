<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    
<?php
session_start();

include 'functions.php';

if (isset($_GET['lunghezza'])) {
    $lunghezza = $_GET['lunghezza'];
    $password = generaPassword($lunghezza);
    $_SESSION['password'] = $password;
    header('Location: mostra_password.php');
}
?>

<form method="get">
  <label for="lunghezza">Lunghezza della password:</label>
  <input type="number" id="lunghezza" name="lunghezza" min="1" max="20">
  <br>
  <br>
  <input type="submit" value="Genera Password">
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

