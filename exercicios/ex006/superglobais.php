<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex 006</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <!-- o <pre> serve para quebrar as lnhas de um var_dump()-->
        <pre>
            <?php 
                echo "<h1>Superglobal GET</h1>";
                var_dump(($_GET));

                echo "<h1>Superglobal POST</h1>";
                var_dump(($_POST));

                echo "<h1>Superglobal REQUEST</h1>";
                var_dump(($_REQUEST));
            ?>
        </pre>
    </main>
</body>
</html>