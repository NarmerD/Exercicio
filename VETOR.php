<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  

<h3>INVERTE VETORES</h3>
<form action="" method="GET">
        <label for="vetor">Vetor</label>
        <input type="text" id="vetor" name="vetor">
        <br>
        <br>

      </form>


<?php

$array = $_GET['vetor'];

$arrays = array($array);


$arrayIn = array_reverse($arrays);

$valoresInvertidos = implode(', ', $arrayIn);

echo('Após inverter o vetor, teremos: ');

echo($valoresInvertidos);


?>

</body>
</html>