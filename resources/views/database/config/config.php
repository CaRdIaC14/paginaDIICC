<?php

shell_exec("ssh -f -L 127.0.0.1:3307:127.0.0.1:3306 diicc@10.17.17.35 sleep 60 >> /var/www/carlos/www.paginadiicc.uda.cl/logfile"); 
$servidor = "127.0.0.1";
$usuario  = "root";
$password = "muda485";
$database = "paginaDIICC";
if (!mysqli_set_charset($conn, "utf8mb4")) {
        printf("Error loading character set utf8mb4: %s\n", mysqli_error($conn));
        exit();
    }
// // Crear conexión
$conexion = mysqli_connect($servidor, $usuario, $password, $database, 3307);

if ($conexion->connect_error) {
        die("Conexión fallida: ".$conexion->connect_error);
     }

?>


// //$servidor = "10.17.17.35";
// // $usuario  = "root";
// // $password = "muda485";
// // $database = "paginaDIICC";


// shell_exec("ssh -f -L 127.0.0.1:3307:127.0.0.1:3306 diicc@10.17.17.35 sleep 60 >> /var/www/carlos/www.paginadiicc.uda.cl/logfile"); 
// $servidor = "127.0.0.1";
// $usuario  = "root";
// $password = "muda485";
// $database = "paginaDIICC";



// // // Crear conexión
// $db = mysqli_connect($servidor, $usuario, $password, $database, 3307);
// if ($conexion->connect_error) {
//         die("Conexión fallida: ".$conexion->connect_error);
//      }


// // $conn=ssh2_connect('10.17.17.35',22);
// // ssh2_auth_password($conn,'diicc','diicc.2022');
// // echo $conn;
// // //Shell_exec("ssh -f -L 127.0.0.1:33038:10.17.17.35:3306 root@10.17.17.35 -i /var/www/carlos/www.paginadiicc.uda.cl");
// // // Datos admin SQL
// // $servidor = "10.17.17.35";
// // $usuario  = "root";
// // $password = "muda485";
// // $database = "paginaDIICC";



// // // Crear conexión
// // $conexion = new mysqli($servidor, $usuario, $password, $database, 3306);
// // if ($conexion->connect_error) {
// //     die("Conexión fallida: ".$conexion->connect_error);
// // }

