<?php

if(isset($_POST['btn_Enviar'])){
    $prato = $_POST['prato'];
    $descr = $_POST['descr'];
    $valor = $_POST['valor'];
    $ingre = $_POST['ingre'];

    echo 'Nome do prato:' . $prato . '.<br>' . 'Descrição:' . $descr . '.<br>' . 'Valor:' . $valor . '.<br>' . 'Ingredientes:' . $ingre . '.<hr>';
  
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <form action="formulario_restaurante.php" method='post'>

        <label> Nome do prato: </label>
        <input type="text" name=prato>

        <label>Descrição:</label>
        <input type="text" name=descr>

        <label> Preço:</label>
        <input type="number" name=valor>
<br>
<br>
        <label> Ingredientes:</label>
        <input type="text" name=ingre>

        <button name="btn_Enviar"> ENVIAR </button>

    </form>


</body>

</html>
