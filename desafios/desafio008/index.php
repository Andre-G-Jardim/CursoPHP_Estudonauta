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
        $v1 = $_GET["v1"] ?? 0;
        $v2 = $_GET["v2"] ?? 0;
        $p1 = $_GET["p1"] ?? 1;
        $p2 = $_GET["p2"] ?? 1;

    ?>
    <header>
        <h1>
            Desafio 008
        </h1>
    </header>
    <main>
        <h2>Informe um número</h2>
        <!--Para ser recursivo, não deve indicar somente o nome do arquivo, mas sim um código php que retorna o nome do arquivo-->
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">1º valor: </label>
            <input type="number" name="v1" id="idV1" Value="<?php echo"$v1" ?>">

            <label for="p1">1º peso: </label>
            <input type="number" name="p1" id="idP1" Value="<?php echo"$p1" ?>">

            <label for="v2">2º valor: </label>
            <input type="number" name="v2" id="idV2" Value="<?php echo"$v2" ?>">

            <label for="p2">2º peso: </label>
            <input type="number" name="p2" id="idP2" Value="<?php echo"$p2" ?>">

            <input type="submit" value="Calcular Raizes">
        </form>
    </main>

    <section id="resultado">
        <h3>Resultado</h3>
        <?php 

            $medSimples = ($v1 + $v2)/2;
            $medPonderada = ($v1*$p1 + $v2*$p2)/($p1 + $p2);
                
            echo "<p>Analizando os valores <strong>$v1 e $v2</strong>, temos que: </p>";
            
            echo "<ul><li>A média Simples é: <strong>$medSimples</strong>;</li>";

            echo "<li>A média Ponderada é: <strong>$medPonderada</strong>;</li>";
            
        ?>
    </section>
</body>
</html>