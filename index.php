
<?php

    if(isset($_POST['submit']))

    {
        print_r($_POST['name']);
        print_r($_POST['email']);
        print_r($_POST['password']);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="src/styles/reset.css">

    <link rel="stylesheet" href="src/styles/index.css">


    <title>Cria's Little Project</title>
</head>
<body>
    <div class="container-principal">
        <form action="index.php" method="POST">
        <h1>
            Área dos crias ( ͡° ͜ʖ ͡°)
        </h1>

        <h3>
            Só entra quem é cria
        </h3>

        <form action="" method="get">

            <div>
                <label for="name">Vulgo</label>
                <input type="text" name="name" id="name">
            </div>

            <div>
                <label for="name">Vulgo virtual</label>
                <input type="email" name="email" id="email">
            </div>

            <div>
                <label for="name">Código de cria</label>
                <input type="password" name="password" id="password">
            </div>

            <div class="buttons">
                <input type="submit" value="Seja cria">
            </div>

        </form>
    </div>
</body>
</html>



