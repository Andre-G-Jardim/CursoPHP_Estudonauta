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
        $num = $_GET["num"] ?? 1;
    ?>
    <header>
        <h1>
            Desafio 007
        </h1>
    </header>
    <main>
        <h2>Informe um número</h2>
        <!--Para ser recursivo, não deve indicar somente o nome do arquivo, mas sim um código php que retorna o nome do arquivo-->
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="">Número: </label>
            <input type="number" name="num" id="idNum" Value="<?php echo"$num" ?>">

            <input type="submit" value="Calcular Raizes">
        </form>
    </main>

    <section id="resultado">
        <h3>Resultado</h3>
        <?php 

            $rais2 = $num ** (1/2);
            $rais3 = $num ** (1/3);
                
            echo "<p>Analizando o <strong>Número $num</strong>, temos que: </p>";
            
            echo "<ul><li>Sua Raiz quadrada é: <strong>$rais2</strong>;</li>";

            echo "<li>Sua Raiz cúbica é: <strong>$rais3</strong>;</li>";
            
        ?>
    </section>
</body>
</html>