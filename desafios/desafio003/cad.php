<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Terceiro Desafio</h1>
        <p>Convertendo seus Reais para Dólares</p>
    </header>

    <main>
        <?php 

            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url), true);
            $cotacao = $dados["value"][0]["cotacaoCompra"];

            $reais = $_GET["reais"] ?? false;
            

            if ($reais == false){
                echo "<p>volte e insira o valor</p>";
            } else {
                $dolar = $reais / $cotacao;
                echo "<p>Você tem <strong>$" . number_format($dolar, 2) . "</strong> dolares<br><br>Cotação atual do dolar: $cotacao<br><br>Volte e converta mais</p>";
            }

        ?>
        <button onclick="javascript:window.location.href='index.php'">Voltar a converter</button>
    </main>
</body>
</html>