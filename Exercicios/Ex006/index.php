<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $valor1= $_GET['v1'];
    $valor2= $_GET['v2'];   
    ?>
    <main>
        <h1>Somardor de resultados</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="val1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>"> 
            <label for="val2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section id= "resultado">
        <h2>Resultado da soma</h2>
        <?php 
        $soma= $valor1+$valor2;
        echo "<p>a soma entre os valores $valor1 e $valor2 é igual a <strong>$soma </strong></p> "
        
        ?>


    </section>

</body>
</html>