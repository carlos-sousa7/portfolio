<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="2;url=index.html">
    <title>FORUM DOS PROGRAMADORES - RM</title>
</head>
<body>
<?php
$ligacao = mysqli_connect("127.0.0.1", "root", "", "bd_forum");
if (!$ligacao){
    die ("Erro na ligação" . mysqli_connect_error());
}
$sql ="INSERT INTO t_user (nick, nome, email, data_nasc, pass, foto)
VALUES ('$_POST[nick]', '$_POST[nome]','$_POST[email]', '$_POST[data_nasc]','$_POST[pass]','$_POST[foto]')";
if (mysqli_query($ligacao, $sql)){
    echo "<h1>Registo efetuado com sucesso!</h1>";
}
mysqli_close($ligacao);
?>
    <h2>Aguarde que vai ser direcionado</h2>
</body>
</html>