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
        $dividendo = $_GET["dividendo"] ?? 0;
        $divisor = $_GET["divisor"] ?? 1;
    ?>
    <header>
        <h1>
            Desafio 005
        </h1>
    </header>
    <main>
        <h2>Anatomia de uma divisão</h2>
        <!--Para ser recursivo, não deve indicar somente o nome do arquivo, mas sim um código php que retorna o nome do arquivo-->
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="">Dividendo:</label>
            <input type="number" name="dividendo" id="idDividendo" Value="<?php echo"$dividendo" ?>">

            <label for="divisor">Divisor:</label>
            <input type="number" name="divisor" id="idDivisor" value="<?php echo"$divisor" ?>">

            <input type="submit" value="Analisar">
        </form>
    </main>

    <section id="resultado">
        <h3>Estrutura da Divisão</h3>
        <?php 

            if ($divisor == 0){
                echo "Impossível Dividir por 0";
            } else {
                $resultado_int = (int) ($dividendo/$divisor);
                $resto = $dividendo % $divisor;
    
                echo "<p>Dividendo: <strong>$dividendo</strong></p>";

                echo "<br><p>Divisor: <strong>$divisor</strong></p>";

                echo "<br><p>Quociente: <strong>$resultado_int</strong></p>";

                echo "<br><p>Resto: <strong>$resto</strong></p>";
            }
            
        ?>
    </section>
</body>
</html>