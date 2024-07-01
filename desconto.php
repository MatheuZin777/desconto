<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desconto</title>
</head>

<body>
    <form method="post">
        <h1>Desconto</h1>
        <input type="number" placeholder="Valor inteiro" name="total">
        <input type="text" placeholder="desconto de" name="desconto">
        <input type="submit" value="Calcular">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $total = $_POST["total"];
            $desconto = $_POST["desconto"];
            $prctgm = 7;
        }
            $valor_descontado = (($total * $prctgm) / 100);
            echo"valor sem desconto: $total <br> valor do desconto: $valor_descontado";

        ?>
</body>

</html>