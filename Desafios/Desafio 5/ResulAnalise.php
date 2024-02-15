<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de número real</h1>
        <?php 
        $num = $_GET["number"] ?? 0;
        $number= str_replace(",",",",$num);
        $int = intval($number);
        $inter= str_replace(",",",", $int);

        $frac = $number - $inter;

        echo " Analisando o número ". number_format($num , 3, ",","."). " informado pelo unsuario ";
        echo "<p> A parte inteira do numero é $int</p>";
        echo "<p> A parte fracionada do numero é " .  number_format($frac , 3, ",","."). "</p>";

        
        ?>
                <button onclick="javascript:history.go(-1)">Voltar</button>

    </main>
    
</body>
</html>