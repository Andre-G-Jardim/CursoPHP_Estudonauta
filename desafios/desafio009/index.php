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
        $nascimento = $_GET["nascimento"] ?? (int) date('Y');
        $ano = $_GET["ano"] ?? (int) date('Y');
    ?>

    <header>
        <h1>
            Desafio 009
        </h1>
    </header>

    <main>
        <h2>Calculando sua idade</h2>
        <!--Para ser recursivo, não deve indicar somente o nome do arquivo, mas sim um código php que retorna o nome do arquivo-->
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            
            <label for="nascimento">Em que ano você nasceu? </label>
            <input type="number" name="nascimento" id="idNascimento" Value="<?php echo"$nascimento" ?>">

            <label for="ano">Quer saber sua idade em que ano? (estamos em <?php echo "<strong>$ano</strong>"?>): </label>
            <input type="number" name="ano" id="idAno" Value="<?php echo"$ano" ?>">

            <input type="submit" value="Calcular Idade">
        </form>
    </main>

    <section id="resultado">
        <h3>Resultado</h3>

        <?php 

            $idade = $ano - $nascimento;
                
            echo "<p>Quem nasceu nos anos $nascimento vai ter <strong>$idade anos</strong> em $ano</p>";
            
        ?>
    </section>
</body>
</html>