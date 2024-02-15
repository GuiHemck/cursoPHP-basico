<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <h1>Conversor de moedas 1.0</h1>
        <?php 
        $din= $_GET["nome"] ?? 0;
        $dolar = 5.22;
        $result= $din / $dolar;

       // echo "Seus " . number_format($din, 2, ",",".") . " equivalem a U$$ " . number_format($result, 2, ",",".");
       $padrao= numfmt_create("pt_BR", NumberFormatter:: CURRENCY);

       echo "Seus " . numfmt_format_currency($padrao, $din, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $result, "USD");
        ?>
        <p><strong> cotação fixa de R$ 5,22</strong> informada diretamente no codigo
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
    
</body>
</html>
