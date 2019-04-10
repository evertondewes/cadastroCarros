<?php
$pdo = new PDO("mysql:host=localhost:3306;
                    dbname=carros;charset=latin1",
    'root', '');


$idMotorista = filter_input(INPUT_POST, 'id_motorista', FILTER_VALIDATE_INT);
$strPlaca = filter_input(INPUT_POST, 'placa', FILTER_SANITIZE_STRING);

$resultado = $pdo->exec(
    "insert into carro(id_motorista, placa)
              value($idMotorista, '$strPlaca')");

echo '<pre>' . print_r($resultado, true) . '</pre><br>';
