<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1 class="title mt-5">GENERATORE DI PASSWORD</h1>  
<div class="container mt-5">
    

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
    <div class="mb-3">
        <label for="lunghezza">Lunghezza della password:</label>
        <input type="number" id="lunghezza" name="lunghezza" min="8" max="25">
        <br>
        <br>
        <input type="submit" value="Genera Password" class="btn btn-warning">
    </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

