<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones </title>
    <style>
        body{background-color: #5492D1; font-family: Arial;}
        #container{background: white; padding: 10px; width: 400px; margin: 150px auto;}
        .error{color: red;}
    </style>
</head>
<body>
    <div id="container">
        <h2>Multiplicar</h2>
        <form action="" method="post">
            <input type="text" name="numero01">
            <input type="text" name="numero02">
            <input type="submit" value="Calcular">
        </form>
        <?php
            include("operaciones.php");
            validarCampos();
        ?>
    </div>
</body>
</html>