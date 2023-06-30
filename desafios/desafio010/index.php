<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diretório</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preco = $_GET["preco"] ?? 0;
        $reajuste = $_GET["reajuste"] ?? 0;
    ?>

    <header>
        <h1>
            Desafio 010
        </h1>
    </header>

    <main>
        <h2>Reajuste de preço</h2>
        <!--Para ser recursivo, não deve indicar somente o nome do arquivo, mas sim um código php que retorna o nome do arquivo-->
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            
            <label for="preco">Preço do produto (R$): </label>
            <input type="number" name="preco" id="idPreco" Value="<?php echo"$preco" ?>">

            <label for="reajuste">Qual será o percentual de reajuste (<?="$reajuste"?>%):</label>
            <input type="range" min="-100" max="100" name="reajuste" id="idReajuste" step="0.1" Value="<?="$reajuste" ?>">

            <input type="submit" value="Calcular Reajuste">
        </form>
    </main>

    <section id="resultado">
        <h3>Resultado do Reajuste</h3>

        <?php 

            $precoFinal = $preco * (1 + ($reajuste/100));
                
            echo "<p>O produto que custava $preco, com $reajuste% de aumento, vai passar a custar $precoFinal a partir de agora.</p>";
            
        ?>
    </section>
</body>
</html>