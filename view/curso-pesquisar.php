<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesquisar</title>
</head>
<body>
    <form action="curso-pesquisar.php" method="post">
        <label for="nome">Pesquisar por nome:</label>
        <input type="text" id="nome" name="nome" autofocus>
        <input type="submit" value="Pesquisar">
    </form>
<?php
include "../vendor/autoload.php";
$c1 = new \App\Model\Curso();
$c1->setNome($_POST['nome']);
$c1DAO = new \App\DAO\CursoDAO();
echo "<table style='border: 1px solid black'><tr><th>ID</th><th>Nome</th><th>Valor</th></tr>";
foreach ($c1DAO->pesquisar($c1) as $item){
    echo "<tr>";
    echo "<td>{$item->getId()}</td>";
    echo "<td>{$item->getNome()}</td>";
    echo "<td>{$item->getValor()}</td>";
    echo "</tr>";

}
?>
</body>
</html>