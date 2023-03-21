<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
<body>
<h1 class="title mt-5">GENERATORE DI PASSWORD</h1>  
<div class="container mt-5">
    <div class="mb-3">
        <?php
        session_start();

        $password = $_SESSION['password'];
        echo "La tua password casuale è: $password";
        ?>

        <br>
        <a href="index.php" class="btn btn-warning new_password">Genera un'altra password</a>            
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



