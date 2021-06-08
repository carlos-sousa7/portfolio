<html>
<head>
    <meta charset="UTF-8">
    <title>Listar Dados</title>
</head>
<body>
    <?php
    $ligacao = mysqli_connect("127.0.0.1", "root", "", "bd_forum");
    if ($ligacao->connect_error) {
        die(mysqli_error($ligacao));
    }
    $sql = "SELECT * FROM t_user";
    $resultado =mysqli_query($ligacao, $sql) or die(mysqli_error($ligacao));
    $numreg = 0;
    $numbloq = 0;
    while ($linha = mysqli_fetch_assoc($resultado)) {
        echo "<br>ID: " . $linha['id'] . "<br/>";
        echo "Nick: " . $linha['nick'] . "<br/>";
        echo "Nome: " . $linha['nome'] . "<br/>";
        echo "Email: " . $linha['email'] . "<br/>";
        echo "Data de nascimento: " .
            $linha['data_nasc'] . "<br>";
        echo "Foto:<br> <img src='" . $linha['foto'] . "'height='100'/><br/>";
        echo "<hr/>";
        $numreg++;
    }
    echo "N. total de utilizadores > " . $numreg . "<br>";
    mysqli_close($ligacao);
    ?> <br/><br/>
    <input type="button" value="Voltar ao menu" onclick="window.history.go(-1);">
</body>
</html>