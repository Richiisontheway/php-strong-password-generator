<?php 
    include __DIR__ . './function.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head >
<body >
    <div class="container text-center my-5"> 
        <h2 class="my-5">
            Password Generata
        </h2>
        <textarea class="t text-center w-75" style="height: 100px;">
            <?php
                if(isset($_GET['length']) && !empty($_GET['length'])){
                    $length = (int) $_GET['length'];

                    $password = generate_password($length);

                    echo htmlentities($password);
                }                
            ?>
        </textarea>
        <div class="my-5">

            <a href="./index.php" class="text-decoration-none text-light p-3 bg-success">
                vuoi un altra password?
            </a>

        </div>
    </div>
</body>
</html>