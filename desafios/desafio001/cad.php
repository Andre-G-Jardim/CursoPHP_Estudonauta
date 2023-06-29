<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respondendo o Forms</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resposta ao Forms</h1>
    </header>
    
    <main>
        <?php 
            $numero = $_GET["numero"] ?? false;

            if ($numero == false){
                echo "<p> Volte e digite um número<p>";
            } else {
                echo "<p>Você escolheu o número: <strong>$numero</strong>
                <br>Seu Sucessor é: <strong>". $numero + 1 ."</strong> <br>Seu Antecessor é: <strong>". $numero - 1 ."</strong></p>";
            }
        ?>
            <button onclick="javascript:window.location.href='index.php'">Voltar</button>
    </main>
</body>
</html>