<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $SeuSal=$_GET['salario'] ?? 0;

    
    ?>
    <main>
        <h1>Informe um Número </h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
        <label for="salario">Número</label>
        <input type="number" name="salario" id="idsal" value="<?=$SeuSal?>">
        <input type="submit" value="Calcular">
    
    
    </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
        
            $RaizQuadr= sqrt($SeuSal);
            $RaizCubica= $SeuSal**(1/3);
        
            echo "<p>Analisando o número <strong>$SeuSal</strong>, temos:</p>";

            echo "<p>A sua raiz quadrada é $RaizQuadr</p>";  
            echo "<p>A sua raiz cubica é $RaizCubica</p>";   
 
        
        ?>
    </section>
    
</body>
</html>