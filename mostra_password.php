<?php
session_start();

$password = $_SESSION['password'];
echo "La tua password casuale è: $password";
?>