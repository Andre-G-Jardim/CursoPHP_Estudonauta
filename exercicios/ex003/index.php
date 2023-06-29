<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis</title>
</head>
<body>
    <h1>Variaveis e constantes</h1>
    <?php 
        $nome = "Pedro";
        $sobrenome = "Jardim";
        const PAIS = "Brasil";

        if ($nome == "Pedro"){
            $nome = "Andre";
        }

        echo "Meu nome é $nome $sobrenome, e moro no " . PAIS;
    ?>
</body>
</html>