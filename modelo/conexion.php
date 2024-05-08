<?php
$user = getenv('DB_USER');
$password = getenv('DB_PASS');
$server = getenv('DB_HOST');
$database = getenv('DB_NAME');
// $user = 'root';
// $password = '4Doradas';
// $server = '127.0.0.1';
// $database = 'APP';

$conexion = new mysqli($server, $user, $password, $database);

if ($conexion->connect_errno) {
    echo "Connect failed: %s\n", $conexion->connect_error;
    exit();
}else{
    echo "Connect success";
}

$conexion->set_charset("utf8");

echo $user.' '.$password.' '.$server.' '.$database.' '
?>
