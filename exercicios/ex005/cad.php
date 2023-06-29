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
            $nome = $_GET["nome"] ?? "\"Nome";
            $sNome = $_GET["sNome"] ?? "Desconhecido\"";

            echo "<p> Seja Bem Vindo $nome $sNome</p>";
        ?>
    </main>
</body>
</html>