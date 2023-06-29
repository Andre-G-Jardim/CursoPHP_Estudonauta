<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Segundo Desafio</h1>
        <p>Gerando números aleatórios</p>
    </header>

    <main>
        <?php 
            $min = 0;
            $max = 100;

            $valor = mt_rand($min, $max);

            echo"<p>Gerando um número aleatórop de <strong>$min</strong> até <strong>$max</strong>.<br>O valor gerado foi: <strong>$valor</strong></p>";
        ?>

        <button onclick="javascript:document.location.reload()">Recarregar</button>
    </main>
</body>
</html>