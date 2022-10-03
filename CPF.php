<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 

<h3>FORMATADO DE CPF</h3>
    <form action="" method="GET">
        <label for="cpf1">CPF</label>
        <input type="text" id="cpf1" name="cpf1">
        <br>
        <br>

      </form>	

<?php
	
    $doc = $_GET["cpf1"];


    echo formatar_cpf_cnpj($doc);
 
function formatar_cpf_cnpj($doc) {

    $doc = preg_replace("/[^0-9]/", "", $doc);
    $Cpf = strlen($doc);

    if($Cpf >= 11) {

        if($Cpf === 11 ) {

            $docFormatado = substr($doc, 0, 3) . '.' .
                            substr($doc, 3, 3) . '.' .
                            substr($doc, 6, 3) . '-' .
                            substr($doc, 9, 2);
        } else {

        }

        return $docFormatado;

    } else {
        return 'Documento invalido';
    }
}

?>

</body>
</html>