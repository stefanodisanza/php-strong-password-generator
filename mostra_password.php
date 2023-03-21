<?php
session_start();

$password = $_SESSION['password'];
echo "La tua password casuale è: $password";
?>

<br>
<button>
    <a href="index.php">Genera un'altra password</a>
</button>

