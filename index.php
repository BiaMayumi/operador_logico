<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador Lógico</title>
</head>

<body>
    <form method="POST" action="">
        <label for="idade">Informe a sua idade:</label>
        <br>
        <input type="number" name="idade" required><br><br>
        <input type="submit" value="verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") { //$_server - informações do script 
        $idade = $_POST["idade"];

        if ($idade < 16 && $idade =="" ) {
            echo "Você não pode votar.";
        } elseif ($idade >= 16 && $idade < 18) { // &&- retorna true se os dois operadores forem true, senão retorna para o false.//
            echo "Seu voto é facultativo.";
        } elseif ($idade >= 18 && $idade < 65) {
            echo "Seu voto é obrigatório.";
        } else {
            echo "Seu voto é facultativo.";
        }
        
    }

    ?>

</body>

</html>

