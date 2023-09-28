<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador Lógico</title>
</head>

<body>
    <h1>Posso Votar?</h1>
    <form method="POST" action="">
        <label for="idade">Informe a sua idade:</label>
        <br>
        <input type="number" name="idade" required><br><br>
        <input type="submit" value="verificar">
    </form>

    <?php

    $idade = filter_input(INPUT_POST,"idade");

    if ($idade < 16) {
        echo "Você não pode votar";
    } else if ( $idade >= 16 && $idade <= 18) {
        echo "O seu voto é facultativo";
    } else if ($idade >= 19 && $idade <= 65) {
        echo "O seu voto é obrigatório";
    } else if ($idade > 65 && $idade <= 120) {
        echo "O seu voto é facultativo";
    } else {
        echo "";
    }

?>

</body>

</html>
