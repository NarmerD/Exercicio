<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma Vetor</title>
</head>
<body>

    <form action="" method="get">
        <label for="n1">Primeiro Numero</label>
        <input type="number" name="n1" id="n1"><br><br>
        <label for="n2">Segundo Numero</label>
        <input type="number" name="n2" id="n2"><br><br>
        <label for="n3">Terceiro Numero</label>
        <input type="number" name="n3" id="n3"><br><br>
        <label for="n4">Quarto Numero</label>
        <input type="number" name="n4" id="n4"><br><br>

        <input type="submit" value="Somar"><br><br>
    </form>
    <?php
    
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $n3 = $_GET["n3"];
        $n4 = $_GET["n4"];
    
        $vetor = [$n1, $n2, $n3, $n4];
        $soma = 0;

     if (isset($n1, $n2, $n3, $n4)){ 
        for($i = 0; $i <= 3; $i++){
            $soma = $soma + $vetor[$i];
        }
   
        echo "A Soma dos 4 valores é: $soma";

    } else {

        echo "Numeros ainda não informados.";
        
    }
    ?>
</body>
</html>