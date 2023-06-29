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
        $valor_1 = $_GET["v1"] ?? 0;
        $valor_2 = $_GET["v2"] ?? 0;
    ?>
    <header>
        <h1>
            Exercício 7
        </h1>
    </header>
    <main>
        
        <h2>Somador de valores</h2>
        <!--Para ser recursivo, não deve indicar somente o nome do arquivo-->
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Valor 1:</label>
            <input type="number" name="v1" id="idv1" Value="<?php echo"$valor_1" ?>">
            <label for="v2">Valor 2:</label>
            <input type="number" name="v2" id="idv2" value="<?php echo"$valor_2" ?>">

            <input type="submit" value="Somar">
        </form>
    </main>

    <section id="resultado">
        <h3>Resultado da soma</h3>
        <?php 
            $soma =$valor_1 +$valor_2;
            echo "<p>A soma foi: <strong>$soma</strong></p>"
        ?>
    </section>
</body>
</html>