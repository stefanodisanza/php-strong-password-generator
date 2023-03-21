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
if (isset($_GET['lunghezza'])) {
    $lunghezza = $_GET['lunghezza'];
    $password = generaPassword($lunghezza);
    echo "La tua password casuale è: $password";
}

function generaPassword($lunghezza = 10) {
    $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()';
    $numeroCaratteri = strlen($caratteri);
    $passwordCasuale = '';
    for ($i = 0; $i < $lunghezza; $i++) {
        $passwordCasuale .= $caratteri[rand(0, $numeroCaratteri - 1)];
    }
    return $passwordCasuale;
}
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

