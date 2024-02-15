<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <P>
            
            <?php 
            
             $num = $_GET["numero"];
             $ant= $num -1;
             $suc= $num +1;
         
             echo"O número escolhido foi $num";
     
             echo "O seu antecessor é $ant";
     
             echo "O seu sucessor é $suc";
     
            ?>
        </P>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>

    </main>
</body>
</html>