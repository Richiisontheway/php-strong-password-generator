
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>password generator</title>
</head>
<body>
    <header class="container text-center my-5">
        <h1>
            Password Generator
        </h1>
    </header>
    <main>
        <div class="container text-center">
            <form action="./page.php" method="get">
                <label for="lenght" class="my-4">
                    <strong>
                        Lunghezza psw voluta
                    </strong>
                </label>
                <div class="my-4">
                    <div>
                        <input type="number" name="length" id="length" class="w-25">
                    </div>
                    <button type="submit" class="my-5 p-3 bg-danger-subtle ">
                        Genera Password
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>