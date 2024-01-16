<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retorno Form</title>
</head>
<body>
    <?php 

    $nome = $_GET["usu"] ?? "Sem nome";
    $sobrenome = $_GET["sen"] ?? "Sem sobrenome";

    echo "<p>Os dados $nome $sobrenome foram cadastrados</p>";

    ?>
    
</body>
</html>