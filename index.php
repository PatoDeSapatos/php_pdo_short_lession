<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste com pdo</title>

    <style>
        form, div {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        form {
            margin: 100px 0;
            gap: 1em;
            width: 100%;
        }

        button {
            width: 100px;
        }
    </style>
</head>
<body>
    <form action="./Functions/registerUser.php" method="post">
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>

        <button type="submit">Enviar</button>
    </form>

    <?php 
        require "./Classes/Conn.php";
        require "./Classes/DbContact.php";
        
        $lista = new DbContact();
        $array = $lista->list();

        foreach( $array as $row ) {
            echo "<hr>";
            foreach ($row as $key => $value) {
                if ( !is_int($key) ) {
                    echo "$key: $value <br>";
                }
            }
            echo "<hr>";
        } 

    ?>
</body>
</html>