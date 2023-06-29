<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Quarto Desafio</h1>
        <p>Inspecionando um número real</p>
    </header>

    <main>
        <h1>Vmdl...</h1>
        <?php 
            $num = $_POST["n"] ?? 0;

            $int = (int) $num;
            $fra = $num - $int;
            
            echo"<p>Analisando o número <strong>". number_format($num, 3, ",", ".") ."</strong></p>";

            echo "<ul><li>A parte inteira do núero é: <strong>". number_format($int, 0, ",", ".") ."</strong></li>";
            
            echo "<li>A parte fracionária do núero é: <strong>". number_format($fra, 3, ",", ".") ."</strong></li></ul>";
        ?>
        <button onclick="javascript:window.location.href='index.php'">Voltar a converter</button>
    </main>
</body>
</html>