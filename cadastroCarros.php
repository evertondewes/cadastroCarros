<?php
$pdo = new PDO("mysql:host=localhost:3306;
                    dbname=carros;charset=latin1",
    'root', '');


$query = $pdo->query("select * from motorista;");

$carros = $query->fetchAll(PDO::FETCH_ASSOC);

//echo '<pre>' . print_r($carros, true) . '</pre><br>';
?>

<html>
<body>
<form action="inserirCarro.php" method="post">
    Cadastrar Carro<br>
    Selecione o motora:
    <select name="id_motorista">
        <?php
        foreach ($carros as $carro){
            echo '<option value="'. $carro['id'] .'">'
                .$carro['nome'] . '</option>' . PHP_EOL;
        }
        ?>
    </select>
    <br>
    Placa: <input type="text" name="placa"><br>
    <input type="submit" value="Cadastrar" >
</form>

</body>
</html>
