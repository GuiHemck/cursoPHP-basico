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
    <h1>Conversor de moedas 2.0</h1>

        <?php 

        $inicio = date("m-d-Y" , strtotime("-7 days"));
        $fim = date("m-d-Y");

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        //var_dump($dados);

        $cotacao = $dados['value'][0]["cotacaoCompra"];

        //echo "$cotacao";

        $din= $_GET["nome"] ?? 0;
        $dolar = $cotacao;
        $result= $din / $dolar;

       // echo "Seus " . number_format($din, 2, ",",".") . " equivalem a U$$ " . number_format($result, 2, ",",".");
       $padrao= numfmt_create("pt_BR", NumberFormatter:: CURRENCY);

       echo "Seus " . numfmt_format_currency($padrao, $din, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $result, "USD");

       echo "<p>cotação atual de <strong> u$$: $cotacao</strong> "

        ?>

        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
    
</body>
</html>
