<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
<?php
$valorproduto = $_POST["valorproduto"];
$desconto = $_POST["desconto"];
$valordesconto;
$vlorfinal; 

$valordesconto = ($valorproduto * $desconto)/100;
$valorfinal = $valorproduto - $valordesconto;

echo "<h3> O produto de R$ $valorproduto com descconto de $desconto% fica por R$ $valorfinal!</h3>";

?>
</body>
</html>
