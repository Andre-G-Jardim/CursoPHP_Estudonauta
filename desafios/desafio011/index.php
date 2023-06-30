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
        $segundos_dec = $_GET["segundos"] ?? 0;
    ?>

    <header>
        <h1>
            Desafio 011
        </h1>
    </header>

    <main>
        <h2>Calculador de tempo</h2>
        <!--Para ser recursivo, não deve indicar somente o nome do arquivo, mas sim um código php que retorna o nome do arquivo-->
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="segundos">Qual é o total de segundos: </label>
            <input type="number" name="segundos" id="idSegundos" Value="<?="$segundos_dec" ?>">

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h3>Resultados</h3>

        <?php 

            
            $semanas = $segundos_dec/(7*24*60*60);
            $semanas_int = (int) $semanas;

            $dias = ($semanas - $semanas_int) * 7;
            $dias_int = (int) (($semanas - $semanas_int) * 7);

            $horas = ($dias - $dias_int) * 24;
            $horas_int = (int) (($dias - $dias_int) * 24);

            $minutos = ($horas - $horas_int) * 60;
            $minutos_int = (int) (($horas - $horas_int) * 60);

            $segundos_int = ($minutos - $minutos_int) * 60;
            
            
            
                
            echo "<p>Analizando o valor que você digitou, <strong>$segundos_dec segundos</strong> equeivalem a um total de:</p>";

            echo "<ul><li>$segundos_int segundos</li>";
            echo "<li>$minutos_int minutos</li>";
            echo "<li>$horas_int horas</li>";
            echo "<li>$dias_int dias</li>";
            echo "<li>$semanas_int semanas</li></ul>";
            
        ?>
    </section>
</body>
</html>