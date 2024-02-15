<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $salMin= 1380;
    $SeuSal=$_GET['salario'] ?? 0;

    $padrao= numfmt_create("pt_BR", NumberFormatter:: CURRENCY);
    
    ?>
    <main>
        <h1>Informe seu salário </h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
        <label for="salario">Salario R$</label>
        <input type="number" name="salario" id="idsal" value="<?=$SeuSal?>">
        <p>Considerano o salario minimo de<strong> R$ 1.380,00</strong>  </p>
        <input type="submit" value="Calcular">
    
    
    </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            $resultado=$SeuSal/$salMin;
            $resultDiv= intdiv($SeuSal,$salMin); 
            $restoDiv=$SeuSal%$salMin; 

            echo "Quem recebe".  numfmt_format_currency($padrao, $SeuSal, "BRL")." Ganha <strong>$resultDiv salários minimos +</storng> <p>".  numfmt_format_currency($padrao, $restoDiv, "BRL"). "</p>";
        
        
        ?>
    </section>
    
</body>
</html>