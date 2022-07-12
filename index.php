
<?php

    include_once('config.php');

    if(isset($_POST['submit']));

    {
        print_r($_POST['vulgo']);
        print_r($_POST['vulgovirtual']);
        print_r($_POST['codcria']);
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
        
        <h1>
            Área dos crias ( ͡° ͜ʖ ͡°)
        </h1>

        <h3>
            Só entra quem é cria
        </h3>

        <form action="index.php" method="get">

            <div>
                <label for="name">Vulgo</label>
                <input type="text" name="name" id="vulgo">
            </div>

            <div>
                <label for="name">Vulgo virtual</label>
                <input type="email" name="email" id="vulgovirtual">
            </div>

            <div>
                <label for="name">Código de cria</label>
                <input type="password" name="password" id="codcria">
            </div>

            <div class="buttons">
                <input type="submit" value="Seja cria">
            </div>

        </form>
    </div>
</body>
</html>



