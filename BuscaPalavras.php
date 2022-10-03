<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busacdor de palavras</title>
    <style>
        .palavras {
            color: red;
        }
    </style>
</head>
<body>
    <!--Professor sério mesmo, peguei o livro de PHP na faculdade, 
    pesquisei em todo lugar e não consegui fazer como o senhor queria, 
    aqui ele só digita o texto e define qual parte quer em vermelho, foi o max que eu consegui fazer -->
    
    <h1>Buscador de palavras</h1>

    <form action="" method="get" name="form_busca">
        <label for="texto">Digite o texto: </label>
        <input type="text" name="texto"><br>
        <label for="busca">Busca: </label>
        <input type="text" name="busca">
        <input type="submit" value="Pesquisar">
    </form>
    <?php
        $texto = $_GET["texto"];
        $busca = $_GET["busca"];

        function BuscaTexto($texto, $busca){
            $novo_texto = str_replace("$busca", "<font color=red>$busca</font>", $texto);

            echo $novo_texto;
        }

        BuscaTexto($texto, $busca);
    ?>
</body>
</html>