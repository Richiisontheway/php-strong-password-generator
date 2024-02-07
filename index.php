

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
            <input type="number" name="lenght" id="lenght">
            <?php
                    function generate_password(){
                        $chars =  'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'.
                                    '0123456789`-=~!@#$%^&*()_+,./<>?;:[]{}\|';
                        
                        $str = '';
                        $max = strlen($chars) - 1;
                        
                        for ($i=0; $i < $_GET['lenght']; $i++)
                            $str .= $chars[mt_rand(0, $max)];
                        
                        return $str;
                    }
            ?>
            <button type="submit">
                invia
            </button>
        </form>
        <?php 
            echo generate_password();
        ?>
    </main>
</body>
</html>