<?php

    

    if(isset($_POST['submit']))

    {
    
    include_once('config.php');

    $vulgo = $_POST['vulgo'];
    $vulgovirtual = $_POST['vulgovirtual'];
    $codcria = $_POST['codcria'];

   

   $result = mysqli_query($conecta, "INSERT INTO users(vulgo,vulgovirtual,codcria) VALUES ($vulgo,$vulgovirtual,$codcria)");
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

        <form action="index.php" method="POST">

            <div>
                <label for="vulgo">Vulgo</label>
                <input type="text" name="vulgo" id="vulgo">
            </div>

            <div>
                <label for="vulgovirtual">Vulgo virtual</label>
                <input type="email" name="vulgovirtual" id="vulgovirtual">
            </div>

            <div>
                <label for="codcria">Código de cria</label>
                <input type="password" name="codcria" id="codcria">
            </div>

            <div class="buttons">
                <input type="submit" name= "submit" id="submit" value="Seja cria">
            </div>

        </form>
    </div>
</body>
</html>



