<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Terceiro Desafio</h1>
        <p>Convertendo seus Reais para Dólares</p>
    </header>

    <section>
        <form action="cad.php" method="get">
            <label>Quanto você tem em Reais?</label>
            <input type="number" name="reais" id="idreal" step="0.01">

            <input type="submit" value="Converter ...">
        </form>
    </section>
</body>
</html>