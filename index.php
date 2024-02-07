

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password generator</title>
</head>
<body>
    <header>
        <h1>
            Password Generator
        </h1>
    </header>
    <main>
        <form action="" method="get">
            <label for="lenght">
                Lunghezza psw voluta
            </label>
            <div>
                <input type="number" name="lenght" id="lenght">
                <button type="submit">
                    genera
                </button>
            </div>
                        
        </form>
        <div>
            <h2>
                Password Generata
            </h2>
            <?php
                include './function.php';
                echo generate_password();
            ?>
        </div>
    </main>
</body>
</html>