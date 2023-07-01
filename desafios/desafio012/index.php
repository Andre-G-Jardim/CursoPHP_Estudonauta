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
        $valor = $_GET["valor"] ?? 0;
    ?>

    <header>
        <h1>
            Desafio 012
        </h1>
    </header>

    <main>
        <h2>Caixa eletrônico</h2>
        <!--Para ser recursivo, não deve indicar somente o nome do arquivo, mas sim um código php que retorna o nome do arquivo-->
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor">Qual valor você deseja sacar? (R$)</label>
            <input type="number" name="valor" id="idValor" Value="<?="$valor" ?>" step="5">

            <p style="font-size: 0.7em;"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</p>

            <input type="submit" value="Sacar">
        </form>
    </main>

    <section id="resultado">

        <?php 
            
            $cem = $valor/100;
            $cem_int = (int) $cem;

            $cincoenta = (($cem - $cem_int) * 100)/50;
            $cincoenta_int = (int) $cincoenta;

            $dez = (($cincoenta - $cincoenta_int) * 50)/10;
            $dez_int = (int) $dez;

            $cinco = (($dez - $dez_int) * 10)/5;
            $cinco_int = (int) $cinco;
                
            echo "<h3>Saque de R$".number_format($valor, 2, ",", ".")." realizado</h3>";

            echo "<ul><li>100 x$cem_int</li>";
            echo "<li>50 x$cincoenta_int</li>";
            echo "<li>10 x$dez_int</li>";
            echo "<li>5 x$cinco</li></ul>";
            
        ?>
    </section>
</body>
</html>