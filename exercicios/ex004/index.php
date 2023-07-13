<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>
    <h1>Teste de Tipos Primitivos</h1>
    <?php 
        // NUMERICOS
        // 0x = Hexadecimal - 0b = Binário - 0 = Octal
        // $num = 0x1A; //16^0 x A(10) + 16^1 x 1(1)
        // echo "O valor da variavel sum é: $num";

        $variavel = 300.5;
        var_dump($variavel)

        // $num = 3e2; // 3 x 10^2
        // echo "O valor da variavel sum é: $num";

        // BOOLEANS
        // $casado = true;
        // var_dump($casado)
        // if ($casado == true){
        //     echo "Você é casado? -SIM";
        // } else {
        //     echo "Você é casado? -NÃO";
        // }

        // ARRAYS
        // $array_vetor = [0, [1.0, 1.5], 2, 3, 4];
        // // var_dump($array_vetor)
        // echo $array_vetor[1][1]

        // CLASSES
        // class Pessoa {
        //     private string $nome;
        //     private int $idade;
        // }

        // $pessoa_1 = new Pessoa;
        // var_dump($pessoa_1);


        // CONSTANTES
        // const ESTADO = "RS";
        // const CIDADE = "Porto Alegre";
        // echo "Moro no estado do " . ESTADO . ", na cidade de " . CIDADE;

        // DIFRENÇA ASPAS ""(interpreta) e ''(Não interpreta)
        // echo "Olá mundo! \u{1F30E}";
        // echo 'Olá mundo! \u{1F30E}';

        // $nom = "Rodrigo";
        // $sNom = "Nogueira";

        // echo "$nom \"Minotauro\" $sNom";






    ?>
</body>
</html>