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
        $salario = $_GET["salario"] ?? 0;
        $salarioMinimo = 1320.00
    ?>
    <header>
        <h1>
            Desafio 006
        </h1>
    </header>
    <main>
        <h2>Quantos saários você ganha?</h2>
        <!--Para ser recursivo, não deve indicar somente o nome do arquivo, mas sim um código php que retorna o nome do arquivo-->
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="">Seu salário (R$): </label>
            <input type="number" name="salario" id="idSalario" Value="<?php echo"$salario" ?>">

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h3>Resultado</h3>
        <?php 

            $NumSalarioMinimo = (int) ($salario/$salarioMinimo);
            $resto = $salario % $salarioMinimo;
                
            echo "<p> Quem recebe um salário de R$$salario ganha <strong>$NumSalarioMinimo salário mínimo + R$$resto</strong></p>";                
            
        ?>
    </section>
</body>
</html>