<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'php_login_database';

    try {
        $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
      } catch (PDOException $e) {
        die('Connection Failed: ' . $e->getMessage());
    }

?>

<?php 
  $conexion=mysqli_connect("localhost","root","","php_login_database") or die("Error al conectar".mysqli_error($conexion));
  
 ?>