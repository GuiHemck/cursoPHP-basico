<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
    $valor1= $_GET['v1']?? 0;
    $valor2= $_GET['v2']?? 0;   
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="val1">Dividendo</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>"> 
            <label for="val2">Divisor</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="Dividir">
        </form>
    </main>
    <section id= "resultado">
        <h2>Resultado da Divisão</h2>
        <?php 
        $divisao= $valor1/$valor2;
        $resultDiv= intdiv($valor1,$valor2);
        $restDiv= $valor1%$valor2;

        echo "<p>A divisão entre os valores $valor1 e $valor2 resulta em:</p> ";
        echo "<p> o resultado dadivisão é <strong>$resultDiv</strong></p> ";
        echo "<p> o resultado dadivisão é <strong>$restDiv</strong></p> ";

        ?>


    </section>

    
</body>
</html>