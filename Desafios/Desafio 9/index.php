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
        $valor1= $_GET['valor1'] ?? 0;
        $peso1= $_GET['peso1'];
        $valor2= $_GET['valor2'] ?? 0;
        $peso2= $_GET['peso2'];
    
    
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
        <label for="valor1">Valor 1:</label>
        <input type="number" name="valor1" id="valor1" value="<?=$valor1?>">
        <label for="peso1">Peso 1:</label>
        <input type="number" name="peso1" id="peso1" value="<?=$peso1?>">
        <label for="valor2">Valor 2:</label>
        <input type="number" name="valor2" id="valor2" value="<?=$valor2?>">
        <label for="peso2">Peso 2:</label>
        <input type="number" name="peso2" id="peso2" value="<?=$peso2?>">
        <input type="submit" value="Calcular Médias">
    
        </form>
    </main>
    <section>
        <h2>Calculo Das Médias</h2>
        <?php 
       
        $mediaArim= ($valor1+$valor2)/2 ??0;
        $mediaPond= (($valor1*$peso1)+($valor2*$peso2))/($peso1+$peso2);

        echo "<p>Analisando os valores<strong> $valor1</strong> e <strong>$valor2</strong></p>";
        
        echo " <p>A <strong>Média Aritmética Simples </strong> entre os valores é igual a $mediaArim</p>";
        echo " <p>A <strong>Média Aritmética Ponderada </strong>com pesos $peso1 e $peso2 é igual a $mediaPond</p>";


        ?>
    </section>
    
</body>
</html>